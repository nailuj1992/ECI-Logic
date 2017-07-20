<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
?>

<div class="col-sm-6 col-sm-offset-3">
    <h1><b>Login</b></h1>

    <p>Please fill out the following form with your login credentials:</p>
</div>

<div class="col-sm-6 col-sm-offset-3">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <div class="form-group col-sm-12">
        <?php echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textField($model, 'username', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>

    <div class="form-group col-sm-12">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>

    <div class="form-group col-sm-12 rememberMe">
        <?php echo $form->checkBox($model, 'rememberMe'); ?>
        <?php echo $form->label($model, 'rememberMe'); ?>
        <?php echo $form->error($model, 'rememberMe'); ?>
    </div>

    <div class="form-group col-sm-12">
        <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>
</div><!-- form -->
