<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\cabinet\models\Profile */

$this->title = $model->full_name;
$this->params['breadcrumbs'][] = ['label' => 'Мой профиль'];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="profile-view">

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'user_id',
            'full_name',
            'iin',
            'adderess',
            'date_create',
            'date_update',
            'active',
        ],
    ]) ?>

</div>
