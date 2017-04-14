<?php
/* @var $this LogicaController */
/* @var $form CActiveForm */
?>

<h1>Calculadora Lógica</h1>

<div class="form-group">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'tablas-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <div class="col-sm-9">
        <input type="text" name="txt_formula" value="<?php echo $formula; ?>" readonly class="txt formula">
        <input type="text" name="txt_valor" value="<?php echo $valor; ?>" readonly class="txt valor">
    </div>

    <div class="col-sm-9">
        <div class="col-sm-2">
            <?php echo lbl_valores('p', $p); ?>
            <?php echo lbl_valores('q', $q); ?>
        </div>
        <div class="col-sm-2">
            <?php echo lbl_valores('r', $r); ?>
            <?php echo lbl_valores('s', $s); ?>
        </div>
        <div class="col-sm-2">
            <?php echo lbl_valores('t', $t); ?>
            <?php echo lbl_valores('u', $u); ?>
        </div>
        <div class="col-sm-2">
            <?php echo lbl_valores('v', $v); ?>
            <?php echo lbl_valores('x', $x); ?>
        </div>
        <div class="col-sm-2">
            <?php echo lbl_valores('y', $y); ?>
            <?php echo lbl_valores('z', $z); ?>
        </div>
    </div>

    <div class="col-sm-6">
        <?php echo botonesSimbolos('x'); ?>
        <?php echo botonesSimbolos('y'); ?>
        <?php echo botonesSimbolos('z'); ?>
        <?php echo botonesSimbolos('t'); ?>
        <?php echo botonesSimbolos('u'); ?>
        <?php echo botonesSimbolos('v'); ?>
        <?php echo botonesSimbolos('q'); ?>
        <?php echo botonesSimbolos('r'); ?>
        <?php echo botonesSimbolos('s'); ?>
        <?php echo botonesSimbolos('p'); ?>
        <?php echo botonesSimbolos(Operaciones::$parenOp); ?>
        <?php echo botonesSimbolos(Operaciones::$parenCl); ?>
    </div>

    <div class="col-sm-3">
        <?php echo botonesOperaciones('del', 'DEL', 'warning') ?>
        <?php echo botonesOperaciones('ac', 'AC', 'danger') ?>
        <?php echo botonesOperaciones('equiv', Operaciones::$equiv, 'default') ?>
        <?php echo botonesOperaciones('impl', Operaciones::$impl, 'default') ?>
        <?php echo botonesOperaciones('and', Operaciones::$and, 'default') ?>
        <?php echo botonesOperaciones('or', Operaciones::$or, 'default') ?>
        <?php echo botonesOperaciones('not', Operaciones::$not, 'default') ?>
        <?php echo botonesOperaciones('igual', '=', 'success') ?>
    </div>

    <div class="col-sm-9">
        <?php echo CHtml::link('Volver', array('/'), array('class' => 'btn btn-danger')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div>

<?php

function lbl_valores($sim, $val) {
    $str = '<div>';
    $str .= '<input type="submit" name="lbl[' . $sim . ']" value="' . $sim . '" class="btn btn-default">';
    $str .= '<input type="text" name="txt[' . $sim . ']" value="' . $val . '" readonly class="txt boton">';
    $str .= '</div>';
    return $str;
}

function botonesSimbolos($sim) {
    $str = '<div class="col-sm-4">';
    $str .= '<input type="submit" name="btn[' . $sim . ']" value="' . $sim . '" class="btn btn-default">';
    $str .= '</div>';
    return $str;
}

function botonesOperaciones($sim, $val, $class) {
    $str = '<div class="col-sm-6">';
    $str .= '<input type="submit" name="btn[' . $sim . ']" value="' . $val . '" class="btn btn-' . $class . '">';
    $str .= '</div>';
    return $str;
}
