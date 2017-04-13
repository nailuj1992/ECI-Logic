<?php
/* @var $this LogicaController */
/* @var $form CActiveForm */
?>

<h1>Tablas de Verdad</h1>

<div class="form-group">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'tablas-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <div class="col-sm-6">
        <div class="col-sm-3">
            <input type="submit" name="lbl_p" value="p" class="btn btn-default">
            <input type="text" name="txt_p" value="<?php echo $p; ?>" readonly class="txt boton">
        </div>

        <div class="col-sm-3">
            <input type="submit" name="lbl_op" value="<?php echo $op; ?>" class="btn btn-warning">
            <input type="hidden" name="txt_op" value="<?php echo $op; ?>">
        </div>

        <div class="col-sm-3">
            <input type="submit" name="lbl_q" value="q" class="btn btn-default">
            <input type="text" name="txt_q" value="<?php echo $q; ?>" readonly class="txt boton">
        </div>

        <div class="col-sm-3">
            <input type="submit" name="lbl_v" value="Valor" class="btn btn-success">
            <input type="text" name="txt_v" value="<?php echo $v; ?>" readonly class="txt value">
        </div>

        <div class="col-sm-9">
            <?php echo CHtml::link('Volver', array('/'), array('class' => 'btn btn-danger')); ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div>
