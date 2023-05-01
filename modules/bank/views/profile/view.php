<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\modules\bank\models\Profile */

$this->title = $model->full_name;
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="profile-view">

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->user_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы хотите удалить сотрудника?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'user_id',
            'full_name',
            'iin',
            'adderess',
            'date_create',
            'date_update',
            'active',
//            'department.name',
            [
                'label' => 'Отдел',
                'value' => function($data){
                    return $data->department->name;
                },
            ],
        ],
    ]) ?>

    <hr>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'user_id',
//            'termenal_id',
            'date',
            [
                'label' => 'Тип',
                'value' => function($data){
                    if ($data->type == 0)
                        return 'Вход в здание';
                    else
                        return 'Выход из здания';

                },
            ],
            [
                'label' => 'Терминал',
                'value' => function($data){
                        return 'Терминал № ' . $data->termenal_id;
                },
            ],

            //'active',

//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
