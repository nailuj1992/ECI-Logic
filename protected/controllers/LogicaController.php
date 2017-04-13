<?php

/**
 * Description of LogicaController
 *
 * @author Julian Gonzalez Prieto (Avuuna, la Luz del Alba).
 */
class LogicaController extends Controller {

    public $layout = '//layouts/column2';

    public function filters() {
        return array(
            'accessControl',
            'postOnly + delete',
        );
    }

    public function accessRules() {
        return array(
            array('allow',
                'users' => array('*'),
            ),
        );
    }

    private function evaluar($p, $op, $q) {
        $formula = $op == Operaciones::$not ? "$op $q" : "$p $op $q";
        $expresion = new Expresion($formula);
        $expresion->ejecutar();
        return $expresion->toString();
    }

    public function actionTablas() {
        $p = Operaciones::$true;
        $q = Operaciones::$true;
        $op = Operaciones::$not;
        $v = "";

        if (isset($_POST['lbl_p'])) {
            $p = Operaciones::funcNot($_POST['txt_p']);
            $q = $_POST['txt_q'];
            $op = $_POST['txt_op'];
            $v = $this->evaluar($p, $op, $q);
        } else if (isset($_POST['lbl_q'])) {
            $p = $_POST['txt_p'];
            $q = Operaciones::funcNot($_POST['txt_q']);
            $op = $_POST['txt_op'];
            $v = $this->evaluar($p, $op, $q);
        } else if (isset($_POST['lbl_op'])) {
            $p = $_POST['txt_p'];
            $q = $_POST['txt_q'];
            switch ($_POST['txt_op']) {
                case Operaciones::$not:
                    $op = Operaciones::$and;
                    break;
                case Operaciones::$and:
                    $op = Operaciones::$or;
                    break;
                case Operaciones::$or:
                    $op = Operaciones::$impl;
                    break;
                case Operaciones::$impl:
                    $op = Operaciones::$equiv;
                    break;
                case Operaciones::$equiv:
                    $op = Operaciones::$not;
                    break;
            }
            $v = $this->evaluar($p, $op, $q);
        } else if (isset($_POST['lbl_v'])) {
            $p = $_POST['txt_p'];
            $q = $_POST['txt_q'];
            $op = $_POST['txt_op'];
            $v = $this->evaluar($p, $op, $q);
        }

        $this->render('tablas', array(
            'p' => $p,
            'q' => $q,
            'op' => $op,
            'v' => $v,
        ));
    }

    public function actionCalculadora() {
        ;
    }

}
