<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\cabinet\models\DepartmentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Департаменты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-index">

    <p>
        <?= Html::a('<span class="fas fa-plus"></span> Добавить', ['create'], ['class' => 'btn btn-success mb-4']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="row">
        <?php
            foreach ($dataProvider->models as $model){
                echo '
                    <div class="col-4">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>'.$model->name.'</h3>
                                <p><sup style="font-size: 20px">Процент выполнения заявок '.rand(28,100).'%</sup> </p>
                            </div>
                            <div class="icon">
                                <i class="far fa-user"></i>
                            </div>
                            <a href="view?id='.$model->id.'" class="small-box-footer">
                                Открыть <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>';
            }
        ?>
    </div>


</div>
