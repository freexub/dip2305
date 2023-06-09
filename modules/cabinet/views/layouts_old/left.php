<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>admin</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Поиск..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Меню', 'options' => ['class' => 'header']],
                    ['label' => 'Мой профиль', 'icon' => 'angle-right', 'url' => ['profile/view?id='.Yii::$app->user->id]],
                    ['label' => 'Полезная информация', 'icon' => 'angle-right', 'url' => ['pages/index']],
                    ['label' => 'Заявки', 'icon' => 'angle-right', 'url' => ['book/index']],

                    ['label' => 'Управление', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Профили',
                        'icon' => 'angle-right',
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
            ]
        ) ?>

    </section>

</aside>
