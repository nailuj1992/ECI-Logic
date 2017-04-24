<?php
/* @var $this FormulaController */
/* @var $model Formula */

$this->breadcrumbs=array(
	'Formulas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Formula', 'url'=>array('index')),
	array('label'=>'Create Formula', 'url'=>array('create')),
	array('label'=>'View Formula', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Formula', 'url'=>array('admin')),
);
?>

<h1>Update Formula <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>