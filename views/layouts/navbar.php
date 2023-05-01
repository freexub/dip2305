<?php

use yii\helpers\Html;

?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-green navbar-dark">
    <!-- Brand Logo -->
    <a href="/cabinet/" class="brand-link">
        <span class="brand-text font-weight-dark">
        </span>
    </a>

    <!-- Right navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/cabinet/" class="nav-link">ПЕРСОНАЛ</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/cabinet/" class="nav-link">Кабинет</a>
        </li>
        <li class="nav-item">
            <?= Html::a('<i class="fas fa-sign-out-alt"></i>', ['/site/logout'], ['data-method' => 'post', 'class' => 'nav-link']) ?>
        </li>
    </ul>
</nav>
<!-- /.navbar -->