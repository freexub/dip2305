<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\hosp\models\Pages */

$this->title = 'Добавление';
$this->params['breadcrumbs'][] = ['label' => 'Справочный материал', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
