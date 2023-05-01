<aside class="main-sidebar sidebar-light-green elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
//                    ['label' => 'Меню', 'options' => ['class' => 'header']],
                    ['label' => 'Мой профиль', 'icon' => 'angle-right', 'url' => ['profile/view?id='.Yii::$app->user->id]],
//                    ['label' => 'Полезная информация', 'icon' => 'angle-right', 'url' => ['pages/index']],
//                    ['label' => 'Заявки', 'icon' => 'angle-right', 'url' => ['book/index']],

//                    ['label' => 'Управление', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Отделы',
                        'icon' => 'building',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Добавить', 'icon' => 'plus', 'url' => ['departments/create'],],
                            ['label' => 'Все отделы', 'icon' => 'circle-o', 'url' => ['departments/index'],],
                        ],
                    ],
                    [
                        'label' => 'Сотрудники',
                        'icon' => 'address-card',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Добавить ', 'icon' => 'plus', 'url' => ['profile/create'],],
                            ['label' => 'Все сотрудники', 'icon' => 'circle-o', 'url' => ['profile/index'],],
                        ],
                    ],
                    [
                        'label' => 'Новости',
                        'icon' => 'align-justify',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Добавить ', 'icon' => 'plus', 'url' => ['pages/create'],],
                            ['label' => 'Все новости', 'icon' => 'circle-o', 'url' => ['pages/index'],],
                        ],
                    ],
//                    [
//                        'label' => 'Заявки',
//                        'icon' => 'angle-right',
//                        'url' => '#',
//                        'items' => [
//                            ['label' => 'Все заявки', 'icon' => 'file-code-o', 'url' => ['book/index-all'],],
//                            ['label' => 'В очереди', 'icon' => 'file-code-o', 'url' => ['book/new'],],
//                            ['label' => 'Обработанные', 'icon' => 'file-code-o', 'url' => ['book/completed'],],
//                        ],
//                    ],
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