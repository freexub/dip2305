<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $profile app\models\Profile */

$this->title = 'Добавить пользователя';
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['users']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cathedra-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
