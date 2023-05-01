<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\cabinet\models\Profile */

$this->title = 'Добавление пользователя';
$this->params['breadcrumbs'][] = ['label' => 'Профили', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
