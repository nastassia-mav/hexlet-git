
<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

?>
<footer>
    <div class='container'>
        <div class="footer-body">
            <div class="footer-column">
                <a href="" class="footer__logo"><img src="img/logo_w.svg" alt="" /></a>
            </div>
            <div class="footer-column">
                <div class="footer-content">
                    <div class="footer-content-column">
                        <ul class="footer-menu">
                            <li><a href="" class="footer-menu__link">О нас</a></li>
                            <li><a href="" class="footer-menu__link">Изделия на заказ</a></li>
                            <li><a href="" class="footer-menu__link">Ремонт украшений</a></li>
                        </ul>
                    </div>
                    <div class="footer-content-column">
                        <ul class="footer-menu">
                            <li><a href="" class="footer-menu__link">Где купить?</a></li>
                            <li><a href="" class="footer-menu__link">Доставка и оплата</a></li>
                        </ul>
                    </div>
                    <div class="footer-content-column">
                        <div class="footer-social">
                            <a href="" class="footer-social__link fa fa-vk"></a>
                            <a href="" class="footer-social__link fa fa-facebook"></a>
                            <a href="" class="footer-social__link fa fa-instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-column">
                <div class="footer-dev">
                    <div class="footer-dev__label">Разработка сайта:</div>
                    <a href="" class="footer-dev__item"><img src="img/icons/dev.svg" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<div class="popup popup-callback">
    <div class="popup-table table">
        <div class="cell">
            <div class="popup-content">
                <div class="popup-close"></div>
                <div class="form__title title">Заполните форму<br />и мы перезвоним вам</div>
                <form data-m="m_1" action="#" class="form-body hm">
                    <div class="form-body-row">
                        <div class="form-body-column">
                            <input type="text" name="form[]" data-value="Ваше имя" class="input" />
                        </div>
                        <div class="form-body-column">
                            <input type="text" name="form[]" data-value="Ваш телефон" class="input req" />
                        </div>
                    </div>
                    <div class="form-body-button">
                        <button type="submit" class="form__btn btn-3">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="popup popup-othersize">
    <div class="popup-table table">
        <div class="cell">
            <div class="popup-content">
                <div class="popup-close"></div>
                <div class="form__title title">Укажите ваш размер</div>
                <form data-m="m_2" action="#" class="form-body hm">
                    <div class="form-body-row">
                        <div class="form-body-column">
                            <input type="text" name="form[]" data-value="Ваш размер" class="input req" />
                            <div class="form-body__text">Украшения на заказ доставляются примерно через 3 недели после получения оплаты. Подробную информацию можно получить у менеджера после оформления заказа.</div>
                        </div>
                        <div class="form-body-column">
                            <textarea name="form[]" data-value="Комментарий" class="input"></textarea>
                        </div>
                    </div>
                    <div class="form-body-button">
                        <button type="submit" class="form__btn btn-3">Добавить в корзину</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="popup popup-incart m_2">
    <div class="popup-table table">
        <div class="cell">
            <div class="popup-content">
                <div class="popup-close"></div>
                <div class="form__title title">Товар добавлен в корзину</div>
                <div class="popup-incart-body">
                    <div class="popup-incart__image"><img src="img/catalog/01.png" alt="" /></div>
                    <div class="popup-incart__name">Название украшения</div>
                    <div class="popup-incart__size">Размер: 16</div>
                    <div class="popup-incart-buttons">
                        <a href="" class="popup-incart-buttons__btn btn-5 popup__close">Продолжить покупки</a>
                        <a href="" class="popup-incart-buttons__btn btn-3">Оформить заказ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup popup-message m_1">
    <div class="popup-table table">
        <div class="cell">
            <div class="popup-content">
                <div class="popup-close"></div>
                <div class="popup-message__title title">Спасибо! <br />Мы перезвоним вам <br /> в ближайшее время</div>
                <a href="" class="popup__close btn-3">Ок</a>
            </div>
        </div>
    </div>
</div>
<div class="popup popup-video">
    <div class="popup-table table">
        <div class="cell">
            <div class="popup-close"></div>
            <div class="popup-video__value"></div>
        </div>
    </div>
</div>
<script src="https://maps.google.com/maps/api/js?sensor=false&amp;key=AIzaSyAnTDLrncoU26a3S_WQOZQ0G3evEWWR29E"></script>
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/jquery.inputmask.bundle.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/jquery.nicescroll.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/jquery.popover.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/slick.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/forms.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/script.js"></script>
</body>
</html>