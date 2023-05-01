<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Страницы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-index">

    <h1><?= Html::encode($this->title) ?></h1>
<hr>
    <?php
        foreach ($model as $data){
    ?>
        <div class="media">
            <div class="media-body" style="overflow: hidden;line-height: 20px;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;">
                <h3 class="media-heading"><a href="view?id=<?= $data->id?>"><?= $data->name?></a></h3>
                    <p ><?= $data->about?> ...</p>
            </div>
        </div>
    <?php }?>

</div>
