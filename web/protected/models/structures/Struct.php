<?php

/**
 *
 * @author Julian Gonzalez Prieto (Avuuna, la Luz del Alba).
 */
interface Struct {

    public function add($item);

    public function remove();

    public function isEmpty();

    public function getEnd();

    public function __toString();
}
