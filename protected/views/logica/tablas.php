<?php
/* @var $this LogicaController */
/* @var $form CActiveForm */
?>

<h1><?php echo Funcion::tablas; ?></h1>

<div class="form-group">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'tablas-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <div class="col-sm-6">
        <div class="col-sm-3">
            <input type="submit" name="lbl_p" value="p" class="btn btn-lg btn-default">
            <input type="text" name="txt_p" value="<?php echo $p; ?>" readonly class="form-control simbolo">
        </div>

        <div class="col-sm-3">
            <input type="submit" name="lbl_op" value="<?php echo $op; ?>" class="btn btn-lg btn-warning">
            <input type="hidden" name="txt_op" value="<?php echo $op; ?>">
        </div>

        <div class="col-sm-3">
            <input type="submit" name="lbl_q" value="q" class="btn btn-lg btn-default">
            <input type="text" name="txt_q" value="<?php echo $q; ?>" readonly class="form-control simbolo">
        </div>

        <div class="col-sm-3">
            <input type="submit" name="lbl_v" value="=" class="btn btn-lg btn-success">
            <input type="text" name="txt_v" value="<?php echo $v; ?>" readonly class="form-control simbolo">
        </div>
    </div>

    <?php $this->endWidget(); ?>
</div>
