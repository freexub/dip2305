<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\hosp\models\PagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Полезная информация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php
        foreach ($dataProvider->models as $model) {
    ?>
        <div class="card bg-light d-flex flex-fill">
            <div class="card-header">
                <div class="card-comment card-comments">
                    <div class="comment-text">
                        <span class="username">
                            <?= Html::a($model->name,
                                [
                                    'view',
                                    'id' => $model->id,
                                ])
                            ?>
                        </span>
                        <?=$model->about?>
                    </div>

                </div>
            </div>
        </div>
    <?php } ?>


</div>
