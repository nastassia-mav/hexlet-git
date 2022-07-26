<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <? $APPLICATION->ShowHead(); ?>
<!--    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />-->
<!--    <meta name="format-detection" content="telephone=no">-->
    <link type="text/css" rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/style.css">
    <link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>/favicon.ico">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
</head>
<body class="headpage">
<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>
<div class="wrapper">
    <header>
        <div class="header-body">
            <div class="container">
                <a href="" class="header__logo"><img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.svg" alt="" /></a>
                <div class="header-body-top">
                    <div class="header-body-top-column">
                        <ul class="header-body-menu">
                            <li><a href="" class="header-body-menu__link">Где купить?</a></li>
                            <li><a href="/textpage.html" class="header-body-menu__link">Доставка и оплата</a></li>
                        </ul>
                    </div>
                    <div class="header-body-top-column">
                        <ul class="header-body-menu">
                            <li><a href="/textpage.html" class="header-body-menu__link">О нас</a></li>
                            <li><a href="/cart.html." class="header-body-menu__cart">Корзина <span><i>10</i></span></a></li>
                            <li>
                                <div class="header-body-lang">
                                    <div class="header-body-lang__title">RU</div>
                                    <div class="header-body-lang-box">
                                        <a href="" class="header-body-lang__item">RU</a>
                                        <a href="" class="header-body-lang__item">EN</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-body-bottom">
                    <div class="header-body-bottom-column">
                        <div class="header-body-contacts">
                            <a href="tel:+79251189581" class="header-body-contacts__phone">+7 925 118 95 81</a>
                            <a href="" class="header-body-contacts__callback btn pl callback">Перезвонить</a>
                        </div>
                    </div>
                    <div class="header-body-bottom-column">
                        <div class="header-body-buttons">
                            <a href="" class="header-body-buttons__item btn-2">Изделия на заказ</a>
                            <a href="" class="header-body-buttons__item btn-2">Ремонт украшений</a>
                        </div>
                    </div>
                </div>
                <div class="header-menu__icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class='container'>
                <div class="header-menu">
                    <ul class="header-menu-list">
                        <li><a href="" class="header-menu__link">Все коллекции</a></li>
                        <li><a href="" class="header-menu__link">Кольца</a></li>
                        <li><a href="" class="header-menu__link">Комплекты украшений</a></li>
                        <li><a href="" class="header-menu__link">Серьги</a></li>
                        <li><a href="" class="header-menu__link">Кулоны и подвески</a></li>
                        <li><span class="header-menu-more">Ещё <span class="header-menu-more__icon"><span></span><span></span><span></span></span></span></li>
                    </ul>
                </div>
            </div>
            <div class="header-submenu">
                <div class='container'>
                    <div class="header-submenu-body">
                        <div class="header-submenu-column">
                            <div class="header-submenu__label">Коллекции</div>
                            <ul class="header-submenu-list">
                                <li><a href="" class="header-submenu__link">Коллекция 1</a></li>
                                <li><a href="" class="header-submenu__link">Коллекция 2</a></li>
                                <li><a href="" class="header-submenu__link">Коллекция 3</a></li>
                                <li><a href="" class="header-submenu__link">Коллекция 4</a></li>
                                <li><a href="" class="header-submenu__link">Коллекция 5</a></li>
                                <li><a href="" class="header-submenu__link">Коллекция 6</a></li>
                                <li><a href="" class="header-submenu__link">Коллекция 7</a></li>
                            </ul>
                        </div>
                        <div class="header-submenu-column">
                            <div class="header-submenu__label">Каталог</div>
                            <ul class="header-submenu-list">
                                <li><a href="" class="header-submenu__link">Кольца</a></li>
                                <li><a href="" class="header-submenu__link">Комплекты урашений</a></li>
                                <li><a href="" class="header-submenu__link">Серьги</a></li>
                                <li><a href="" class="header-submenu__link">Кулоны и подвески</a></li>
                                <li><a href="" class="header-submenu__link">Колье и бусы</a></li>
                                <li><a href="" class="header-submenu__link">Браслеты</a></li>
                                <li><a href="" class="header-submenu__link">Украшения для мужчин</a></li>
                            </ul>
                        </div>
                        <div class="header-submenu-column">
                            <div class="header-submenu__label">Компания</div>
                            <ul class="header-submenu-list">
                                <li><a href="" class="header-submenu__link">О нас</a></li>
                                <li><a href="" class="header-submenu__link">Доставка и оплата</a></li>
                                <li><a href="" class="header-submenu__link">Где купить?</a></li>
                                <li><a href="" class="header-submenu__link">Политика конфиденциальности</a></li>
                            </ul>
                            <div class="header-submenu-social">
                                <a href="" class="header-submenu-social__item fa fa-vk"></a>
                                <a href="" class="header-submenu-social__item fa fa-facebook"></a>
                                <a href="" class="header-submenu-social__item fa fa-instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
