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

    private function evaluarTabla($p, $op, $q) {
        $formula = $op == Operaciones::$not ? "$op $q" : "$p $op $q";
        return $this->evaluar($formula);
    }

    private function evaluarFormula($variables, $valores, $formula) {
        $eval = str_replace($variables, $valores, $formula);
        return $this->evaluar($eval);
    }

    private function evaluar($formula) {
        $expresion = new Expresion($formula);
        $expresion->ejecutar();
        return (string) $expresion;
    }

    public function actionTablas() {
        $this->param = Funcion::tablas;

        $p = Operaciones::$true;
        $q = Operaciones::$true;
        $op = Operaciones::$not;
        $v = "";

        if (isset($_POST['lbl_p'])) {
            $p = Operaciones::funcNot($_POST['txt_p']);
            $q = $_POST['txt_q'];
            $op = $_POST['txt_op'];
            $v = $this->evaluarTabla($p, $op, $q);
        } else if (isset($_POST['lbl_q'])) {
            $p = $_POST['txt_p'];
            $q = Operaciones::funcNot($_POST['txt_q']);
            $op = $_POST['txt_op'];
            $v = $this->evaluarTabla($p, $op, $q);
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
            $v = $this->evaluarTabla($p, $op, $q);
        } else if (isset($_POST['lbl_v'])) {
            $p = $_POST['txt_p'];
            $q = $_POST['txt_q'];
            $op = $_POST['txt_op'];
            $v = $this->evaluarTabla($p, $op, $q);
        }

        $this->render('tablas', array(
            'p' => $p,
            'q' => $q,
            'op' => $op,
            'v' => $v,
        ));
    }

    public function actionCalculadora() {
        $this->param = Funcion::calculadora;

        $p = $q = $r = $s = $t = $u = $v = $x = $y = $z = Operaciones::$true;
        $formula = $valor = "";

        if (isset($_POST['lbl'])) {
            $lbl = $_POST['lbl'];
            $txt = $_POST['txt'];

            $p = isset($lbl['p']) ? Operaciones::funcNot($txt['p']) : $txt['p'];
            $q = isset($lbl['q']) ? Operaciones::funcNot($txt['q']) : $txt['q'];
            $r = isset($lbl['r']) ? Operaciones::funcNot($txt['r']) : $txt['r'];
            $s = isset($lbl['s']) ? Operaciones::funcNot($txt['s']) : $txt['s'];
            $t = isset($lbl['t']) ? Operaciones::funcNot($txt['t']) : $txt['t'];
            $u = isset($lbl['u']) ? Operaciones::funcNot($txt['u']) : $txt['u'];
            $v = isset($lbl['v']) ? Operaciones::funcNot($txt['v']) : $txt['v'];
            $x = isset($lbl['x']) ? Operaciones::funcNot($txt['x']) : $txt['x'];
            $y = isset($lbl['y']) ? Operaciones::funcNot($txt['y']) : $txt['y'];
            $z = isset($lbl['z']) ? Operaciones::funcNot($txt['z']) : $txt['z'];

            $formula = $_POST['txt_formula'];
            if ($formula != "") {
                $variables = array('p', 'q', 'r', 's', 't', 'u', 'v', 'x', 'y', 'z');
                $valores = array($p, $q, $r, $s, $t, $u, $v, $x, $y, $z);
                $valor = $this->evaluarFormula($variables, $valores, $formula);
            } else {
                $valor = $_POST['txt_valor'];
            }
        } else if (isset($_POST['btn'])) {
            $btn = $_POST['btn'];
            $txt = $_POST['txt'];

            $p = $txt['p'];
            $q = $txt['q'];
            $r = $txt['r'];
            $s = $txt['s'];
            $t = $txt['t'];
            $u = $txt['u'];
            $v = $txt['v'];
            $x = $txt['x'];
            $y = $txt['y'];
            $z = $txt['z'];

            $formula = $_POST['txt_formula'];

            if (isset($btn['igual'])) {
                $txt = $_POST['txt'];

                $p = $txt['p'];
                $q = $txt['q'];
                $r = $txt['r'];
                $s = $txt['s'];
                $t = $txt['t'];
                $u = $txt['u'];
                $v = $txt['v'];
                $x = $txt['x'];
                $y = $txt['y'];
                $z = $txt['z'];

                $formula = $_POST['txt_formula'];
                if ($formula != "") {
                    $variables = array('p', 'q', 'r', 's', 't', 'u', 'v', 'x', 'y', 'z');
                    $valores = array($p, $q, $r, $s, $t, $u, $v, $x, $y, $z);
                    $valor = $this->evaluarFormula($variables, $valores, $formula);
                } else {
                    $valor = $_POST['txt_valor'];
                }
            }
        }

        $this->render('calculadora', array(
            'p' => $p, 'q' => $q, 'r' => $r, 's' => $s,
            't' => $t, 'u' => $u, 'v' => $v,
            'x' => $x, 'y' => $y, 'z' => $z,
            'formula' => $formula,
            'valor' => $valor,
        ));
    }

}
