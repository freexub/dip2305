<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\cabinet\models\Book */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Заявки', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="book-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
