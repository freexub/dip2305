<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Entity */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'RTO', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="modal fade" id="modalinfo" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        </div>
    </div>
</div>
<div class="entity-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name:ntext',
            'active',
        ],
    ]) ?>

    <hr>
    <div class="row">
        <div class="col-xs-6 col-md-12">
            <?= Html::a('Добавить',
                [
                    'data-info',
                    'id' => $model->id,
                ],
                [
                    'class'=>'btn btn-warning',
                    'data-toggle'=>'modal',
                    'data-target'=>'#modalinfo',
                ]
            );?>
        </div>
        <div class="col-xs-6 col-md-12">
        <?php
            foreach ($signals as $sig)
            {
                //echo '<div class="col-xs-6 col-md-2"><a href="view?id='.$_GET['id'].'&signal='.$sig->id.'" class="btn btn-warning">'.$sig->name.'</a></div>';
            }
        ?>
        </div>
<hr>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'date_create',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    </div>
</div>
