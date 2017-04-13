<?php
/* @var $this LogicaController */
/* @var $form CActiveForm */
?>

<h1>Tablas de Verdad</h1>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'tablas-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <div class="row">
        <input type="submit" name="lbl_p" value="p" class="btn btn-default">
        <input type="text" name="txt_p" value="<?php echo $p; ?>" readonly class="form-control">
    </div>

    <div class="row">
        <input type="submit" name="lbl_op" value="<?php echo $op; ?>" class="btn btn-warning">
        <input type="hidden" name="txt_op" value="<?php echo $op; ?>">
    </div>

    <div class="row">
        <input type="submit" name="lbl_q" value="q" class="btn btn-default">
        <input type="text" name="txt_q" value="<?php echo $q; ?>" readonly class="form-control">
    </div>

    <div class="row">
        <input type="submit" name="lbl_v" value="Valor" class="btn btn-success">
        <input type="text" name="txt_v" value="<?php echo $v; ?>" readonly class="form-control">
    </div>

    <div class="row buttons">
        <?php echo CHtml::link('Volver', array('/'), array('class' => 'btn btn-danger')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div>
