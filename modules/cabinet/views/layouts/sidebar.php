<aside class="main-sidebar sidebar-light-green elevation-4">
    <!-- Brand Logo -->
    <a href="/cabinet/" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ПЕРСОНАЛ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <?php $rout = Yii::$app->controller->id; ?>
        <?php $routAction = Yii::$app->requestedAction->id; ?>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    ['label' => 'Меню', 'header' => true],
                    ['label' => 'Мой профиль', 'icon' => 'user', 'url' => ['profile/my']],
                    ['label' => 'Мои задачи', 'icon' => 'fas fa-clipboard', 'url' => ['book/my']],
                    ['label' => 'Мои заявки', 'icon' => 'fas fa-clipboard', 'url' => ['book/index']],
                    ['label' => 'Полезная информация', 'icon' => 'fas fa-info-circle', 'url' => ['pages/index']],

                    ['label' => 'Управление', 'header' => true],
                    ['label' => 'Департаменты', 'active' => ($rout == 'departments'),'icon' => 'fas fa-building', 'url' => ['departments/index']],
                    ['label' => 'Должности', 'active' => ($rout == 'position'),'icon' => 'fas fa-user', 'url' => ['position/index']],
                    [
                        'label' => 'Профили',
                        'icon' => 'far fa-users',
                        'active' => ($rout == 'profile'),
                        'url' => '#',
                        'items' => [
                            ['label' => 'Добавить ','icon' => 'file-code-o', 'url' => ['profile/create'],],
                            ['label' => 'Все пользователи', 'icon' => 'file-code-o', 'url' => ['profile/index'],],
                        ],
                    ],
                    [
                        'label' => 'Информация',
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
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>