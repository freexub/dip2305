<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Signal */

$this->title = 'Добавить Код';
$this->params['breadcrumbs'][] = ['label' => 'Коды', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
