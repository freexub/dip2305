<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\hosp\models\HospOrder */

$this->title = 'Create Hosp Order';
$this->params['breadcrumbs'][] = ['label' => 'Hosp Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hosp-order-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
