<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="modal-header  bg-primary text-white">
    <h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </h3>
    <div class="row">
        <div class="col-lg-12">
            <h2>
                <span class="glyphicon glyphicon-import"></span>
                Добавление данных по контролю RTO
            </h2>
        </div>
        <div class="col-lg-12">
            <h3>
                <?=date('d.m.Y');?>
            </h3>
        </div>
    </div>
</div>

<div class="modal-body">
    <?php $form = ActiveForm::begin([
        'action'=>'data-info?id='.$_GET['id']
    ]); ?>

    <?= $form->field($model, 'frequency')->textarea(['rows' => 1]) ?>
    <?= $form->field($model, 'level')->textarea(['rows' => 1]) ?>
    <?= $form->field($model, 'converting')->textarea(['rows' => 1]) ?>
    <?= $form->field($model, 'scope')->textarea(['rows' => 1]) ?>
    <?= $form->field($model, 'difference')->textarea(['rows' => 1]) ?>
    <?= $form->field($model, 'height')->textarea(['rows' => 1]) ?>
    <?= $form->field($model, 'azimuth')->textarea(['rows' => 1]) ?>
    <?= $form->field($model, 'polarization')->textarea(['rows' => 1]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
<div class="modal-footer well">


</div>
