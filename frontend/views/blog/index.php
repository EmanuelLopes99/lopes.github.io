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
    <link href="@web/images/logo4.png" rel="shortcut icon">

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
                        <?php echo Html::img(Url::to('@web/images/logo4.png'), ['style' => 'width:50px;']) ?>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="<?php echo Url::to(['servicos/index']); ?>">Serviços</a></li>
                            <li><a href="<?php echo Url::to(['about/index']); ?>">Sobre Nós</a></li>
                            <li><a href="<?php echo Url::to(['contacto/index']); ?>">Contactos</a></li>
                            <li><a class="active" href="<?php echo Url::to(['blog/index']); ?>">Blog</a></li>
                        </ul>

                        <a href="#" class="open-close-menu" style="display: none;"><i class="fa fa-align-justify"></i></a>
                    </div>
                </div>
            </nav>
        </header>
        <!--  Header -->

        <!---banner-section
            ================================================== -->
        <section class="page-banner-section blog-banner">
            <div class="container">
                <div class="page-banner-box">
                    <h1>Blog</h1>
                </div>
            </div>
        </section>
        <!-- -banner section -->

        <!-- -banner-section
            ================================================== -->
        <section class="page-list">
            <div class="container">
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a href="<?php echo Url::to(['blog/index']);?>">blog</a></li>
                </ul>
            </div>
        </section>
        <!-- -banner section -->

        <!-- blog-section
            ================================================== -->
        <section class="blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="search-widget widget">
                                <form>
                                    <input type="search" placeholder="Pesquisar ..."/>
                                    <button type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="text-widget widget">
                                <h2>Sobre ABC</h2>
                                <?php foreach ($sobABC as $abc): ?>
                                    <p><?php echo substr($abc['missao'], 0, 200) ?></p>
                                <?php endforeach ?>
                            </div>

                            <div class="category-widget widget">
                                <h2>Categorias</h2>
                                    <ul class="category-list">
                                        <?php foreach ($blogcategoria  as $blog): ?>
                                        <li><a href="<?= Url::to(['blog/view', 'id' => $blog['id']]) ?>"><?php echo $blog['categoria'] ?></a></li>
                                        <?php endforeach ?>
                                    </ul>
                            </div>

                            <div class="popular-widget widget">
                                <h2>Post</h2>
                                    <ul class="popular-list">
                                        <?php foreach ($blogpost  as $post): ?>
                                        <li>
                                            <?= Html::img(Url::to(Yii::getAlias('@ImgUrl'). '/'.$post['post']))?> <!-- Pegar imgem do banco -->
                                            <!-- <img alt="" src="upload/blog/t1.jpg"> -->
                                            <div class="side-content">
                                                <h2><a href="<?= Url::to(['blog/view', 'id' => $post['id']]) ?>"><?php echo substr($post['nomeBlog'], 0, 100) ?></a></h2>
                                                <span><?php echo $post['dataBlog'] ?></span>
                                            </div>
                                        </li>
                                        <?php endforeach ?>
                                    </ul>
                            </div><!-- Fim de post -->

                            <div class="tags-widget widget">
                                <h2>Tags</h2>
                                <ul class="tags-list">
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">video</a></li>
                                    <li><a href="#">Fotografia</a></li>
                                    <li><a href="#">Galeria</a></li>
                                    <li><a href="#">Social</a></li>
                                </ul>
                            </div><!-- Fim de tags -->
                        </div>

                    </div>
                    <div class="col-lg-8">
                        <div class="blog-box">
                            <?php foreach ($blogcategoria  as $post): ?>
                                <div class="blog-post">
                                    <?= Html::img(Url::to(Yii::getAlias('@ImgUrl'). '/'.$post['post']))?>
                                        <div class="post-content">
                                            <ul class="post-meta">
                                                <li>by <a href="#">Admin,</a></li>
                                                <li><?php echo $post['dataBlog'] ?></li>
                                                <li><a href="#" > x Comentarios</a></li>
                                            </ul>
                                            <h2><a href="<?= Url::to(['blog/view', 'id' => $post['id']]) ?>"><?php echo substr($post['nomeBlog'], 0, 100) ?></a></h2><!-- Ver todos os dados do blog numa view ta certo kkk -->
                                            <p><?php echo substr($post['conteudo'], 0, 200) ?> ...</p>
                                            <a href="<?= Url::to(['blog/view', 'id' => $post['id']]) ?>">Continuar a Ler</a>
                                        </div>
                                     <!-- <div class="pagination-list-box">
                                        <ul class="pages-list">
                                            <li><a class="active" href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                        </ul>
                                        <a href="#" class="prev">anterior</a>
                                        <a href="#" class="next">seguinte</a>
                                    </div>  -->
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog section -->

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
    <!--  Container -->

    <script src="js/arena-plugins.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI&amp;sensor=false&amp;language=en" type="text/javascript"></script>
    <script src="js/gmap3.min.js"></script>
    <script src="js/script.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>