<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\modules\cabinet\models\Profile */
/* @var $profile_departments app\modules\cabinet\models\CabinetProfileDepartments */

$this->title = $model->full_name;
$this->params['breadcrumbs'][] = ['label' => 'Профили', 'url' => ['index']];
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
        <?= Html::a('Редактировать', ['update', 'id' => $model->user_id], ['class' => 'btn btn-warning']) ?>
    </p>
    <div class="card bg-light d-flex flex-fill">
        <div class="card-header text-muted border-bottom-0">

        </div>
        <div class="card-body pt-0">
            <div class="row">
                <div class="col-9">

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
                </div>
                <div class="col-3 text-center">
                    <?php if (isset($model->photo)) {?>
                        <img src="/uploads/profiles/<?= $model->photo ?>" alt="user-avatar" class="img-fluid" style="">
                    <?php }else {?>
                        <img src="/uploads/profiles/no-avatar.png" alt="user-avatar" class="img-fluid" style="">
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <p class="pb-3">
        <?= Html::a('Назначить на должность',
            ['update', 'id' => $model->user_id],
            ['class' => 'btn btn-success float-right mb-3','data-toggle'=>'modal','data-target'=>'#add',])
        ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'summary' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'profile.full_name',
            'department.name',
            'position.name',
//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
