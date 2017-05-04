<?php

/**
 * Description of Lista
 *
 * @author Julian Gonzalez Prieto (Avuuna, la Luz del Alba).
 */
class Node {

    public $obj;
    public $next;

    public function Node($obj, $next = null) {
        $this->obj = $obj;
        $this->next = $next;
    }

    public function getObject() {
        return $this->obj;
    }

    public function getNext() {
        return $this->next;
    }

}

class Lista {

    private $first, $last;
    private $name;

    public function Lista($name = null) {
        if (!$name) {
            $this->name = "lista";
        } else {
            $this->name = $name;
        }
        $this->first = $this->last = null;
    }

    public function addBegin($item) {
        if ($this->isEmpty()) {
            $this->first = $this->last = new Node($item);
        } else {
            $this->first = new Node($item, $this->first);
        }
    }

    public function addEnd($item) {
        if ($this->isEmpty()) {
            $this->first = $this->last = new Node($item);
        } else {
            $this->last = $this->last->next = new Node($item);
        }
    }

    public function removeBegin() {
        if ($this->isEmpty()) {
            return null;//throw new LogicaException(LogicaException::emptyList);
        }
        $removed = $this->first->obj;
        if ($this->first == $this->last) {
            $this->first = $this->last = null;
        } else {
            $this->first = $this->first->next;
        }
        return $removed;
    }

    public function removeEnd() {
        if ($this->isEmpty()) {
            return null;//throw new LogicaException(LogicaException::emptyList);
        }
        $removed = $this->last->obj;
        if ($this->first == $this->last) {
            $this->first = $this->last = null;
        } else {
            $actual = $this->first;
            while ($actual->next != $this->last) {
                $actual = $actual->next;
            }
            $this->last = $actual;
            $actual->next = null;
        }
        return $removed;
    }

    public function getBegin() {
        if ($this->isEmpty()) {
            return null;//throw new LogicaException(LogicaException::emptyList);
        }
        return $this->first->obj;
    }

    public function getEnd() {
        if ($this->isEmpty()) {
            return null;//throw new LogicaException(LogicaException::emptyList);
        }
        return $this->last->obj;
    }

    public function isEmpty() {
        return $this->last == null;
    }

    public function __toString() {
        $str = "";
        if ($this->isEmpty()) {
            $str = $this->name . " vacia\n";
            return $str;
        }
        $actual = $this->first;
        while ($actual != null) {
            $str .= $actual->obj . " ";
            $actual = $actual->next;
        }
        $str .= "\n";
        return $str;
    }

}
