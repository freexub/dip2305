<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\modules\bank\models\Departments */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Отделы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="departments-view">

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы хотите удалить отдел?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
        ],
    ]) ?>

    <hr>
    <h4>Сотрудники отдела</h4>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label' => 'ФИО сотрудников',
                'options' => ['width'=>'80%'],
                'format' => 'raw',
                'value' => function($data){
                    return '<a href="/web/bank/profile/view?id='.$data->user_id.'" >'.$data->full_name.'</a>';
                },
            ],
            [
                'label' => 'Статус',
                'options' => ['width'=>'20%'],
                'format' => 'raw',
                'value' => function($data){
                    return $data->status;
                },
            ],
        ],
    ]); ?>

</div>
