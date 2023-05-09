<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\cabinet\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Мои задачи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [

                'attribute' => 'title',
                'format' => 'raw',
                'value' => function($data){
                    return Html::a($data->title, ['view', 'id' => $data->id]);
                },
            ],
            'content:ntext',
//            'user_id',
//            'date_create',
            //'date_update',
            //'active',
            [
                'label' => 'Статус',
                'value' => function($data){
                    switch ($data->active){
                        case 0:
                            return 'Новая заявка';
                            break;
                        case 1:
                            return 'В работе';
                            break;
                        case 2:
                            return 'Выполнена';
                            break;
                    }
                }
            ],

//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
