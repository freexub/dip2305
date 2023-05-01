<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Groups */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="groups-form">
    <div class="row">

    <?php $form = ActiveForm::begin(); ?>
        <div class="col-xs-6 col-md-8">
            <?= $form->field($forms, 'user_id')->dropDownList(ArrayHelper::map($users,'id','username'),
                [
                    'prompt' => 'Выберите ответственного'
                ]
            )->label(false) ?>
        </div>
    <div class="form-group col-xs-6 col-md-3">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
</div>
