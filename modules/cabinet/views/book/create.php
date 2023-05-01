<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\cabinet\models\Book */

$this->title = 'Новая заявка';
$this->params['breadcrumbs'][] = ['label' => 'Заявки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
