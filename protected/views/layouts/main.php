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
        <header id="header">
            <div class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?php echo CHtml::link('<h1><img src="' . Yii::app()->request->baseUrl . '/images/logo.png" alt="logo"></h1>', array('/'), array('class' => 'navbar-brand')); ?>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <?php
                            $inicioActive = '';
                            if (!$this->param) {
                                $inicioActive = 'class="active"';
                            }
                            echo "<li $inicioActive>";
                            ?>
                            <li <?php echo $inicioActive ?>><?php echo CHtml::link('Inicio', array('/')); ?></li>
                            <li class="dropdown"><a href="#">Actividades <i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <?php
                                    $tablasActive = '';
                                    if ($this->param == Funcion::tablas) {
                                        $tablasActive = 'class="active"';
                                    }
                                    ?>
                                    <li <?php echo $tablasActive ?>><?php echo CHtml::link(Funcion::tablas, array('logica/tablas')); ?></li>
                                    <?php
                                    $calculadoraActive = '';
                                    if ($this->param == Funcion::calculadora) {
                                        $calculadoraActive = 'class="active"';
                                    }
                                    ?>
                                    <li <?php echo $calculadoraActive ?>><?php echo CHtml::link(Funcion::calculadora, array('logica/calculadora')); ?></li>
                                </ul>
                            </li>
                            <?php
                            $acercaActive = '';
                            if ($this->param == Funcion::acerca) {
                                $acercaActive = 'class="active"';
                            }
                            ?>
                            <li  <?php echo $acercaActive ?>><?php echo CHtml::link(Funcion::acerca, array('/site/page', 'view' => 'about')); ?></li>
                            <!--<li><?php echo CHtml::link('Contáctanos', array('/site/contact')); ?></li>-->
                        </ul>
                    </div>
                    <div class="search">
                        <form role="form">
                            <i class="fa fa-search"></i>
                            <div class="field-toggle">
                                <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <!--/#header-->

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

        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center bottom-separator">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/under.png" class="img-responsive inline" alt="">
                    </div>
                    <div class="col-sm-12">
                        <div class="copyright-text text-center">
                            <p>Copyright &copy; <?php echo date('Y'); ?>.</p>
                            <p>Escuela Colombiana de Ingeniería. All Rights Reserved.</p>
                            <p>Crafted by <a target="_blank" href="http://designscrazed.org/">Allie</a>. <?php echo Yii::powered(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--/#footer-->

        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/lightbox.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/wow.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>
    </body>
</html>
