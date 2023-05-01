<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use kartik\date\DatePicker;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Data */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-8">
            <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'about')->widget(CKEditor::className(),[
                'editorOptions' => [
                    'preset' => 'basic', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                    'inline' => false, //по умолчанию false
                ],
            ]); ?>
                <?php echo $form->field($model, 'where_is')->textInput(['maxlength' => true]); ?>

                <?php echo $form->field($model, 'when_is')->widget(DatePicker::classname(), [
                    'options' => ['placeholder' => 'Когда это произошло'],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd 00:00:00'
                    ]
                ]);?>

            <?php
            if($model->files != ''){
                echo '<div class="thumbnail"><p><a href="/web/uploads/files/'.$model->files.'" target="_blank"><img src="/web/uploads/files/'.$model->files.'" style="width: 200px"></a></p></div>';
            }
                echo $form->field($model, 'files')->widget(FileInput::classname(), [
                    'options' => ['accept' => 'image/*'],
                    'pluginOptions' => [
                        'showPreview' => false,
                        'showCaption' => true,
                        'showRemove' => true,
                        'showUpload' => false
                    ]
                ])->label(false);

            ?>

        </div>


    </div>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
