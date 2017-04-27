<?php
/* @var $this FormulaController */
/* @var $model Formula */
?>

<h1>Ver Fórmula #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'nombre',
        'formula',
    ),
));

echo CHtml::link('Volver', array('index'), array('class' => 'btn btn-danger'));
