<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="language" content="es">

        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/animate.min.css" rel="stylesheet"> 
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/lightbox.css" rel="stylesheet"> 
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/responsive.css" rel="stylesheet">

        <!--<[if lt IE 9]>-->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/html5shiv.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/respond.min.js"></script>
        <!--<![endif]>-->

        <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->request->baseUrl; ?>/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->request->baseUrl; ?>/images/ico/apple-touch-icon-57-precomposed.png">

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css">

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <?php $this->renderPartial("//layouts/header"); ?>

        <div class="container" id="page">
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>
            <?php
            // Links:
            // https://youtu.be/z1HT_qfJj3g
            // http://yiibooster.clevertech.biz/widgets/decorations/view/alert.html
            $this->widget('booster.widgets.TbAlert', array(
                'fade' => true,
                'closeText' => '&times;',
                'events' => array(),
                'htmlOptions' => array(),
                'userComponentId' => 'user',
                'alerts' => array(
                    'success' => array('closeText' => '&times;'),
                    'info',
                    'warning' => array('closeText' => false),
                    'danger',
                ),
            ));
            ?>
            <?php echo $content; ?>
            <div class="clear"></div>
        </div>

        <?php $this->renderPartial("//layouts/footer"); ?>

        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/lightbox.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/wow.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>
    </body>
</html>
