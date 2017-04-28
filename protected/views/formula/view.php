<?php
/* @var $this FormulaController */
/* @var $model Formula */
?>

<h1><b>Ver Fórmula #<?php echo $model->id; ?></b></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'nombre',
        'formula',
    ),
));

echo CHtml::link('Crear Fórmula', array('create'), array('class' => 'btn btn-info'));
echo SiteController::espacioVacio;
echo CHtml::link('Modificar Fórmula', array('update', 'id' => $model->id), array('class' => 'btn btn-primary'));
echo SiteController::espacioVacio;
echo CHtml::link('Eliminar Fórmula', array('delete', 'id' => $model->id), array('class' => 'btn btn-warning', 'confirm' => '¿Está seguro que desea borrar este elemento?'));
echo SiteController::espacioVacio;
echo CHtml::link('Volver', SiteController::historyBack, array('class' => 'btn btn-danger'));
