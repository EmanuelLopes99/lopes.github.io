<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Abc;
use app\models\Post;
use app\models\Servicos;

$sobABC = Abc::find()->select('*')->from('abc')->orderBy('id DESC')->limit(1)->all();
$postRecente = Post::find()->select('*')->from('post')->orderBy('id DESC')->limit(3)->all();
$postImagem = Post::find()->select('*')->from('post')->orderBy('id DESC')->limit(6)->all();
$dadosPostNoti = Post::find()->select('noticias')->from('post')->orderBy('id DESC')->limit(1)
->all();
$servicos = Servicos::find()->select('*')->from('servicos')->orderBy('id DESC')->limit(6)->all();
?>

     <!-- Header
     ================================================== -->
    <header class="clearfix">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">

                <a class="navbar-brand" href="index.php">
                    <?php echo Html::img('@web/images/logo4.png', ['style' => 'width:50px;']) ?>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li><a class="active" href="index.php">Home</a></li>
                        <li><a href="<?php echo Url::to(['servicos/index']); ?>">Serviços</a></li>
                        <li><a href="<?php echo Url::to(['about/index']); ?>">Sobre Nós</a></li>
                        <li><a href="<?php echo Url::to(['contacto/index']); ?>">Contactos</a></li>
                        <li><a href="<?php echo Url::to(['blog/index']); ?>">Blog</a></li>
                    </ul>
                    <a href="#" class="open-close-menu" style="display: none;"><i class="fa fa-align-justify"></i></a>
                </div>
            </div>
        </nav>
    </header>
    <!-- fim Header -->

    <!-- home-section
        ================================================== -->
    <section id="home-section">
        <div id="rev_slider_202_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="concept1" style="background-color:#000000;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.1.1RC fullscreen mode -->
            <div id="rev_slider_202_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1.1RC">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-672" data-transition="slidingoverlaydown" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="" data-rotate="0" data-saveperformance="off" data-title="unique" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="upload/others/2.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption Concept-Title tp-resizeme rs-parallaxlevel-2"
                             id="slide-672-layer-2"
                             data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']"
                             data-fontsize="['72','60','40','30']"
                             data-lineheight="['86','72','48','36']"
                             data-voffset="['0','0','0','0']"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                             data-start="1400"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 7; white-space: nowrap;text-align:center;">A Competencia, Honestidade<br> e Profissionalismo <br>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption Concept-SubTitle tp-resizeme rs-parallaxlevel-2"
                             id="slide-672-layer-3"
                             data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']"
                             data-voffset="['140','130','110','90']"
                             data-fontsize="['13','13','11','11']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                             data-start="2300"
                             style="z-index: 6; white-space: nowrap;font-style:italic;"><a class="button-one" href="about.html">Ler mais</a>
                        </div>

                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-674" data-transition="slidingoverlayright" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="professional" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="upload/others/img2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption Concept-Title tp-resizeme rs-parallaxlevel-2"
                             id="slide-674-layer-2"
                             data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']"
                             data-fontsize="['72','60','40','30']"
                             data-lineheight="['86','72','48','36']"
                             data-voffset="['0','0','0','0']"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                             data-start="1400"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 7; white-space: nowrap;text-align:center;"> <br>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption Concept-SubTitle tp-resizeme rs-parallaxlevel-2"
                             id="slide-674-layer-3"
                             data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']"
                             data-voffset="['140','130','110','90']"
                             data-fontsize="['13','13','11','11']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                             data-start="2300"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 6; white-space: nowrap;font-style:italic;"><a class="button-one" href="portfolio.html"></a>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-675" data-transition="slidingoverlayup" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="ideas" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="upload/others/sld1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption Concept-Title tp-resizeme rs-parallaxlevel-2"
                             id="slide-675-layer-2"
                             data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']"
                             data-fontsize="['72','60','40','30']"
                             data-lineheight="['86','72','48','36']"
                             data-voffset="['0','0','0','0']"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                             data-start="1400"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 7; white-space: nowrap;text-align:center;">Nós criamos soluções<br> para sua empresa
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption Concept-SubTitle tp-resizeme rs-parallaxlevel-2"
                             id="slide-675-layer-3"
                             data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']"
                             data-voffset="['140','130','110','90']"
                             data-fontsize="['13','13','11','11']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                             data-start="2300"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 6; white-space: nowrap;font-style:italic;"><a class="button-one" href="services.html">Ler mais</a>
                        </div>

                    </li>

                    <!-- SLIDE  -->
                    <li data-index="rs-676" data-transition="slidingoverlayup" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="ideas" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="upload/others/background.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption Concept-Title tp-resizeme rs-parallaxlevel-2"
                             id="slide-676-layer-2"
                             data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']"
                             data-fontsize="['72','60','40','30']"
                             data-lineheight="['86','72','48','36']"
                             data-voffset="['0','0','0','0']"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                             data-start="1400"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 7; white-space: nowrap;text-align:center;">Desenvolvemos paginas degitais <br> web &amp; móvel
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption Concept-SubTitle tp-resizeme rs-parallaxlevel-2"
                             id="slide-676-layer-3"
                             data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']"
                             data-voffset="['140','130','110','90']"
                             data-fontsize="['13','13','11','11']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                             data-start="2300"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 6; white-space: nowrap;font-style:italic;"><a class="button-one" href="services.html">Ler mais</a>
                        </div>

                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!--   SLIDER -->
    </section>
    <!--  home section -->

    <!-- feature-section
        ================================================== -->
    <section class="feature-section">
        <div class="container">
            <div class="feature-box">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="feature-post">
                            <?php echo Html::img("@web/images/imediaa.png", ['style'=> 'width: 150px;'])?>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-post">
                           <?php echo Html::img("@web/images/frutpao.png", ['style'=> 'width: 300px;'])?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-post">
                           <?php echo Html::img("@web/images/imoafrica.jpg", ['style'=> 'width: 300px;'])?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature section -->

    <!-- ban-line-section
        ================================================== -->
    <section class="ban-line-section">
        <div class="container">
            <!--<h2>Designed &amp; optimized for high conversion</h2>-->
        </div>
    </section>
    <!-- ban-line section -->

    <!-- services-section
        ================================================== -->
    <section class="services-section">
        <div class="container">
            <div class="title-section white-style">
                <h1>Serviços</h1>
            </div>

            <div class="services-box">
               <div class="row">
                    <?php foreach ($servicos as $servec): ?>
                        <div class="col-lg-6">
                            <div class="services-post">
                                <div class="services-content">
                                    <h2><span class="<?php echo $servec['imagemSer'] ?>"></span><?php echo $servec['nome'] ?></h2>
                                    <p><?php echo substr($servec['descricao'],0, 250) ?> </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>

            <div class="center-button">
                <a class="button-one" href="<?php echo Url::to(['servicos/index'])?>">Ver todos Serviços</a>
            </div>

        </div>
    </section>
    <!-- services section -->


    <!-- -section
        ================================================== -->
    <section class="testimonial-section">
        <div class="container"  style="width:550px;">
            <i class="fa fa-quote-left" aria-hidden="true"></i>
            <div class="testimonial-box owl-wrapper">
                <div class="owl-carousel" data-num="1">

                    <div class="item">
                        <?php foreach ($sobABC as $missao): ?>
                        <div class="post">
                            <h2>Nossa Missão</h2>
                            <p style="text-align:center;" ><?php echo substr($missao['missao'], 0, 350) ?></p>
                            <?php echo Html::img('@web/upload/others/about-img.jpg', ['style' => 'width:550px']) ?>
                            <h2></h2>
                            <a href="#"></a>
                        </div>
                        <?php endforeach ?>
                    </div>

                    <div class="item">
                        <?php foreach ($sobABC as $visao): ?>
                            <div class="post">
                                <h2>A nossa Visão</h2>
                                <p style="text-align:center;"><?php echo substr($visao['visao'],0, 200) ?>
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                    <a href="#">Ver esse factores</a></p>
                                <?php echo Html::img('@web/upload/others/5.jpg') ?>
                                <h2></h2>
                                <a href="#"></a>
                             </div>
                        <?php endforeach ?>
                    </div>

                    <div class="item">
                        <?php foreach ($sobABC as $valore): ?>
                        <div class="post">
                            <h2>Valores</h2>
                            <p style="text-align:center;"><?php echo substr($valore['valores'], 0, 200) ?></p>
                            <img src="upload/others/3.jpg" alt="">
                            <h2></h2>
                            <a href="#"></a>
                        </div>
                        <?php endforeach ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--  section -->
    
    <!-- news-section
        ================================================== -->
    <section class="news-section">
        <div class="container">
            <div class="title-section">
                <h1>Últimas novidades</h1>
                <p>Donec nec justo eget felis facilisis fermentum. <br>Aliquam porttitor mauris sit amet orci. </p>
            </div>
            <div class="news-box owl-wrapper">
                <div class="owl-carousel" data-num="3">

                    <div class="item">
                        <div class="news-post">
                            <p class="auth-paragraph">
                                by <a href="#">Admin</a>, June 12, 2016
                            </p>
                            <h2><a href="#">Fusce pellentesque suscipit.</a></h2>
                            <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Ut justo. Suspendisse potenti.</p>
                            <a href="single-post.html">Continue reading</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End news section -->

    <!-- ban-line-section
        ================================================== -->
    <section class="ban-line-section second-style">
        <div class="container">
            <h2>
                <span>Oferecemos as soluções perfeitas</span>
                <a href="contact.html" class="button-one">Contacte-nos</a>
            </h2>
        </div>
    </section>
    <!-- End ban-line section -->

        <!-- footer
            ================================================== -->
        <footer>
            <div class="container">

                <div class="up-footer">
                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget text-widget"><!-- Sobre ABC -->
                                <h2>Nós ABC</h2>
                                <?php foreach ($sobABC  as $abc): ?>
                                    <p><?php echo $abc['endereco'] ?> <br>
                                    <?php echo $abc['movel_A'] ?></p>
                                <?php endforeach ?>
                            </div><!-- Fim de sobre ABC -->

                            <div class="footer-widget social-widget">
                                <h3>Redes Sociais</h3>
                                <ul class="social-icons">
                                    <li><a class="facebook" href="<?php echo Url::to('http://www.facebook.com'); ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="<?php echo Url::to('https://twitter.com/entrar?lang=pt'); ?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="dribbble" href="<?php echo Url::to('https://dribbble.com/'); ?>"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a class="pinterest" href="<?php echo Url::to('https://br.pinterest.com/login/'); ?>"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a class="google" href="<?php echo Url::to('https://www.google.cv/'); ?>"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- Fim de redes socias -->
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget recent-widget">
                                <h3>Posts Recente</h3>
                                    <ul class="recent-posts">
                                        <?php foreach ($postRecente  as $posts): ?>
                                        <li>
                                            <h2><a href="<?= Url::to(['post/view', 'id' => $posts['id']]) ?>"><?php echo $posts['title'] ?> </a></h2><!-- Ver todos os comentarios desse post -->
                                            <a class="comments" href="<?= Url::to(['post/view', 'id' => $posts['id']]) ?>"><?php echo $posts['id'] ?></a>
                                        </li>
                                         <?php endforeach ?>
                                    </ul>
                            </div>
                        </div><!-- Fim de post recentes -->

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget insta-widget">
                                <h3>Post de imagem</h3>
                                    <ul class="instagram-list">
                                        <?php foreach ($postImagem  as $postImg): ?>
                                        <li><a href="<?= Url::to(['post/view', 'id' => $postImg['id']]) ?>"><?= Html::img(Url::to(Yii::getAlias('@ImgUrl'). '/'.$postImg['imagemPost']))?></a></li><!-- Pegar imgem do banco -->
                                        <?php endforeach ?>
                                    </ul>
                            </div>
                        </div><!-- Fim de post de imagem -->

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget newsletter-widget">
                                <h3>Notícias</h3>
                                <?php foreach ($dadosPostNoti  as $posts): ?>
                                    <p><?php echo $posts['noticias'] ?></p>
                                    <form class="subscribe">
                                        <input type="text" name="email-sub" id="email-sub" placeholder="email" />
                                        <input type="submit" name="submit-sub" id="submit-sub" value="Enviar" />
                                    </form>
                                <?php endforeach ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <p class="copyright-line">copyright &copy; by iMedia 2018</p>
        </footer>
        <!--  footer -->
