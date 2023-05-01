<aside class="main-sidebar sidebar-light-green elevation-4">
    <!-- Brand Logo -->
    <a href="/cabinet/" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ПЕРСОНАЛ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <?php $rout = Yii::$app->controller->id; ?>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    ['label' => 'Меню', 'header' => true],
                    ['label' => 'Мой профиль', 'icon' => 'user', 'url' => ['profile/view?id='.Yii::$app->user->id]],
                    ['label' => 'Полезная информация', 'icon' => 'fas fa-info-circle', 'url' => ['pages/index']],
                    ['label' => 'Заявки', 'icon' => 'fas fa-clipboard', 'url' => ['book/index']],

                    ['label' => 'Управление', 'header' => true],
                    ['label' => 'Департаменты', 'active' => ($rout == 'departments'),'icon' => 'fas fa-building', 'url' => ['departments/index']],
                    ['label' => 'Должности', 'active' => ($rout == 'position'),'icon' => 'fas fa-building', 'url' => ['position/index']],
                    [
                        'label' => 'Профили',
                        'icon' => 'far fa-users',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Добавить ', 'icon' => 'file-code-o', 'url' => ['profile/create'],],
                            ['label' => 'Все пользователи', 'icon' => 'file-code-o', 'url' => ['profile/index'],],
                        ],
                    ],
                    [
                        'label' => 'Полезная информация',
                        'icon' => 'angle-right',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Добавить ', 'icon' => 'file-code-o', 'url' => ['pages/create'],],
                            ['label' => 'Вся информация', 'icon' => 'file-code-o', 'url' => ['pages/index2'],],
                        ],
                    ],
                    [
                        'label' => 'Заявки',
                        'icon' => 'angle-right',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Все заявки', 'icon' => 'file-code-o', 'url' => ['book/index-all'],],
                            ['label' => 'В очереди', 'icon' => 'file-code-o', 'url' => ['book/new'],],
                            ['label' => 'Обработанные', 'icon' => 'file-code-o', 'url' => ['book/completed'],],
                        ],
                    ],
//                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
//                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
//                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
//                        'label' => 'Some tools',
//                        'icon' => 'share',
//                        'url' => '#',
//                        'items' => [
//                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
//                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
//                            [
//                                'label' => 'Level One',
//                                'icon' => 'circle-o',
//                                'url' => '#',
//                                'items' => [
//                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
//                                    [
//                                        'label' => 'Level Two',
//                                        'icon' => 'circle-o',
//                                        'url' => '#',
//                                        'items' => [
//                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
//                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
//                                        ],
//                                    ],
//                                ],
//                            ],
//                        ],
                    ],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>