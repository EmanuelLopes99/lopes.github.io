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
	<link href="images/logo4.png" rel="shortcut icon">
	<link rel="stylesheet" href="css/arena-assets.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

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
                        <?php echo Html::img(Url::to('@web/images/logo4.png'), ['style' => 'width:50px;'])?>
					</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav m-auto">
							<li><a href="index.php">Home</a></li>
                            <li><a href="<?php echo Url::to(['servicos/index']); ?>">Serviços</a></li>
                            <li><a href="<?php echo Url::to(['about/index']); ?>">Sobre Nós</a></li>
                            <li><a class="active" href="<?php echo Url::to(['contacto/index']); ?>">Contactos</a></li>
                            <li><a href="<?php echo Url::to(['blog/index']); ?>">Blog</a></li>
						</ul>
						<a href="#" class="open-close-menu" style="display: none;"><i class="fa fa-align-justify"></i></a>
					</div>
				</div>
			</nav>
		</header>
		<!--fim Header -->

		<!-- page-banner-section
			================================================== -->
		<section class="page-banner-section contact-banner">
			<div class="container">
				<div class="page-banner-box">
					<h1>Entrar em contacto</h1>
				</div>
			</div>
		</section>
		<!-- fim page-banner section -->

		<!-- page-banner-section
			================================================== -->
		<section class="page-list">
			<div class="container">
				<ul>
					<li><a href="index.php">home</a></li>
                    <li><a href="<?php echo Url::to(['contacto/indexx']); ?>">contactos</a></li>
				</ul>
			</div>
		</section>
		<!-- fim page-banner section -->

		<!-- contactos-section
			================================================== -->
		<section class="contact-section">
			<div class="container">
				<div class="contact-box">
					<div class="row">
						<div class="col-md-8">

							<div id="map" class="border">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3855.2197061293!2d-23.5103337857064!3d14.924847973050598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935991dd4eb82ed%3A0x42fda7cb17d390e3!2sAFRICA+BUSINESS+CONSULTING!5e0!3m2!1sen!2scv!4v1530104310418" width="728" height="498" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>

                        </div>

                        <div class="col-md-4">
                            <div class="contact-details">
                                <h2>Sobre ABC</h2>
                                <?php foreach ($sobABC as $contact): ?>
                                     <p style="text-align: center"> <?php echo substr($contact['missao'],0, 200) ?> ...</p>
                                <?php endforeach ?>
                            </div>
                            <div class="contact-details">
                                <h2>Contactos detalhados</h2>
                                <ul class="info-list">
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        Rua Caixa Economico ao lado do INE, 1° &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Andar Cx. Postal 20/c
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        +238 356 0200
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        geral@africabusinessconsult.com
                                    </li>
                                </ul>
                            </div>

                        </div>
                        </div>
                        <div class="row center">
							<form id="contact-form">
								<h2>Envia sua mensagem!</h2>
								<div class="row">
									<div class="col-md-6">
										<input name="name" id="name" type="text" placeholder="Name*">
									</div>
									<div class="col-md-6">
										<input name="mail" id="mail" type="text" placeholder="Email*">
									</div>
								</div>
								<input name="tel-number" id="tel-number" type="text" placeholder="Assunto*">
								<textarea name="comment" id="comment" placeholder="Messagem*"></textarea>
								<input type="submit" id="submit_contact" value="Enviar">
								<div id="msg" class="message"></div>
							</form>

						</div>
					</div>
				</div>
		</section>
		<!-- fim da sessão contacto -->
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

	</div><!-- Fim de contener -->

	<script src="js/arena-plugins.min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
