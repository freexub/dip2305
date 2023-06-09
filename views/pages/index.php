<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Страницы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать страницу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name:ntext',
//            [
//                'label' => 'Новость',
//                'options' => ['width' => '400'],
//                #'visible' => Yii::$app->user->can('user'),
//                'format' => 'raw',
//                'value' => function ($data) {
//
//                    return $data->about;
//                },
//            ],
//            'active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
