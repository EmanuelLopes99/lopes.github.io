<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use app\models\Abc;
use app\models\Post;

$sobABC = Abc::find()->select('*')->from('abc')->orderBy('id DESC')->limit(1)->all();
$postRecente = Post::find()->select('*')->from('post')->orderBy('id DESC')->limit(3)->all();
$postImagem = Post::find()->select('*')->from('post')->orderBy('id DESC')->limit(6)->all();
$dadosPostNoti = Post::find()->select('noticias')->from('post')->orderBy('id DESC')->limit(1)->all();
//AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="en" class="no-js">
<head>
    <title>Africa Business Consulting</title>
    <?php $this->head() ?>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <link rel="stylesheet" href="css/arena-assets.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="images/logo4.png" rel="shortcut icon">

</head>
<body>
<?php $this->beginBody() ?>
    <!-- Container -->
    <div id="container">
        <!-- Header
            ================================================== -->
        <header class="clearfix">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">

                    <a class="navbar-brand" href="index.php">
                      <!--   <img src="images/logo4.png" alt=""style="width:50px;"> -->
                        <?php echo Html::img('@web/images/logo4.png', ['style' => 'width:50px;']) ?>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="<?php echo Url::to(['servicos/index']); ?>">Serviços</a></li>
                            <li><a class="active" href="<?php echo Url::to(['about/index']); ?>">Sobre Nós</a></li>
                            <li><a href="<?php echo Url::to(['contacto/index']); ?>">Contactos</a></li>
                            <li><a href="<?php echo Url::to(['blog/index']); ?>">Blog</a></li>
                        </ul>
                        <a href="#" class="open-close-menu" style="display: none;"><i class="fa fa-align-justify"></i></a>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Fim de Header -->

        <!-- page-banner-section
            ================================================== -->
        <section class="page-banner-section about-banner">
            <div class="container">
                <div class="page-banner-box">
                    <h1>Quem nós somos</h1>
                </div>
            </div>
        </section>
        <!-- Fim page-banner section -->

        <!-- page-banner-section
            ================================================== -->
        <section class="page-list">
            <div class="container">
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a href="<?php echo Url::to(['about/index']); ?>">Sobre-nós</a></li>
                </ul>
            </div>
        </section>
        <!-- Fim page-banner section -->


        <!--section -Sobre-nós
            ================================================== -->
        <section class="about-section">
            <div class="container">
                <div class="about-box">
                    <div class="row">
                        <?php foreach ($aboutInf as $sobrenos): ?>
                               <div class="col-lg-6">
                                    <div class="about-post">
                                        <h2>Nossa Missão</h2>
                                        <p><?php echo $sobrenos['missao'] ?></p><br>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="about-post">
                                        <h2>Nossa Filosófia</h2>
                                        <p><?php echo $sobrenos['filosofia'] ?></p><br>
                                    </div>
                                </div>
                        <?php endforeach ?>
                    </div>
                </div>

                <div class="about-box">
                    <div class="row">
                         <?php foreach ($aboutImg as $img): ?>
                            <div class="col-md-4">
                                <div class="about-post-image">
                                    <!-- <img src="upload/others/pic5.jpg" alt=""> -->
                                    <?= Html::img(Url::to(Yii::getAlias('@ImgUrl'). '/'.$img['imagem_about']))?>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fim de section sobre -->

        <!-- parceiros
            ================================================== -->
        <section class="team-section">
            <div class="container">
                <div class="title-section">
                    <h1>Conheça nossa equipa</h1>
                    <?php foreach ($equipeDes as $equipe): ?>
                        <p><?php echo $equipe['descrecaoEquipe'] ?></p>
                    <?php endforeach ?>
                </div>

                <!-- Mostrar equipes do ABC -->
                <div class="team-box owl-wrapper">
                    <div class="owl-carousel" data-num="4">
                         <?php foreach ($equipeImg as $fotos): ?>
                            <div class="item">
                                <div class="team-post">
                                    <div class="inner-team-post">
                                        <div class="image-hover">
                                            <?= Html::img(Url::to(Yii::getAlias('@ImgUrl'). '/'.$fotos['foto']))?>
                                        </div>
                                        <h2><?php echo $fotos['nome'] ?></h2>
                                        <p><?php echo $fotos['funcao'] ?></p>
                                        <ul class="social-icons">
                                            <li><a class="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="https://twitter.com/login?lang=pt"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="google" href="https://www.google.fr/?hl=pt"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="linkedin" href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a class="pinterest" href="https://br.pinterest.com/login/"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> 
                        <?php endforeach ?>                       
                    </div>
                </div>

            </div>
        </section>
        <!-- fim da equipa -->

        <!-- clientes
            ================================================== -->
        <section class="clients-section">
            <div class="clients-box">
                <h2 class="text-center">-- Nossos Clientes --</h2>
                <ul class="client-list">
                    <p>Espaço para os clientes</p>
                <!--
                    <li><a href="#"><img src="images/imediaa.png" alt=""style="width:85px;"></a></li>
                    <li><a href="#"><img src="images/frutpao.png" alt=""style="width:1000px;"></a></li>
                    <li><a href="#"><img src="images/imoafrica.jpg" alt=""></a></li>
                -->
                </ul>
            </div>
        </section>
        <!-- clientes -->

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
                                        <?php echo $abc['email'] ?><br>
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

    </div>
    <!-- fim Container -->

    <script src="js/arena-plugins.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
