<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Usuarios</h3>
    </div>
        <div class="panel-body">
             <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Create Usuario', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id',
                'username',
                'email:email',
               // 'password_hash',
                //'auth_key',
                //'created_at',
                //'updated_at',
                //'status',
                'niveis_acesso',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
