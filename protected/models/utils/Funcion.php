<?php

/**
 * Description of Funcion
 *
 * @author Julian Gonzalez Prieto (Avuuna, la Luz del Alba).
 */
class Funcion {

    const tablas = "Tablas de Verdad";
    const calculadora = "Calculadora Lógica";
    const conector = "Conectores";
    const deduccion = "Deducción Lógica";
    const acerca = "Acerca de";

    public static function setFlash($type, $title, $message) {
        Yii::app()->user->setFlash($type, "<h4><strong>$title</strong></h4> $message");
    }

}
