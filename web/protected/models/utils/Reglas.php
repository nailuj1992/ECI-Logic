<?php

/**
 * Description of Reglas
 *
 * @author Julian Gonzalez Prieto (Avuuna, la Luz del Alba).
 */
class Reglas {

    public $inferencia;

    public function Reglas() {
        $this->inferencia = array(
            array(
                'nombre' => 'Modus Ponendo Ponens',
                'premisas' => array(
                    'A' . Operaciones::$impl . 'B',
                    'A',
                ),
                'conclusion' => 'B',
            ),
            array(
                'nombre' => 'Modus Tollendo Tollens',
                'premisas' => array(
                    'A' . Operaciones::$impl . 'B',
                    Operaciones::$not . 'B',
                ),
                'conclusion' => Operaciones::$not . 'A',
            ),
        );
    }

}
