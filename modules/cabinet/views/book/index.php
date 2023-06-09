<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\cabinet\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заявки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">

    <p>
        <?= Html::a('Создать заявку', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'title',
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
