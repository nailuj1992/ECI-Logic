<?php
/* @var $this SiteController */
?>

<div id="acerca-de" class="col-sm-12 col-sm-offset-0">
    <section id="page_breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1><b>Acerca de</b></h1>
                            <p>¿Qué es la lógica proposicional? ¿Y por qué aprenderla con nosotros en forma dinámica?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->

    <section>
        <div class="container">
            <div class="row">
                <div class="tab-content col-md-8 col-sm-6">
                    <div id="introduccion" class="row tab-pane fade in active">
                        <div class="col-sm-12 col-md-12">
                            <div class="single-blog single-column">
                                <div class="post-thumb col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/varios/about2.png" class="img-responsive" alt="">
                                </div>
                                <div class="post-content overflow col-sm-12 col-md-12 col-sm-offset-0 col-md-offset-0">
                                    <h2><b>Introducción</b></h2>
                                    <div class="margin-top">
                                        <p>
                                            La tecnología se ha convertido en un instrumento primordial en la gestión y 
                                            creación de nuevos conocimientos. La enseñanza y el aprendizaje de la 
                                            INFORMÁTICA atraviesa por una coyuntura, en la cual se hace cada día más 
                                            importante ponerse a tono, de una forma más interactiva y autónoma. La 
                                            enseñanza y el aprendizaje de la lógica proposicional exige nuevas formas 
                                            acordes con la actividad, cultura científica y tecnológica, en que están 
                                            inmersos nuestros estudiantes. Qué mejor que investigar en una simbiosis 
                                            entre tecnología propia de la gestión del conocimiento de naturaleza lógica 
                                            (ejemplo PROLOG, Wolfram-Mathematica) y tecnología de gestión, administración 
                                            y motivación de entornos de aprendizaje y enseñanza (como la multimedia, JAVA, 
                                            Win-Prolog, Python, MOODLE, etc).
                                        </p>
                                        <p>
                                            Generalmente para la conceptualización de los temas de lógica (útil en la 
                                            ingeniería) se traduce a problemas clásicos que aparecen en los libros, 
                                            situación que no permite la experimentación y la conjetura. Creemos que para 
                                            estos temas es muy importante que el estudiante cuente con un laboratorio en 
                                            el cual puedan encontrar los principios a través de situaciones dinámicas y 
                                            motivadoras basadas en ambientes que permitan la experimentación, conjetura 
                                            y la autorregulación del aprendizaje.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="definicion" class="row tab-pane fade">
                        <div class="col-sm-12 col-md-12">
                            <div class="single-blog single-column">
                                <div class="post-thumb col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/varios/about1.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="post-content overflow col-sm-12 col-md-12 col-sm-offset-0 col-md-offset-0">
                                    <h2><b>Lógica Proposicional</b></h2>
                                    <div class="margin-top">
                                        <p>
                                            La lógica proposicional es un sistema formal cuyos elementos más simples 
                                            representan proposiciones, y cuyas constantes lógicas representan 
                                            operaciones sobre proposiciones, capaces de formar otras proposiciones 
                                            de mayor complejidad.
                                        </p>
                                        <p>
                                            La lógica proposicional trata con sistemas lógicos que carecen de 
                                            cuantificadores, o variables interpretables como entidades. En lógica 
                                            proposicional si bien no hay signos para variables de tipo entidad, sí 
                                            existen signos para variables proposicionales (es decir, que pueden ser 
                                            interpretadas como proposiciones con un valor de verdad definido), de 
                                            ahí el nombre proposicional. La lógica proposicional incluye además de 
                                            variables interpretables como proposiciones simples signos para 
                                            conectivas lógicas, por lo que dentro de este tipo de lógica puede 
                                            analizarse la inferencia lógica de proposiciones a partir de 
                                            proposiciones, pero sin tener en cuenta la estructura interna de las 
                                            proposiciones más simples.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="bibliografia" class="row tab-pane fade">
                        <div class="col-sm-12 col-md-12">
                            <div class="single-blog single-column">
                                <div class="post-thumb col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/varios/about_bibliografia.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="post-content overflow col-sm-12 col-md-12 col-sm-offset-0 col-md-offset-0">
                                    <h2><b>Bibliografía</b></h2>
                                    <div class="margin-top">
                                        <div class="col-sm-4 text-center">
                                            <div class="single-service">
                                                <div>
                                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/varios/Wikipedia.svg" alt="">
                                                </div>
                                                <h2><a href="https://es.wikipedia.org/wiki/L%C3%B3gica_proposicional">Wikipedia</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item categories">
                            <h3><b>Navegación</b></h3>
                            <ul class="nav navbar-stacked">
                                <li class="active"><a data-toggle="tab" href="#introduccion">Introducción</a></li>
                                <li><a data-toggle="tab" href="#definicion">Definición de Lógica</a></li>
                                <li><a data-toggle="tab" href="#bibliografia">Bibliografía</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
</div>
