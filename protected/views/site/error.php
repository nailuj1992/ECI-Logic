<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle = Yii::app()->name . ' - Error';
$this->breadcrumbs = array(
    'Error',
);
?>

<h2>Error <?php echo $code; ?></h2>

<div class="error">
    <p><?php echo CHtml::encode($message); ?></p>
    <a href="javascript:history.back()" class="btn btn-danger">Ir a la página anterior</a>
</div>