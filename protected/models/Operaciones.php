<?php

/**
 * Description of Operaciones
 *
 * @author Julian Gonzalez Prieto (Avuuna, la Luz del Alba).
 */
class Operaciones {

    public static $not = "¬";
    public static $and = "∧";
    public static $or = "∨";
    public static $impl = "→";
    public static $equiv = "≡";
    public static $parenOp = "(";
    public static $parenCl = ")";
    public static $true = "V";
    public static $false = "F";

    public static function funcNot($p) {
        return $p == self::$true ? self::$false : self::$true;
    }

    public static function funcAnd($p, $q) {
        return $p == self::$true && $q == self::$true ? self::$true : self::$false;
    }

    public static function funcOr($p, $q) {
        return $p == self::$false && $q == self::$false ? self::$false : self::$true;
    }

    public static function funcImpl($p, $q) {
        return self::funcOr(self::funcNot($p), $q);
    }

    public static function funcEquiv($p, $q) {
        return $p == $q ? self::$true : self::$false;
    }

    public static function getOperadores() {
        return array(
            '' => '',
            self::$not => self::$not,
            self::$and => self::$and,
            self::$or => self::$or,
            self::$impl => self::$impl,
            self::$equiv => self::$equiv,
        );
    }

    public static function getOperador($inicial) {
        $operador = self::getOperadores();
        return $operador[$inicial];
    }

}
