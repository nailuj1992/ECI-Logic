<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle = Yii::app()->name . ' - Error';
?>

<section id="error-page">
    <div class="error-page-inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <div class="bg-404">
                            <div class="error-image">
                                <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/images/404.png" alt="">
                                <!--<h1><?php echo $code; ?></h1>-->
                            </div>
                        </div>
                        <h2>HA OCURRIDO UN ERROR</h2>
                        <p><?php echo CHtml::encode($message); ?></p>
                        <a href="javascript:history.back()" class="btn btn-error">Ir a la página anterior</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>