<?php
/* @var $this FormulaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Formulas',
);

$this->menu=array(
	array('label'=>'Create Formula', 'url'=>array('create')),
	array('label'=>'Manage Formula', 'url'=>array('admin')),
);
?>

<h1>Formulas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
