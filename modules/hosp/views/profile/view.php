<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\hosp\models\Profile */
/* @var $order app\modules\hosp\models\HospOrder */

$this->title = $model->full_name;
$this->params['breadcrumbs'][] = ['label' => 'Личные карточки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены? Вы хотите удалить личное дело!',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'full_name',
            'iin',
            'adderess',
            'date_create',
            'date_update',
            'active',
        ],
    ]) ?>

    <hr>
    <!-- Large modal -->
    <p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">Добавить запись</button>
    </p>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Оформление заказа</h3>
                </div>
                <div class="modal-body">

                            <?php $form = ActiveForm::begin(); ?>

                            <?= $form->field($order, 'profile_id')->hiddenInput(['value'=> $_GET['id']])->label(false);?>

                            <?= $form->field($order, 'category_id')->dropDownList(ArrayHelper::map(\app\modules\hosp\models\HospCategory::find()->all(),'id','name'),
                                [
                                    'prompt' => 'Выбрать ...'
                                ])->label('Выбрать услугу') ?>



                            <div class="form-group">
                                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'profile.full_name',
            'category.name',
            'category.price',
            'date_create',
            [
                'label' => 'Статус',
                'format' => 'raw',
                'value' => function($data){
                    $text = [
                                0=>'Выполнен',
                                1=>'success',
                            ];
                    if ($data->active == 0)
                        $text = [
                            0=>'Не выполнен',
                            1=>'info',
                        ];

                    return '<a href="order?id='.$data->id.'" class="btn btn-'.$text[1].'">'.$text[0].'</a>';
                },
            ],

//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
