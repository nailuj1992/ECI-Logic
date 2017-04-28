<?php
/* @var $this LogicaController */
/* @var $form CActiveForm */
?>

<div class="form-group">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'tablas-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <table cellSpacing="3" cellPadding="1" border="0" class="col-sm-6 col-sm-offset-3">
        <caption align="top"><h1><b><?php echo Funcion::tablas; ?></b></h1></caption>
        <tr>
            <td>
                <input type="submit" name="lbl_p" value="p" class="btn btn-lg btn-default">
                <input type="text" name="txt_p" value="<?php echo $p; ?>" readonly class="form-control simbolo">
            </td>
            <td>
                <input type="submit" name="lbl_op" value="<?php echo $op; ?>" class="btn btn-lg btn-warning">
                <input type="hidden" name="txt_op" value="<?php echo $op; ?>">
            </td>
            <td>
                <input type="submit" name="lbl_q" value="q" class="btn btn-lg btn-default">
                <input type="text" name="txt_q" value="<?php echo $q; ?>" readonly class="form-control simbolo">
            </td>
            <td>
                <input type="submit" name="lbl_v" value="=" class="btn btn-lg btn-success">
            </td>
            <td>
                <label for="txt_v" class="btn btn-lg btn-default">v</label>
                <input type="text" name="txt_v" value="<?php echo $v; ?>" readonly class="form-control simbolo">
            </td>
        </tr>
    </table>

    <?php $this->endWidget(); ?>
</div>
