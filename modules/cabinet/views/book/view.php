<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\cabinet\models\Book */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Мои задачи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="book-view">
    <div class="modal fade" id="add" role="dialog">
        <div class="modal-dialog ">
            <div class="modal-content">
                <?= $this->render('_form_add', [
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
    <p>
        <?php
            if (isset($model->executor_user_id) && $model->active > 0){
                echo Html::a('Закрыть задачу', [], ['class' => 'btn btn-success float-right mb-3','data-toggle'=>'modal','data-target'=>'#add']);
//                echo '<span class="btn btn-success float-right mb-3">Закрыть задачу</span>';
            }else{
                echo Html::a('Приступить к исполнению', ['take-ticket', 'id' => $model->id], ['class' => 'btn btn-warning float-right mb-3']);
            }
        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'content:ntext',
//            'user_id',
            [
                'label' => 'Исполнитель',
                'value' => function($data){
                        return $data->profile->full_name;
                }
            ],
            'date_create',
            'date_update',
            [
                'label' => 'Статус заявки',
                'value' => function($data){
                    switch ($data->active){
                        case 0:
                            return 'Новая заявка';
                            break;
                        case 1:
                            return 'В работе';
                            break;
                        case 2:
                            return 'Выполнена';
                            break;
                    }
                }
            ],
            [
                'label' => 'Исполнитель',
                'value' => function($data){
                    if($data->active > 0 && $data->executor_user_id != null){
                        return $data->executor->full_name;
                    }
                }
            ]
        ],
    ]) ?>

</div>
