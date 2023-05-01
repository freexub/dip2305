<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Entity */

$this->title = 'Добавление RTO';
$this->params['breadcrumbs'][] = ['label' => 'RTO', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
