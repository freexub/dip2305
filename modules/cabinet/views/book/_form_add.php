<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\cabinet\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Отчет о закрытии</h3>
        </div>

        <div class="card-body">
            <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'content')->textarea(['rows' => 6, 'value'=>''])->label('Отчёт по заявке') ?>

                <?= $form->field($model, 'id')->dropDownList(['1' => 'Выбрать ...', '2' => 'Успешно', '3' => 'Перенесено', '4' => 'Откланено'])->label('Причина закрытия') ?>


                <div class="form-group">
                    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>

    </div>


</div>
