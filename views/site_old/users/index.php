<?php
/**
 * Created by PhpStorm.
 * User: k.shtefan
 * Date: 17.04.2017
 * Time: 10:43
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php if( Yii::$app->session->hasFlash('success') ): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
<?php endif;?>
<?php if( Yii::$app->session->hasFlash('warning') ): ?>
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('warning'); ?>
    </div>
<?php endif;?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить пользователя', ['user-add'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        #'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'username',
            #'description:ntext',
            'email',
            [
                'format' => 'raw',
                'options' => ['width'=>50],
                'value' => function($data) {
                    if($data->status == 0){
                        return '<span class="btn btn-success glyphicon glyphicon-ok"></span>';
                    }else{
                        return '<a href="delete-user?id='.$data->id.'"  class="btn btn-danger glyphicon glyphicon glyphicon-trash"></a>';
                    }

                }
            ],

            #['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>