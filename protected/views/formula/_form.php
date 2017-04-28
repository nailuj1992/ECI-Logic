<?php
/* @var $this FormulaController */
/* @var $model Formula */
/* @var $form CActiveForm */
?>

<div class="col-sm-6 col-sm-offset-3">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'formula-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <?php echo SiteController::formRequired; ?>

    <div class="form-group col-sm-12">
        <?php echo $form->labelEx($model, 'nombre'); ?>
        <?php echo $form->textField($model, 'nombre', array('size' => 60, 'maxlength' => 175, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'nombre'); ?>
    </div>

    <div class="form-group col-sm-12">
        <?php echo $form->labelEx($model, 'formula'); ?>
        <?php echo $form->textField($model, 'formula', array('size' => 60, 'maxlength' => 100, 'readonly' => 'readonly', 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'formula'); ?>
        <table cellSpacing="3" cellPadding="1" border="0">
            <tr>
                <?php echo btn_simbolos('A', 'btn btn-lg btn-default', 'addFormulaCreate(this)'); ?>
                <?php echo btn_simbolos('B', 'btn btn-lg btn-default', 'addFormulaCreate(this)'); ?>
                <?php echo btn_simbolos('C', 'btn btn-lg btn-default', 'addFormulaCreate(this)'); ?>
                <?php echo btn_simbolos('D', 'btn btn-lg btn-default', 'addFormulaCreate(this)'); ?>
                <?php echo btn_simbolos('E', 'btn btn-lg btn-default', 'addFormulaCreate(this)'); ?>
                <?php echo btn_simbolos(Operaciones::$true, 'btn btn-lg btn-info', 'addFormulaCreate(this)'); ?>
                <?php echo btn_simbolos(Operaciones::$false, 'btn btn-lg btn-info', 'addFormulaCreate(this)'); ?>
                <?php echo btn_simbolos('DEL', 'btn btn-lg btn-warning', 'delFormulaCreate()'); ?>
            </tr>
            <tr>
                <?php echo btn_simbolos(Operaciones::$not, 'btn btn-lg btn-default', 'addFormulaCreate(this)'); ?>
                <?php echo btn_simbolos(Operaciones::$and, 'btn btn-lg btn-default', 'addFormulaCreate(this)'); ?>
                <?php echo btn_simbolos(Operaciones::$or, 'btn btn-lg btn-default', 'addFormulaCreate(this)'); ?>
                <?php echo btn_simbolos(Operaciones::$impl, 'btn btn-lg btn-default', 'addFormulaCreate(this)'); ?>
                <?php echo btn_simbolos(Operaciones::$equiv, 'btn btn-lg btn-default', 'addFormulaCreate(this)'); ?>
                <?php echo btn_simbolos(Operaciones::$parenOp, 'btn btn-lg btn-default', 'addFormulaCreate(this)'); ?>
                <?php echo btn_simbolos(Operaciones::$parenCl, 'btn btn-lg btn-default', 'addFormulaCreate(this)'); ?>
                <?php echo btn_simbolos('AC', 'btn btn-lg btn-danger', 'acFormulaCreate()'); ?>
            </tr>
        </table>
    </div>

    <div class="form-group col-sm-12">
        <?php
        echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class' => 'btn btn-success'));
        echo SiteController::espacioVacio;
        echo CHtml::link('Volver', SiteController::historyBack, array('class' => 'btn btn-danger'));
        ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
<?php

function btn_simbolos($sim, $class, $onclick) {
    $str = '<td>';
    $str .= CHtml::link($sim, '', array('class' => $class, 'onclick' => $onclick));
    $str .= '</td>';
    return $str;
}
