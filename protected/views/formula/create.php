<?php
/* @var $this FormulaController */
/* @var $model Formula */

$this->breadcrumbs = array(
    'Formulas' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List Formula', 'url' => array('index')),
    array('label' => 'Manage Formula', 'url' => array('admin')),
);
?>

<h1>Create Formula</h1>

<?php
$this->renderPartial('_form', array('model' => $model));

$not = Operaciones::$not;
$and = Operaciones::$and;
$or = Operaciones::$or;
$impl = Operaciones::$impl;
$equiv = Operaciones::$equiv;
echo "$not$and$or$impl$equiv";
