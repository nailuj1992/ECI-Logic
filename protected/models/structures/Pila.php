<?php

/**
 * https://www.microplagio.com/articulos/pilas-en-php/
 *
 * @author Julian Gonzalez Prieto (Avuuna, la Luz del Alba).
 */
class Pila implements Struct {

    private $pila;

    public function Pila() {
        $this->pila = new Lista("Pila");
    }

    public function add($item) {
        $this->pila->addEnd($item);
    }

    public function remove() {
        return $this->pila->removeEnd();
    }

    public function isEmpty() {
        return $this->pila->isEmpty();
    }

    public function getEnd() {
        return $this->pila->getEnd();
    }

    public function __toString() {
        return (string) $this->pila;
    }

}
