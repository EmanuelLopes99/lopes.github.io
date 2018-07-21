<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);

//contar total de registro no banco
$querys = new \yii\db\Query();
$contarPost = $querys->select('*')
              ->from('{{post}}')
              ->count();
$contarUsuario = $querys->select('*')
                 ->from('{{usuario}}')
                 ->count();
$contarComentarios = $querys->select('*')
                  ->from('{{comentario}}')
                  ->count();
                 //fim da consulta
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'AdminEME',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    /*$menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];*/
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

     <!--Cabecalho da pagina-->
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
             <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Gerencie seu site</small> </h1>
          </div>

          <!--Criar button Post-->
          <div class="col-md-2">
            <div class="dropdown create">
              <a href="index.php?r=post/index">
                <button class="btn btn-default navbar-right" type="button"> Criar Posts</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Fim de header -->

     <!--Mostar onde estamos links-->
     <section id="breadcrumb">
          <div class="container">          
                 <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
          </div>
    </section>

    <!--Corpo do site-->
    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
              <div class="list-group">
                <a href="index.php" class="list-group-item active main-color-bg">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                </a>
                 <a href="index.php?r=abc/index" class="list-group-item"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                   ABC <span class="badge"></span>
                 </a>
                   <a href="index.php?r=subscricao/index" class="list-group-item"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                   Subscrição <span class="badge"></span>
                 </a>
                   <a href="index.php?r=servicos/index" class="list-group-item"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                   Serviços <span class="badge"></span>
                 </a>
                   <a href="index.php?r=parceiros/index" class="list-group-item"><span class="glyphicon glyphicons-user-structure" aria-hidden="true"></span>
                   Parceiros <span class="badge"></span>
                 </a>
                 <a id="" class="list-group-item" href="index.php?r=blog/index"><i class="far fa-file-alt" are-hidden="true"></i> Blogs</a> 
                 <a id="" class="list-group-item" href="index.php?r=about/index"><i class="far fa-file-alt"  are-hidden="true"></i> Sobre Nós</a>
                 <a id="" class="list-group-item" href="index.php?r=equipe/index"><span class="glyphicons glyphicons-group" aria-hidden="true"></span> Equipes</a>
                 <a id="" class="list-group-item" href="index.php?r=galerias/index"><i class="glyphicon glyphicon-picture"  are-hidden="true"></i> Galerias </a>
                 <a href="index.php?r=comentario/index" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                   Comentario <span class="badge"><?php print_r($contarComentarios) ?></span>
                 </a>
                 <a href="index.php?r=post/index" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                   Posts <span class="badge"><?php print_r($contarPost) ?></span>
                 </a>
                  <a href="index.php?r=usuario/index" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                   Usuarios <span class="badge"><?php print_r($contarUsuario) ?></span>
                 </a>
              </div>

              <div class="well">
                <h4>Posts Visitados</h4>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                    20%
                  </div>
                </div>
                <h4 class="tooltip">Comentarios</h4>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    60%
                  </div>
                </div>
              </div>
          </div>

          <div class="col-md-9">
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>

        </div>
      </div>
    </section>
</div>

<footer class="footer">
    <div class="container">
        <p class="m-0 text-white"><a href="index.php"> Police Privacy </a> copyright &copy; EME MARKETING <?= date ('Y') ?><a href="index.php"> Use Terms </a></p>
        <span>Made by <a href="http://innovatmedia.com">imedia</a> </span>
    </div>
</footer>  

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
