<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\cabinet\models\Profile */
/* @var $profile_departments app\modules\cabinet\models\CabinetProfileDepartments */

$this->title = $model->full_name;
$this->params['breadcrumbs'][] = ['label' => 'Мой профиль'];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="modal fade" id="add" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <?= $this->render('_form_add', [
                'model' => $profile_departments,
            ]) ?>
        </div>
    </div>
</div>
<div class="profile-view">

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'user_id',
            'full_name',
            'position.position.name',
            'position.department.name',
            'iin',
            'adderess',
            'date_create',
            'date_update',
            'active',
        ],
    ]) ?>

    <?= Html::a('Назначить на должность',
        ['update', 'id' => $model->user_id],
        ['class' => 'btn btn-warning float-right','data-toggle'=>'modal','data-target'=>'#add',])
    ?>
</div>
