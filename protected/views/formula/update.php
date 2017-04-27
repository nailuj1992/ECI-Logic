<?php
/* @var $this FormulaController */
/* @var $model Formula */
?>

<div class="col-sm-6 col-sm-offset-3">
    <h1>Modificar Fórmula #<?php echo $model->id; ?></h1>
</div>

<?php
$this->renderPartial('_form', array('model' => $model));
