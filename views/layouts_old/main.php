<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <?php	
	NavBar::begin([
        'brandLabel' => '«SHURA»',
        'brandUrl' => '/',
//        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-info navbar-fixed-top',
        ],
    ]);
	
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Личные карточки', 'visible' => !Yii::$app->user->isGuest, 'url' => ['/hosp/profile/']],
//            ['label' => 'Пользователи', 'url' => ['/hosp/users/']],
            ['label' => 'Справочный материал', 'url' => ['/hosp/pages/']],
            ['label' => 'Категории', 'url' => ['/hosp/hosp-category/']],
//            ['label' => 'Информация', 'url' => ['/pages/list/']],
//            [
//                'label' => 'Панель управления',
//                'visible' => !Yii::$app->user->isGuest,
//                #'url' => ['/data/'],
//                'items' => [
//                    ['label' => 'RTO', 'url' => ['/entity/index']],
////                    ['label' => 'Коды ситуаций', 'url' => ['/signal/index']],
//                    ['label' => 'Группы реагирования', 'url' => ['/groups/index']],
////                    ['label' => 'Список репортажей', 'url' => ['/data/index/']],
//                    ['label' => 'Пользователи', 'url' => ['/site/users']],
//                    ['label' => 'Страницы', 'url' => ['/pages/index']],
//                ]
//            ],
//            [
//                'label' => 'Меню',
//                'visible' => !Yii::$app->user->isGuest,
//                #'url' => ['/data/'],
//                'items' => [
//                    ['label' => 'RTO', 'url' => ['/entity/index']],
////                    ['label' => 'Коды ситуаций', 'url' => ['/signal/index']],
//                    ['label' => 'Группы реагирования', 'url' => ['/groups/index']],
////                    ['label' => 'Список репортажей', 'url' => ['/data/index/']],
//                    ['label' => 'Пользователи', 'url' => ['/site/users']],
//                    ['label' => 'Страницы', 'url' => ['/pages/index']],
//                ]
//            ],
            Yii::$app->user->isGuest ?(
                [
                    'label' => 'Войти',
                    'url' => ['/site/login']
                ]
            ):(
                [
                    'label' => 'Выйти ('.Yii::$app->user->identity->username.')',
                    #'visible' => Yii::$app->user->can('ticket'),
                    'url' => ['/site/logout/'],
                    'linkOptions' => ['data-method' => 'post']
                ]
            ),
        ],

    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">ТОО «SHURA» &copy; <?= date('Y') ?></p>


    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
