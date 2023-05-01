<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Data */

//$this->title = 'Create Data';
//$this->params['breadcrumbs'][] = ['label' => 'Datas', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-create">

    <h1><?php //echo Html::encode($this->title) ?></h1>

    <H2>Вы стали очевидцем правонарушения или интерестного события? Станьте нашим мобильным репортёром и поделитесь новостью из первых рук.</H2>
<hr>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
