<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */
?>

<h1>Contact Us</h1>

<?php if (Yii::app()->user->hasFlash('contact')): ?>

    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('contact'); ?>
    </div>

<?php else: ?>

    <div class="col-md-3 col-sm-6">
        <div class="contact-info bottom">
            <h2>Contacts</h2>
            <address>
                E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
                Phone: +1 (123) 456 7890 <br> 
                Fax: +1 (123) 456 7891 <br> 
            </address>

            <h2>Address</h2>
            <address>
                Unit C2, St.Vincent's Trading Est., <br> 
                Feeder Road, <br> 
                Bristol, BS2 0UY <br> 
                United Kingdom <br> 
            </address>
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="contact-form bottom">
            <h2>Send a message</h2>

            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'main-contact-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
                'htmlOptions' => array(
                    'name' => 'contact-form',
                ),
            ));
            ?>

            <div class="form-group">
                <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'placeholder' => 'Name')); ?>
                <?php echo $form->error($model, 'name'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->textField($model, 'email', array('class' => 'form-control', 'placeholder' => 'Email')); ?>
                <?php echo $form->error($model, 'email'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->textField($model, 'subject', array('size' => 60, 'maxlength' => 128, 'class' => 'form-control', 'placeholder' => 'Subject')); ?>
                <?php echo $form->error($model, 'subject'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->textArea($model, 'body', array('rows' => 8, 'cols' => 50, 'class' => 'form-control', 'placeholder' => 'Yout text here')); ?>
                <?php echo $form->error($model, 'body'); ?>
            </div>

            <?php if (CCaptcha::checkRequirements()): ?>
                <div class="form-group">
                    <div>
                        <?php $this->widget('CCaptcha'); ?>
                        <?php echo $form->textField($model, 'verifyCode', array('class' => 'form-control', 'placeholder' => 'Verification code')); ?>
                    </div>
                    <div class="hint">Please enter the letters as they are shown in the image above.
                        <br/>Letters are not case-sensitive.</div>
                    <?php echo $form->error($model, 'verifyCode'); ?>
                </div>
            <?php endif; ?>

            <div class="form-group">
                <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-submit')); ?>
            </div>

            <?php $this->endWidget(); ?>
        </div>
    </div>

    <div class="form">

    </div><!-- form -->

<?php endif; ?>