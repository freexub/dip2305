<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\hosp\models\PagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Полезная информация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'name:ntext',
            [
                'label' => 'Название',
                'format' => 'raw',
                'value' => function($data){
                    return Html::a($data->name,
                        [
                            'view',
                            'id' => $data->id,
                        ]
                    );
                }
            ],
//            'about:ntext',
//            'active',

//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
