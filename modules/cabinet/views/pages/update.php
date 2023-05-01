<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\hosp\models\Pages */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Полезная информация', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирования';
?>
<div class="pages-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
