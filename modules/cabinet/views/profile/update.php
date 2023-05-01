<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\cabinet\models\Profile */

$this->title = 'Редактирование: ' . $model->full_name;
$this->params['breadcrumbs'][] = ['label' => 'Мой профиль'];
//$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="profile-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
