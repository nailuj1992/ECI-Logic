<?php

/**
 * Clase encargada de validar y evaluar una formula logica.
 * 
 * Links de ayuda:
 * <li>https://github.com/felipebz/calculadora-logica</li>
 *
 * @author Julian Gonzalez Prieto (Avuuna, la Luz del Alba).
 */
class Expresion {

    public static $not = "0";
    public static $or = "1";
    public static $and = "2";
    public static $impl = "3";
    public static $equiv = "4";
    private $pila;

    /**
     * Constructor de la clase Expresion.
     */
    public function Expresion() {
        $this->pila = null;
    }

    /**
     * Permite ejecutar una formula logica.
     * 
     * @param type $formula Formula como cadena.
     */
    public function ejecutar($formula) {
        $segmentos = $this->fragmentar($formula);
        $fila = $this->convertir($segmentos);
        $this->pila = $this->resolver($fila);
    }

    /**
     * Valida que una formula logica este bien escrita (formula bien formada).
     * 
     * @param type $formula La formula como cadena. En la formula debe haber unicamente conectores logicos y valores V y F (Verdadero y Falso).
     * @return type Resultado de la validacion de la formula.
     */
    public function validar($formula) {
        $not = Operaciones::$not;
        $and = Operaciones::$and;
        $or = Operaciones::$or;
        $impl = Operaciones::$impl;
        $equiv = Operaciones::$equiv;
        $parenOp = Operaciones::$parenOp;
        $parenCl = Operaciones::$parenCl;
        $false = Operaciones::$false;
        $true = Operaciones::$true;
        $pattern = "/^($not*[$parenOp]*?|([$false$true]|[$parenOp]*[$not]*?[$false$true])[$parenCl]*?($or|$and|$impl|$equiv)[$parenOp]?[$not]?[$parenOp]?)*($false|$true|[$false$true][$parenCl]*)$/";
        return $this->valide($pattern, $formula);
    }

    /**
     * Valida que una formula logica este bien escrita (formula bien formada).
     * 
     * @param type $formula La formula como cadena. En la formula puede haber unicamente conectores logicos, valores V y F (Verdadero y Falso) y variables o meta-variables(letras A-E y p-z menos w).
     * @return type Resultado de la validacion de la formula.
     */
    public function validarConSimbolos($formula) {
        $not = Operaciones::$not;
        $and = Operaciones::$and;
        $or = Operaciones::$or;
        $impl = Operaciones::$impl;
        $equiv = Operaciones::$equiv;
        $parenOp = Operaciones::$parenOp;
        $parenCl = Operaciones::$parenCl;
        $false = Operaciones::$false;
        $true = Operaciones::$true;
        $letras = "ABCDEpqrstuvxyz";
        $letra = "A|B|C|D|E|p|q|r|s|t|u|v|x|y|z";
        $pattern = "/^($not*[$parenOp]*?|([$false$true$letras]|[$parenOp]*[$not]*?[$false$true$letras])[$parenCl]*?($or|$and|$impl|$equiv)[$parenOp]?[$not]?[$parenOp]?)*($false|$true|$letra|[$false$true$letras][$parenCl]*)$/";
        return $this->valide($pattern, $formula);
    }

    /**
     * Convierte los conectores logicos de una formula a otros caracteres distintivos, por ejemplo:
     * <li>¬ a 0.</li>
     * <li>∨ a 1.</li>
     * <li>∧ a 2.</li>
     * <li>→ a 3.</li>
     * <li>≡ a 4.</li>
     * 
     * @param type $formula
     * @return type
     */
    public static function replace($formula) {
        return str_replace(Operaciones::$not, self::$not, str_replace(Operaciones::$and, self::$and, str_replace(Operaciones::$or, self::$or, str_replace(Operaciones::$impl, self::$impl, str_replace(Operaciones::$equiv, self::$equiv, $formula)))));
    }

    /**
     * Convierte los conectores logicos de una formula con caracteres distintivos a los caracteres normales, por ejemplo:
     * <li>0 a ¬.</li>
     * <li>1 a ∨.</li>
     * <li>2 a ∧.</li>
     * <li>3 a →.</li>
     * <li>4 a ≡.</li>
     * 
     * @param type $formula
     * @return type
     */
    public static function replaceBack($formula) {
        return str_replace(self::$not, Operaciones::$not, str_replace(self::$and, Operaciones::$and, str_replace(self::$or, Operaciones::$or, str_replace(self::$impl, Operaciones::$impl, str_replace(self::$equiv, Operaciones::$equiv, $formula)))));
    }

    /**
     * Valida que una formula siga el patron ingresado.
     * 
     * @param type $pattern Patron (expresion regular) que debe seguir la formula.
     * @param type $formula Formula ingresada.
     * @return boolean Resultado de la validacion: <b>true</b> si la formula esta correcta, <b>false</b> de lo contrario.
     */
    private function valide($pattern, $formula) {
        $parentesis = 0;
        $expresion = trim(str_replace(" ", "", $formula));
        for ($i = 0; $i < strlen($expresion); $i++) {
            if ($expresion{$i} == Operaciones::$parenOp) {
                $parentesis++;
            }
            if ($expresion{$i} == Operaciones::$parenCl) {
                $parentesis--;
            }
        }
        if ($parentesis == 0) {
            if (preg_match($pattern, $expresion)) {
                return true;
            }
            return false;
        }
        return false;
    }

    /**
     * Fragmenta una formula en una lista que la representa.
     * 
     * <b>Nota:</b> Los conectores logicos los convierte a otros caracteres distintivos (Ver metodo <b>replace()</b>).
     * 
     * @param type $formula La formula como cadena.
     * @return type La formula como lista.
     */
    private function fragmentar($formula) {
        $expresion = str_replace("", " ", str_replace(" ", "", $formula));
        $expresion = self::replace($expresion);
        $expresion = trim($expresion);
        return explode(" ", $expresion)[0];
    }

    /**
     * Indica si un operador es mas importante (precedencia) que otro.
     * 
     * @param type $op1 Operador 1.
     * @param type $op2 Operador 2.
     * @return boolean <b>true</b> si el operador 1 es mas importante que el operador 2, <b>false</b> de lo contrario.
     */
    private function esMasImportante($op1, $op2) {
        return $this->precedencia($op1) >= $this->precedencia($op2);
    }

    /**
     * Indica la precedencia de un operador.
     * 
     * Links de ayuda:
     * <li>http://www.javamexico.org/foros/java_micro_edition/calculadora_usando_notacion_polaca_inversa</li>
     * 
     * @param type $operador Operador con precedencia (¬, ∨, ∧, →, ≡).
     * @return int Precedencia del operador. Es <b>-1</b> si no es un operador logico.
     */
    private function precedencia($operador) {
        switch ($operador) {
            case self::$not:
                return 3;
            case self::$or:
            case self::$and:
                return 2;
            case self::$impl:
                return 1;
            case self::$equiv:
                return 0;
            default:
                return -1;
        }
    }

    /**
     * Convierte la formula con sus componentes en forma de lista de notacion infija a posfija (notacion polaca inversa).
     * 
     * Links de ayuda:
     * <li>https://es.wikipedia.org/wiki/Notaci%C3%B3n_polaca_inversa</li>
     * <li>https://www.infor.uva.es/~cvaca/asigs/AlgInfPost.htm</li>
     * 
     * @param type $segmentos Elementos de la formula en forma de lista. En la lista debe haber unicamente conectores logicos y valores V y F (Verdadero y Falso).
     * @return \Fila Lista con los elementos de la formula en formato RPN (Reverse Polish Notation).
     */
    private function convertir($segmentos) {
        $fila = new Fila();
        $pila = new Pila();
        for ($i = 0; $i < strlen($segmentos); $i++) {
            $elem = $segmentos{$i};
            if (preg_match("[" . Operaciones::$false . "|" . Operaciones::$true . "]", $elem)) {
                $fila->add($elem);
            } else if ($elem == self::$not || $elem == Operaciones::$parenOp) {
                $pila->add($elem);
            } else if ($elem == Operaciones::$parenCl) {
                while ($pila->getEnd() != Operaciones::$parenOp) {
                    $fila->add($pila->remove());
                }
                $pila->remove();
            } else {
                while (!$pila->isEmpty() && $this->esMasImportante((string) $pila->getEnd(), $elem)) {
                    $fila->add($pila->remove());
                }
                $pila->add($elem);
            }
        }
        while (!$pila->isEmpty()) {
            $fila->add($pila->remove());
        }
        return $fila;
    }

    /**
     * Evalua los valores Verdadero y Falso en una formula con formato RPN (Reverse Polish Notation).
     * 
     * <b>Nota:</b> Los conectores logicos los convierte de otros caracteres distintivos a caracteres normales (Ver metodo <b>replaceBack()</b>).
     * 
     * @param type $fila Lista con los elementos de la formula en formato RPN (Reverse Polish Notation). En la lista debe haber unicamente conectores logicos y valores V y F (Verdadero y Falso).
     * @return \Pila Pila que contiene los resultados de la evaluacion de la formula. Si no contiene nada o contiene mas de un elemento es que hubo un error al momento de ingresar o evaluar la formula.
     */
    private function resolver($fila) {
        $pila = new Pila();
        while (!$fila->isEmpty()) {
            $x = self::replaceBack($fila->remove());
            if ($x == Operaciones::$true || $x == Operaciones::$false) {
                $pila->add($x);
            } else {
                switch ($x) {
                    case Operaciones::$and:
                        $p = $pila->remove();
                        $q = $pila->remove();
                        $pila->add(Operaciones::funcAnd($q, $p));
                        break;
                    case Operaciones::$or:
                        $p = $pila->remove();
                        $q = $pila->remove();
                        $pila->add(Operaciones::funcOr($q, $p));
                        break;
                    case Operaciones::$not:
                        $p = $pila->remove();
                        $pila->add(Operaciones::funcNot($p));
                        break;
                    case Operaciones::$impl:
                        $p = $pila->remove();
                        $q = $pila->remove();
                        $pila->add(Operaciones::funcImpl($q, $p));
                        break;
                    case Operaciones::$equiv:
                        $p = $pila->remove();
                        $q = $pila->remove();
                        $pila->add(Operaciones::funcEquiv($q, $p));
                        break;
                }
            }
        }
        return $pila;
    }

    /**
     * Representa un objeto de esta clase como cadena de caracteres.
     * 
     * @return type Cadena que representa al objeto.
     */
    public function __toString() {
        return $this->pila != null ? (string) $this->pila : LogicaException::nullStack;
    }

}
