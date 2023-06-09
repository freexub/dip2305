<?php
/* @var $content string */

use yii\bootstrap4\Breadcrumbs;
use app\widgets\FlashAlert;
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <?php
                    echo Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        'options' => [
                            'class' => 'breadcrumb float-sm-right'
                        ]
                    ]);
                    ?>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <h1 class="m-0">

                    </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-outline card-default">
            <div class="card-header">
                <h3 class="card-title">
                    <?php
                    if (!is_null($this->title)) {
                        echo \yii\helpers\Html::encode($this->title);
                    } else {
                        echo \yii\helpers\Inflector::camelize($this->context->id);
                    }
                    ?>
                </h3>
            </div>
            <div class="card-body">
                <?= FlashAlert::widget() ?>
                <?= $content ?><!-- /.container-fluid -->
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>