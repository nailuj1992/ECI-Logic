<?php

/**
 * Description of Expresion
 * https://github.com/felipebz/calculadora-logica
 * https://es.wikipedia.org/wiki/Notaci%C3%B3n_polaca_inversa
 *
 * @author Julian Gonzalez Prieto (Avuuna, la Luz del Alba).
 */
class Expresion {

    public $expresion;
    public $segmentos;
    private $fila, $pila;

    public function Expresion($expresion = null) {
        $this->expresion = $expresion;
    }

    public function ejecutar() {
        $this->segmentos = $this->fragmentar();
        $this->separar();
        $this->resolver();
    }

    public function validar($formula) {
        $parentesis = 0;
        $expresion = strtoupper(trim(str_replace(" ", "", $formula)));
        for ($i = 0; $i < strlen($expresion); $i++) {
            if ($expresion{$i} == Operaciones::$parenOp) {
                $parentesis++;
            }
            if ($expresion{$i} == Operaciones::$parenCl) {
                $parentesis--;
            }
        }
        if ($parentesis == 0) {
            $pattern = "/^(¬*[(]*?|([FV]|[(]*[¬]*?[FV])[)]*?(∨|∧|→|≡)[(]?[¬]?[(]?)*(F|V|[FV][)]*)$/";
            if (preg_match($pattern, $expresion)) {
                return true;
            }
            return false;
        }
        return false;
    }

    public static function replace($expresion) {
        return str_replace(Operaciones::$not, '!', str_replace(Operaciones::$and, '&', str_replace(Operaciones::$or, '|', str_replace(Operaciones::$impl, '>', str_replace(Operaciones::$equiv, '=', $expresion)))));
    }

    public static function replaceBack($expresion) {
        return str_replace('!', Operaciones::$not, str_replace('&', Operaciones::$and, str_replace('|', Operaciones::$or, str_replace('>', Operaciones::$impl, str_replace('=', Operaciones::$equiv, $expresion)))));
    }

    private function fragmentar() {
        $expresion = str_replace("", " ", str_replace(" ", "", $this->expresion));
        $expresion = strtoupper(trim($expresion));
        $expresion = self::replace($expresion);
        return explode(" ", $expresion)[0];
    }

    private function esMasImportante($valor, $topePila) {
        $precedencia = Operaciones::$not . Operaciones::$or . Operaciones::$and . Operaciones::$impl . Operaciones::$equiv;
        $precedencia = self::replace($precedencia);
        $tp = self::replace($topePila);
        $val = self::replace($valor);
        if ($tp == Operaciones::$parenOp) {
            return false;
        }
        if (strpos($precedencia, $tp) === false) {
            return false;
        }
        if (strpos($precedencia, $val) === false) {
            return false;
        }
        if (strpos($precedencia, $tp) >= strpos($precedencia, $val)) {
            return false;
        }
        return true;
    }

    private function separar() {
        $fila = new Fila();
        $pila = new Pila();
        for ($i = 0; $i < strlen($this->segmentos); $i++) {
            $elem = $this->segmentos{$i};
            if (preg_match("[" . Operaciones::$false . "|" . Operaciones::$true . "]", $elem)) {
                $fila->add($elem);
            } else if ($elem == Operaciones::$not || $elem == Operaciones::$parenOp) {
                $pila->add($elem);
            } else if ($elem == Operaciones::$parenCl) {
                while ($pila->getEnd() != Operaciones::$parenOp) {
                    $fila->add($pila->remove());
                }
                $pila->remove();
            } else {
                if (!$pila->isEmpty()) {
                    if ($this->esMasImportante($elem, (string) $pila->getEnd())) {
                        $fila->add($pila->remove());
                    }
                }
                $pila->add($elem);
            }
        }
        while (!$pila->isEmpty()) {
            $fila->add($pila->remove());
        }
        $this->fila = $fila;
        $this->pila = $pila;
    }

    private function resolver() {
        $fila = $this->fila;
        $pila = $this->pila;
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
        $this->fila = $fila;
        $this->pila = $pila;
    }

    public function __toString() {
        return (string) $this->pila;
    }

}
