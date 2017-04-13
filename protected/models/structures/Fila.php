<?php

/**
 * Description of Fila
 *
 * @author Julian Gonzalez Prieto (Avuuna, la Luz del Alba).
 */
class Fila {

    private $fila;

    public function Fila() {
        $this->fila = new Lista("Fila");
    }

    public function add($item) {
        $this->fila->addEnd($item);
    }

    public function remove() {
        return $this->fila->removeBegin();
    }

    public function isEmpty() {
        return $this->fila->isEmpty();
    }

    public function getEnd() {
        return $this->fila->getEnd();
    }

    public function __toString() {
        return (string) $this->fila;
    }

}
