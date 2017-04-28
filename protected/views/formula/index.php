<?php
/* @var $this FormulaController */
/* @var $model Formula */
?>

<h1><b>Formulas</b></h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'formula-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'nombre',
        'formula',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));

echo CHtml::link('Crear Fórmula', array('create'), array('class' => 'btn btn-info'));
