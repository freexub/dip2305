<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Data */

$this->title = $model->author;
$this->params['breadcrumbs'][] = ['label' => 'Репортажи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены? Вы хотите удалить новсть?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            [
                'label' => 'Файлы',
                'options' => ['width' => '400'],
                'format' => 'raw',
                'value' => function ($data) {
                    if($data->files != '')
                        return '<a href="/web/uploads/files/'.$data->files.'" target="_blank">Материал</a>';
                    else
                        return 'Материал не загружен';
                },
            ],
            [
                'label' => 'Репортаж',
                'options' => ['width' => '400'],
                'format' => 'raw',
                'value' => function ($data) {
                    return $data->about;
                },
            ],
            'when_is',
            'where_is:ntext',
            'author',
            'date_create',
        ],
    ]) ?>

</div>
