<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Signal */

$this->title = 'Редактировать код: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Коды', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="signal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
