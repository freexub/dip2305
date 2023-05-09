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
                    <img src="/uploads/profiles/1.jpg" alt="user-avatar" class="img-fluid" style="">
                </div>
            </div>
        </div>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'summary' => false,
//        'headerRowOptions' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'profile.full_name',
            'position.name',
            'date_create',
//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
