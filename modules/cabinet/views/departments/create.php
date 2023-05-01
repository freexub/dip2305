<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\cabinet\models\Departments */

$this->title = 'Добавление департамента';
$this->params['breadcrumbs'][] = ['label' => 'Департаменты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
