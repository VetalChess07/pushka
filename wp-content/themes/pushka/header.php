<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
        <div class="container">
            <div class="header__inner">
                <nav class="header__items">
                    <div class="header__item">
                        <a class="header__item-link" href="#main">Выбрать квартиру</a>
                    </div>
                    <div class="header__item">
                        <a class="header__item-link" href="#gallery">О комплексе</a>
                    </div>
                </nav>
                <div class="header__logo">
                    <img class="header__logo-img" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="">
                </div>
                <nav class="header__items">
                    <div class="header__item">
                        <a class="header__item-link" href="#buy">Как купить</a>
                    </div>
                    <div class="header__item">
                        <a class="header__item-link" href="#contacts">Контакты</a>
                    </div>
                </nav>
                <div class="header__menu">
                <img class="header__logo-img" src="<?php bloginfo('template_url'); ?>/assets/img/menuMobile.svg" alt="">
                </div>
            </div>
        </div>
    </header>
