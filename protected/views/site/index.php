<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<section id="home-slider">
    <div class="container">
        <div class="row">
            <div class="main-slider">
                <div class="slide-text">
                    <h1>Bienvenido a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
                    <p>Aquí podrás aprender acerca de la lógica proposicional en forma didáctica.</p>
                </div>
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/slider/hill.png" class="slider-hill" alt="slider image">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/slider/house.png" class="slider-house" alt="slider image">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/slider/sun.png" class="slider-sun" alt="slider image">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
            </div>
        </div>
    </div>
    <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
</section>
<!--/#home-slider-->