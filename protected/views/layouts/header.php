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
                <?php echo CHtml::link('<h1><img src="' . Yii::app()->request->baseUrl . '/images/varios/logo.png" alt="logo"></h1>', array('/'), array('class' => 'navbar-brand')); ?>
            </div>
            <div class="collapse navbar-collapse">
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'encodeLabel' => false,
                    'activateParents' => true,
                    'htmlOptions' => array('class' => 'nav navbar-nav navbar-right'),
                    'submenuHtmlOptions' => array('class' => 'sub-menu'),
                    'items' => array(
                        array('label' => 'Inicio', 'url' => array('/site/index')),
                        array(
                            'label' => 'Actividades <i class="fa fa-angle-down"></i>', 'url' => '#',
                            'items' => array(
                                array('label' => Funcion::tablas, 'url' => array('/logica/tablas')),
                                array('label' => Funcion::calculadora, 'url' => array('/logica/calculadora')),
                                array('label' => Funcion::deduccion, 'url' => array('/logica/deduccion')),
                            ),
                            'itemOptions' => array('class' => 'dropdown'),
                        ),
                        array(
                            'label' => 'Retos <i class="fa fa-angle-down"></i>', 'url' => '#',
                            'items' => array(
                                array('label' => Funcion::conector, 'url' => array('/logica/conector')),
                            ),
                            'itemOptions' => array('class' => 'dropdown'),
                        ),
                        array('label' => 'Acerca de', 'url' => array('/site/page', 'view' => 'about')),
//                        array('label' => 'Contáctanos', 'url' => array('/site/contact')),
                        array('label' => '', 'url' => array('/formula/index'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Fórmulas', 'url' => array('/formula/index'), 'visible' => !Yii::app()->user->isGuest),
                        array('label' => 'Cerrar sesión', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                    ),
                ));
                ?>
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