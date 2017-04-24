<?php
/* @var $this FormulaController */
/* @var $model Formula */

$this->breadcrumbs=array(
	'Formulas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Formula', 'url'=>array('index')),
	array('label'=>'Create Formula', 'url'=>array('create')),
	array('label'=>'Update Formula', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Formula', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Formula', 'url'=>array('admin')),
);
?>

<h1>View Formula #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'formula',
	),
)); ?>
