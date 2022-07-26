<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?php \Bitrix\Main\UI\Extension::load("ui.bootstrap4"); ?>
<?php $APPLICATION->SetAdditionalCSS("/bitrix/css/main/font-awesome.css"); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<div class="wrapper">
    <div class="naw_chain">
        <div class="naw_chain-item">
            <a href="/">Главная</a>
        </div>
        <div class="naw_chain-item">
            <a href="/products/">Продукция</a>
        </div>
        <div class="naw_chain-item">
            <a href="/products/"><?= $arResult['SECTION']['PATH'][0]['NAME'] ?></a>
        </div>
        <div class="naw_chain-item naw_chain-item-active">
            <?= $arResult['NAME'] ?>
        </div>
    </div>
    <div class="container p-0 m-0">
        <div class="row p-0 m-0">
            <div class="col-lg-6 col-md-12 col-sm-12 p-0 pt-4">
                <div class="product-slider-wrapper">
                    <div class="product-slider-inner">
                        <div class="product-slider_for">
                            <div class="product-slider_for-item"
                                 style="background-image: url(<?= $arResult['DETAIL_PICTURE']['SRC'] ?>);">
                                <img style="

                                        bottom: 0px;
                                        left: 0px;
                                        display: block;
                                        width: 100%;
                                        height: 100%;"
                                     src="/local/templates/phpdev/img/empty.png" alt="icon"
                                     class="slider-popup-show-button">
                            </div>
                            <? if (!empty($arResult['PROPERTIES']['SLIDER_CATALOG_02']['VALUE'])): ?>
                                <? foreach ($arResult['PROPERTIES']['SLIDER_CATALOG_02']['VALUE'] as $arSlidPhoto): ?>
                                <div class="product-slider_for-item"
                                     style="background-image: url(<?= CFile::GetPath($arSlidPhoto) ?>);">
                                    <img style="

                                        bottom: 0px;
                                        left: 0px;
                                        display: block;
                                        width: 100%;
                                        height: 100%;"

                                         src="/local/templates/phpdev/img/empty.png" alt="icon"
                                         class="slider-popup-show-button">
                                </div>
                            <? endforeach; ?>
                            <? else: ?>
                                <style>
                                    .product-slider_pop-item{
                                        width:800px!important;
                                    }
                                </style>
                                <script>
                                    $('.slider-popup-show-button').click(function (){
                                        $('.slick-track').css("width", "800px");
                                    })
                                </script>
                            <? endif; ?>
                        </div>
                        <? if ($arResult['PROPERTIES']['SLIDER_CATALOG_02']): ?>
                            <div class="product-slider_nav">
                                <div class="product-slider_nav-item"
                                     style="background-image: url(<?= $arResult['DETAIL_PICTURE']['SRC'] ?>)"></div>
                                <? foreach ($arResult['PROPERTIES']['SLIDER_CATALOG_02']['VALUE'] as $arSlidPhoto): ?>
                                    <div class="product-slider_nav-item"
                                         style="background-image: url(<?= CFile::GetPath($arSlidPhoto) ?>)"></div>
                                <? endforeach; ?>
                            </div>
                        <? endif; ?>
                    </div>
                </div>
                <? if (!empty($arResult['PROPERTIES']['PECULIARITIES']['VALUE'])): ?>
                    <div class="product-advantages pt-4">
                        <div class="product-advantages-title">
                            Особенности
                        </div>
                        <div class="product-advantages-content container p-0">
                            <? $firstFlag = true;
                            foreach ($arResult['PROPERTIES']['PECULIARITIES']['VALUE'] as $key => $arPec): ?>

                                <? if ($arPec['name']): ?>
                                    <div class="row pt-4 m-0">
                                        <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                                            <?if(!empty($arPec['icon'])){?>
                                                <img src="<?= CFile::GetPath($arPec["icon"]); ?>" alt="image" height="128">
                                            <?}?>

                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-12 p-0 product-advantages-content-text-wrapper">
                                            <div class="product-advantages-content-text-inner" <? if ($firstFlag = true) {
                                                echo 'style="margin: 0px 0px 40px 0px"';
                                            } ?>>
                                                <div class="product-advantages-content-title">
                                                    <?= $arPec['name'] ?>
                                                </div>
                                                <div class="product-advantages-content-text">
                                                    <?
                                                    /*$input = $arPec['description'];
                                                    $text = explode('.', $input);
                                                     foreach ($text as $value):*/ ?>
                                                    <p class="m-0 pt-2">

                                                        <?
                                                        $array = preg_split("/&lt;br&gt;/",$arPec['description']);
                                                        foreach($array as $text)
                                                        {
                                                            if(empty($text))
                                                            {
                                                                echo '<br><br>';
                                                            }
                                                            else
                                                            {
                                                                echo $text;
                                                            }
                                                        }
                                                        ?>
                                                    </p>
                                                    <? /*endforeach;*/ ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                <? endif; ?>
                                <? $firstFlag = false; ?>
                            <? endforeach; ?>
                        </div>
                    </div>
                <? endif; ?>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="product-description">
                    <div class="product-description-title pb-3">
                        <?= $arResult['NAME'] ?>
                    </div>
                    <? /*
                    $new_tmp = explode('.', $arResult['~PREVIEW_TEXT']);
                    $chunk = (array_chunk($new_tmp, 2));
                     foreach ($chunk as $key => $text): ?>
                        <? foreach ($text as $val):*/ ?>
                    <div class="product-description-text pb-3">
                        <?= $arResult['~PREVIEW_TEXT']; ?>
                    </div>
                    <? /*endforeach; ?>
                    <? endforeach; */ ?>
                </div>
                <div class="product-features p-0 container">
                    <? if ($arResult['PROPERTIES']['ADVANTAGES']['VALUE']): ?>
                        <div class="row justify-content-between pb-5" style="justify-content: flex-start !important;">
                            <? $switch = 0;
                            foreach ($arResult['PROPERTIES']['ADVANTAGES']['VALUE'] as $arAdv): ?>
                                <? if ($arAdv['name'] && $arAdv['icon']): ?>
                                    <? $switch++; ?>
                                    <div class="col-lg-4 col-md-4 col-sm-6 product-features-item">
                                        <div class="product-features-item-img">
                                            <img style="max-width: 49px; max-height: 39px"
                                                 src="<?= CFile::GetPath($arAdv["icon"]); ?>" alt="icon">
                                        </div>
                                        <div class="name" style="overflow-wrap: break-word;">
                                            <?= $arAdv['name'] ?>
                                        </div>
                                    </div>
                                <? endif; ?>
                            <? endforeach; ?>
                        </div>
                        <? if ($switch > 0) { ?>
                            <div class="row pb-5">
                                <a href="#" class="col product-detail_link">
                                    Подробнее
                                </a>
                            </div>
                        <? } ?>
                    <? endif; ?>
                    <? if ($arResult['PROPERTIES']['DOWNLOAD']): ?>
                        <div class="row pb-2" style="padding-left: 20px">
                            <div class="col-lg-5 col-md-5 col-sm-12"></div>
                            <div class="col-lg-7 col-md-5 col-sm-12 p-0 product-download_materials-tittle">
                                Скачиваемые материалы
                            </div>
                        </div>
                    <? endif; ?>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <a href="/dealers/" class="product-where_to_by">
                                Где купить?
                            </a>
                        </div>
                        <div class="col-lg-7 col-md-5 col-sm-12">
                            <div class="product-download_materials-link-wrapper">
                                <? foreach ($arResult['PROPERTIES']['DOWNLOAD']['VALUE'] as $arDonwl): ?>
                                    <? switch ($arDonwl['name']) {
                                        case 'Сертификат':
                                            ?>
                                            <a href="<?= CFile::GetPath($arDonwl["file"]); ?>"
                                               download="<?= CFile::GetPath($arDonwl["file"]); ?>"
                                               class="product-download_materials-link-item">
                                                <div>
                                                    <img src="/images/product_layout/product-materials-icon-3.png"
                                                         alt="icon"
                                                         class="product-materials-icon">
                                                    <img src="/images/product_layout/product-materials-icon-3-active.png"
                                                         alt="icon"
                                                         class="product-materials-icon product-materials-icon-active"
                                                         style="display:none">
                                                </div>
                                                <div>Сертификат</div>
                                            </a>
                                            <? break;
                                        case 'Листовка':
                                            ?>
                                            <a href="<?= CFile::GetPath($arDonwl["file"]); ?>"
                                               download="<?= CFile::GetPath($arDonwl["file"]); ?>"
                                               class="product-download_materials-link-item">
                                                <div>
                                                    <img src="/images/product_layout/product-materials-icon-2.png"
                                                         alt="icon"
                                                         class="product-materials-icon">
                                                    <img src="/images/product_layout/product-materials-icon-2-active.png"
                                                         alt="icon"
                                                         class="product-materials-icon product-materials-icon-active"
                                                         style="display:none">
                                                </div>
                                                <div>Листовка</div>
                                            </a>
                                            <? break;
                                        case 'Сертификат ТР ТС':
                                            ?>
                                            <a href="<?= CFile::GetPath($arDonwl["file"]); ?>"
                                               download="<?= CFile::GetPath($arDonwl["file"]); ?>"
                                               class="product-download_materials-link-item">
                                                <div>
                                                    <img src="/images/product_layout/product-materials-icon-3.png"
                                                         alt="icon"
                                                         class="product-materials-icon">
                                                    <img src="/images/product_layout/product-materials-icon-3-active.png"
                                                         alt="icon"
                                                         class="product-materials-icon product-materials-icon-active"
                                                         style="display:none">
                                                </div>
                                                <div>Сертификат ТР ТС</div>
                                            </a>
                                            <? break;
                                        case 'Форма бланка ТЗ':
                                            ?>
                                            <a href="<?= CFile::GetPath($arDonwl["file"]); ?>"
                                               download="<?= CFile::GetPath($arDonwl["file"]); ?>"
                                               class="product-download_materials-link-item">
                                                <div>
                                                    <img src="/images/product_layout/product-materials-icon-4.png"
                                                         alt="icon"
                                                         class="product-materials-icon">
                                                    <img src="/images/product_layout/product-materials-icon-4-active.png"
                                                         alt="icon"
                                                         class="product-materials-icon product-materials-icon-active"
                                                         style="display:none">
                                                </div>
                                                <div>Форма бланка ТЗ</div>
                                            </a>
                                        <?
                                    } ?>
                                <? endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        --><?// if ($arResult['PROPERTIES']['MOD_CATALOG']['~VALUE'] && $arResult['PROPERTIES']['HEADER_MOD']['~VALUE']): ?>
        <script>
            $(document).ready(function (){

                var ajax = true;
                var max_filter_value = <?=$arResult['max_filter_value']?>;
                var min_filter_value = <?=$arResult['min_filter_value']?>;
                var min_last = <?=$arResult['min_filter_value']?>;
                var max_last = <?=$arResult['max_filter_value']?>;

                $(document).on('DOMSubtreeModified','.product-tabel-range_slider',function (){

                    let min = $('#range_slider-value-0').html();
                    let max = $('#range_slider-value-1').html();

                    if(ajax && (min!='' && max!='') && (max!=max_last || min!=min_last))
                    {
                        ajax = false;
                        max_last = max;
                        min_last = min;
                        $.ajax({
                            url: document.location.origin + document.location.pathname,
                            method: 'POST',
                            dataType: 'html',
                            data: {IS_AJAX_TABLE: 'Y', MIN: min,MAX:max},
                            success: function (data) {
                                $('#ajax__table').html(data);

                                ajax = true;

                                // ========= ИКОНКА ДЛЯ ССЫЛКИ ЗАГРУЗКИ МАТЕРИАЛОВ =========
                                $('.product-download_materials-link-item').mouseenter(function () {
                                    var icon = $(this).find('.product-materials-icon');
                                    $(icon[0]).css({'display': 'none'});
                                    $(icon[1]).css({'display': 'block'});
                                    for (var i = 0; i < 5; i++) {
                                        setTimeout(function () {
                                            $(icon).css({'transform': 'scale(1.4)', 'transition': 'transform 1s'});
                                        }, i * 200);
                                    }
                                });
                                $('.product-download_materials-link-item').mouseleave(function () {
                                    //console.log(this);
                                    var icon = $(this).find('.product-materials-icon');
                                    $(icon[0]).css({'display': 'block'});
                                    $(icon[1]).css({'display': 'none'});
                                    for (var i = 0; i < 5; i++) {
                                        setTimeout(function () {
                                            $(icon).css({'transform': 'scale(1.0)', 'transition': 'transform 1s'});
                                        }, i * 200);
                                    }
                                });
                                // ========= МОДАЛЬНЫЕ ОКНА  =========
                                $('.show-popup-button').click(function () {
                                    let url = $(this).attr('data-image');
                                    window.open(url);
                                });

                                $('.slider-popup-show-button').click(function () {
                                    var position = $('.product-slider_for').slick('slickCurrentSlide');
                                    $('.product-slider_pop').slick('slickGoTo', position);
                                    $('.product-slider-popup-wrapper').fadeIn();
                                });

                                $('.product-detail_link').click(function () {
                                    $('.product-advantages-popup-wrapper').fadeIn();
                                });

                                $('.close-popup-button, .close-popup-link').click(function () {
                                    $('.product-image-popup-wrapper, .product-advantages-popup-wrapper, .product-slider-popup-wrapper').fadeOut();
                                });

                                // ========= КНОПКА РАЗВОРАЧИВАНИЯ (СВОРАЧИВАНИЯ) ТАБЛИЦЫ =========
                                $('#product-table-expand a').click(function (e) {
                                    let final = $('.product-tabel').height() - 425;
                                    e.preventDefault();
                                    $('#product-table-wrapper').animate({'height': `+=${final}`}, 500);
                                    $('#product-table-collapse').show();
                                    $('#product-table-expand').hide();
                                });

                                $('#product-table-collapse a').click(function (e) {
                                    let final = $('.product-tabel').height() - 425;
                                    e.preventDefault();
                                    $('#product-table-wrapper').animate({'height': `-=${final}`}, 500);
                                    $('#product-table-collapse').hide();
                                    $('#product-table-expand').show();
                                });

                                // ========= БЕГУНКИ С РАЗМЕРАМИ =========
                                $("#range_slider").slider({
                                    range: true,
                                    step: <?= $arResult['step']?>,
                                    min: <?=$arResult['min_filter_value']?>,
                                    max: <?=$arResult['max_filter_value'] + 0.001?>,
                                    values: [min, max],
                                    change: function (event, ui) {
                                        $('#range_slider-value-0').html(ui.values[0]);
                                        $('#range_slider-value-1').html(ui.values[1]);
                                    }
                                });
                            }
                        });
                    }

                })//Хватает одного обработчика так как он тригерится при любом изменении филтра в любую сторону

                // $(document).on('DOMSubtreeModified','#range_slider-value-1',function (){
                //     console.log($(this).html());
                // })
            })
        </script>

        <div id="ajax__table" class="container">
            <?
            if($_REQUEST["IS_AJAX_TABLE"] == "Y")
            {
                $APPLICATION->RestartBuffer();
            }
            ?>
            <div class="row product-table-block mt-4">
                <div class="col-12 product-table-title">
                    Выберите высоту
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 p-0">
                    <div class="product-tabel-range_slider pt-4">
                        <div id="range_slider" class="range_slider"></div>
                        <div class="range-values range-values-divider">
                            <span id="range_slider-value-0"><?=$arResult['min_filter_value'];?></span>
                            <span>м</span>
                        </div>
                        <div class="range-values">
                            <span id="range_slider-value-1"><?=$arResult['max_filter_value'];?></span>
                            <span>м</span>
                        </div>
                    </div>
                </div>
                <? /*<div class="col-lg-6 col-md-12 col-sm-12 product-table-size p-0">
                        <div class="product-table-size-title pt-4">
                            Размеры, мм
                        </div>
                    </div>*/ ?>
                <div class="product-table-wrapper p-0 m-0" id="product-table-wrapper">
                    <table class="product-tabel">
                        <thead class="product-tabel-head">
                        <tr>
                            <th class="product-tabel-th-desktop pt-5 product-tabel-th-desktop-first">Наименование
                                опоры
                            </th>
                            <th class="product-tabel-th-desktop pt-5">Глобальный код</th>
                            <?
                            $header = [];
                            /*$tmp = [];
                            foreach ($arResult['PROPERTIES']['MOD_CATALOG']['~VALUE'] as $key => $tmpVal) {
                                $tmp[] = unserialize($tmpVal['values']);
                            }
                            $max = array_keys($tmp, max($tmp))[0];
                            */
                            $z_index = 20;
                            foreach ($arResult['PROPERTIES']['HEADER_MOD']['~VALUE'] as $arHead):
                                $header[] = $arHead['name'];
                                ?>
                                <th class="product-tabel-th-desktop pt-5">
                                    <div class="product-tabel-th-desktop-text">
                                        <? if ($arHead['desc']): ?>
                                            <div class="product-tabel-th-desktop-corner"
                                                 style="z-index:<?= $z_index-- ?>;">
                                                <div class="product-tabel-th-desktop-corner-content">
                                                    <?= wordwrap($arHead['desc'], 80, "<br />"); ?>
                                                </div>
                                            </div>
                                        <? endif; ?>
                                        <?= $arHead['name'] ?>
                                    </div>
                                </th>
                            <?
                            endforeach; ?>
                            <th class="product-tabel-th-desktop pt-5">Эскиз</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?
                        $count = 0;
                        foreach ($arResult['PROPERTIES']['MOD_CATALOG']['~VALUE'] as $arContent):
                            $count++; ?>
                            <tr class="product-tabel-tr" style="padding-left:20px">
                                <td class="product-tabel-td product-tabel-td-first">
                                    <b class="product-tabel-td-label">Наименование <br> опоры<br></b>
                                    <?= $arContent['full_name'] ?>
                                </td>
                                <td class="product-tabel-td">
                                    <b class="product-tabel-td-label">Глобальный код<br></b>
                                    <?= $arContent['global_code'] ?>
                                </td>
                                <?
                                $values = [];
                                $values = unserialize($arContent['values']);
                                $a = array_fill_keys($header, ' ');
                                $key = array_flip($header);
                                $merged = array_replace_recursive($a, $values);
                                foreach ($merged as $keys => $value):?>
                                    <? if (in_array($keys, $header)) { ?>
                                        <td class="product-tabel-td">
                                            <b class="product-tabel-td-label"><?= $keys ?></b>
                                            <?= $value ?></td>
                                    <? } ?>
                                <? endforeach; ?>
                                <? if ($arContent["sketch"]): ?>
                                    <td class="product-tabel-td">
                                        <a href="<?= CFile::GetPath($arContent["sketch"]); ?>" download=""
                                           target="_blank">
                                            <b class="product-tabel-td-label">Эскиз</b>
                                            <div class="show-popup-button product-table-icon-view"
                                                 data-image="<?= CFile::GetPath($arContent["sketch"]); ?>"></div>
                                        </a>
                                    </td>
                                <? endif; ?>
                            </tr>
                        <? endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <? if ($count > 10): ?>
                    <div class="container text-center p-4 product-table-expand" id="product-table-expand">
                        <a href="#">
                            <img src="/images/product_layout/product-table-expand.png" alt="">
                            Развернуть список полностью
                        </a>
                    </div>
                    <div class="container text-center p-4 product-table-collapse" id="product-table-collapse">
                        <a href="#">
                            <img src="/images/product_layout/product-table-expand.png" alt="">
                            Свернуть список
                        </a>
                    </div>
                <? endif; ?>
            </div>
            <div class="text-center questionnaire-bottom-link">
                Для заказа несерийной продукции, пожалуйста, заполните
                <a href="/downloads/">опросный лист</a>
            </div>
            <?
            if($_REQUEST["IS_AJAX_TABLE"] == "Y")
            {
                die();
            }
            ?>
        </div>
        <!--        --><?// endif; ?>
    </div>
</div>
<!-- WWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW -->
<? /*<div class="product-slider-popup-wrapper">
    <div class="product-image-popup">
        <div class="product-image-popup-inner">
            <div>
                <div class="product-slider_pop">
                    <? foreach ($arResult['PROPERTIES']['SLIDER_CATALOG_02']['VALUE'] as $arSlidPhoto): ?>
                    <?=var_dump(CFile::GetPath($arSlidPhoto) )?>
                        <div class="product-slider_pop-item"
                             style="background-image: url(<?= CFile::GetPath($arSlidPhoto) ?>)"></div>
                    <? endforeach; ?>
                </div>
                <div class="product-image-popup-sign p-4">
                    <?= $arResult['NAME'] ?>
                </div>
            </div>
            <div class="close-popup-button"></div>
        </div>
    </div>
</div> */ ?>
<div class="product-slider-popup-wrapper">
    <div class="product-image-popup">
        <div class="product-image-popup-inner">
            <div>
                <div class="product-slider_pop">
                    <div class="product-slider_pop-item"
                         style="background-image: url(<?= $arResult['DETAIL_PICTURE']['SRC'] ?> );"></div>
                    <? if ($arResult['PROPERTIES']['SLIDER_CATALOG_02']): ?>
                        <? foreach ($arResult['PROPERTIES']['SLIDER_CATALOG_02']['VALUE'] as $arSlidPhoto): ?>
                            <div class="product-slider_pop-item"
                                 style="background-image: url(<?= CFile::GetPath($arSlidPhoto) ?>);"></div>
                        <? endforeach; ?>
                    <? else: ?>
                        <div class="product-slider_pop-item"
                             style="background-image: url(<?= $arResult['DETAIL_PICTURE']['SRC'] ?> );"></div>
                    <? endif; ?>
                </div>
                <div class="product-image-popup-sign p-4">
                    <?= $arResult['NAME'] ?>
                </div>
            </div>
            <div class="close-popup-button"></div>
        </div>
    </div>
</div>

<div class="product-image-popup-wrapper">
    <div class="product-image-popup">
        <div class="product-image-popup-inner">
            <div>
                <img src="" alt="draft" class="product-image-popup-image">
                <div class="product-image-popup-sign p-4">
                    <?= $arResult['NAME'] ?>
                </div>
            </div>
            <div class="close-popup-button"></div>
        </div>
    </div>
</div>

<div class="product-advantages-popup-wrapper">
    <div class="product-advantages-popup">
        <div class="product-advantages-popup-inner">
            <div class="product-advantages-popup-content">
                <div class="text-left product-advantages-popup-title">
                    <div class="close-popup-button product-advantages-close-popup-button"></div>
                    <div class="pb-4">Преимущества</div>
                </div>
                <div class="container p-0 text-left">
                    <? foreach ($arResult['PROPERTIES']['ADVANTAGES']['VALUE'] as $arAdv): ?>
                        <? if ($arAdv['name'] && $arAdv['icon']): ?>
                            <div class="row justify-content-start border-top p-0 m-0 pb-4 pt-5">
                                <div class="col-1 p-0">
                                    <img style="min-width: 87px; max-height: 89px"
                                         src="<?= CFile::GetPath($arAdv["icon"]); ?>"
                                         alt=" <?= $arAdv['name'] ?>">
                                </div>
                                <div class="col-4 p-0 pl-5 pr-4 product-advantages-popup-item-title text-left">
                                    <div>
                                        <?= $arAdv['name'] ?>
                                    </div>
                                </div>
                                <div class="col-7 p-0 product-advantages-popup-item-text"
                                     style="padding-left: 60px !important;">
                                    <?= $arAdv['description'] ?>
                                </div>
                            </div>
                        <? endif; ?>
                    <? endforeach; ?>
                    <div class="container">
                        <div class="row justify-content-end pt-5">
                            <div class="col-1 pt-5">
                                <div class="close-popup-link">Закрыть</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        // ========= ИКОНКА ДЛЯ ССЫЛКИ ЗАГРУЗКИ МАТЕРИАЛОВ =========
        $('.product-download_materials-link-item').mouseenter(function () {
            var icon = $(this).find('.product-materials-icon');
            $(icon[0]).css({'display': 'none'});
            $(icon[1]).css({'display': 'block'});
            for (var i = 0; i < 5; i++) {
                setTimeout(function () {
                    $(icon).css({'transform': 'scale(1.4)', 'transition': 'transform 1s'});
                }, i * 200);
            }
        });
        $('.product-download_materials-link-item').mouseleave(function () {
            //console.log(this);
            var icon = $(this).find('.product-materials-icon');
            $(icon[0]).css({'display': 'block'});
            $(icon[1]).css({'display': 'none'});
            for (var i = 0; i < 5; i++) {
                setTimeout(function () {
                    $(icon).css({'transform': 'scale(1.0)', 'transition': 'transform 1s'});
                }, i * 200);
            }
        });
        // ========= МОДАЛЬНЫЕ ОКНА  =========
        $('.show-popup-button').click(function () {
            let url = $(this).attr('data-image');
            window.open(url);
        });

        $('.slider-popup-show-button').click(function () {
            var position = $('.product-slider_for').slick('slickCurrentSlide');
            $('.product-slider_pop').slick('slickGoTo', position);
            $('.product-slider-popup-wrapper').fadeIn();
        });

        $('.product-detail_link').click(function () {
            $('.product-advantages-popup-wrapper').fadeIn();
        });

        $('.close-popup-button, .close-popup-link').click(function () {
            $('.product-image-popup-wrapper, .product-advantages-popup-wrapper, .product-slider-popup-wrapper').fadeOut();
        });

        // ========= КНОПКА РАЗВОРАЧИВАНИЯ (СВОРАЧИВАНИЯ) ТАБЛИЦЫ =========
        $('#product-table-expand a').click(function (e) {
            let final = $('.product-tabel').height() - 425;
            e.preventDefault();
            $('#product-table-wrapper').animate({'height': `+=${final}`}, 500);
            $('#product-table-collapse').show();
            $('#product-table-expand').hide();
        });

        $('#product-table-collapse a').click(function (e) {
            let final = $('.product-tabel').height() - 425;
            e.preventDefault();
            $('#product-table-wrapper').animate({'height': `-=${final}`}, 500);
            $('#product-table-collapse').hide();
            $('#product-table-expand').show();
        });

        // ========= СЛАЙДЕРЫ =========
        $('.product-slider_for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '.product-slider_nav',
            infinite: true,
            vertical: true,
            afterChange: function () {
                //console.log('test');
            }
        });
        $('.product-slider_nav').slick({

            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: '.product-slider_for',
            variableWidth: true,
            focusOnSelect: true,
            infinite: true,
        });
        $('.product-slider_pop').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '.product-slider_for',
            infinite: true,
        });
        $('.product-slider_for').on('afterChange', function () {
            var position = $('.product-slider_for').slick('slickCurrentSlide');
            $('.product-slider_pop').slick('slickGoTo', position);
        });

        // ========= БЕГУНКИ С РАЗМЕРАМИ =========
        $("#range_slider").slider({
            range: true,
            min: <?=$arResult['min_filter_value']?>,
            max: <?=$arResult['max_filter_value'] + 0.001?>,
            step: <?= $arResult['step']?>,
            values: [<?=$arResult['min_filter_value']?>, <?=$arResult['max_filter_value']?>],
            change: function (event, ui) {
                $('#range_slider-value-0').html(ui.values[0]);
                $('#range_slider-value-1').html(ui.values[1]);
            }
        });
        // $("#range_slider").slider({
        //     range: true,
        //     min: 0.2,
        //     max: 0.91,
        //     step: 0.1,
        //     values: [0.2, 0.9],
        //     change: function (event, ui) {
        //         $('#range_slider-value-0').html(ui.values[0]);
        //         $('#range_slider-value-1').html(ui.values[1]);
        //     }
        // });
    });
</script>



<div class="product-slider-wrapper">
    <div class="product-slider-inner">
        <div class="product-slider_for">
            <div class="product-slider_for-item"
                 style="background-image: url(<?= $arResult['DETAIL_PICTURE']['SRC'] ?>);">
                <img style="

                                        bottom: 0px;
                                        left: 0px;
                                        display: block;
                                        width: 100%;
                                        height: 100%;"
                     src="/local/templates/phpdev/img/empty.png" alt="icon"
                     class="slider-popup-show-button">
            </div>
            <? if (!empty($arResult['PROPERTIES']['SLIDER_CATALOG_02']['VALUE'])): ?>
                <? foreach ($arResult['PROPERTIES']['SLIDER_CATALOG_02']['VALUE'] as $arSlidPhoto): ?>
                <div class="product-slider_for-item"
                     style="background-image: url(<?= CFile::GetPath($arSlidPhoto) ?>);">
                    <img style="

                                        bottom: 0px;
                                        left: 0px;
                                        display: block;
                                        width: 100%;
                                        height: 100%;"

                         src="/local/templates/phpdev/img/empty.png" alt="icon"
                         class="slider-popup-show-button">
                </div>
            <? endforeach; ?>
            <? else: ?>
                <style>
                    .product-slider_pop-item{
                        width:800px!important;
                    }
                </style>
                <script>
                    $('.slider-popup-show-button').click(function (){
                        $('.slick-track').css("width", "800px");
                    })
                </script>
            <? endif; ?>
        </div>
        <? if ($arResult['PROPERTIES']['SLIDER_CATALOG_02']): ?>
            <div class="product-slider_nav">
                <div class="product-slider_nav-item"
                     style="background-image: url(<?= $arResult['DETAIL_PICTURE']['SRC'] ?>)"></div>
                <? foreach ($arResult['PROPERTIES']['SLIDER_CATALOG_02']['VALUE'] as $arSlidPhoto): ?>
                    <div class="product-slider_nav-item"
                         style="background-image: url(<?= CFile::GetPath($arSlidPhoto) ?>)"></div>
                <? endforeach; ?>
            </div>
        <? endif; ?>
    </div>
</div>
<div class="production">
    <div class="wrapper">
        <h2 class="block_title adaptive-hidden">Продукция</h2>
        <div class="product_body">
            <a href="/catalog/?page=18" class="product_item">
                <div class="img">
                    <img src="/local/templates/phpdev/img/opora_1.png" alt="">
                    <img src="/local/templates/phpdev/img/opora_320_1.png" alt="" class="img_320">
                </div>
                <div class="text">
                    <div class="title">Опоры</div>
                    <div class="desc">Можете на них положиться</div>
                    <!-- <div class="know_more">Смотреть опоры</div> -->
                </div>
            </a>
            <a href="/catalog/?page=84" class="product_item _white">
                <div class="img">
                    <img src="/local/templates/phpdev/img/opora_2.png" alt="">
                    <img src="/local/templates/phpdev/img/opora_320_2.png" alt="" class="img_320">
                </div>
                <div class="text">
                    <div class="title">Кронштейны</div>
                    <div class="desc">Надёжная поддержка</div>
                    <!-- <div class="know_more">Смотреть кронштейны</div> -->
                </div>
            </a>
            <!--                <a href="#" class="product_item _wide _white">-->
            <!--                    <div class="img">-->
            <!--                        <img src="/local/templates/phpdev/img/opora_3.png" alt="">-->
            <!--                    </div>-->
            <!--                    <div class="text">-->
            <!--                        <div class="title">Декоративные опоры премиум-класса</div>-->
            <!--                        <div class="desc">BL-S – business light style</div>-->
            <!--                        <div class="know_more">Смотреть</div>-->
            <!--                    </div>-->
            <!--                </a>-->
            <a href="/catalog/?page=178" class="product_item">
                <div class="img">
                    <img src="/local/templates/phpdev/img/opora_4.png" alt="">
                    <img src="/local/templates/phpdev/img/opora_320_4.png" alt="" class="img_320">
                </div>
                <div class="text">
                    <div class="title">Декоративные опоры</div>
                    <div class="desc">Сделаем их особенными</div>
                    <!-- <div class="know_more">Смотреть</div> -->
                </div>
            </a>
            <a href="/catalog/?page=148" class="product_item _white">
                <div class="img">
                    <img src="/local/templates/phpdev/img/opora_5.png" alt="">
                    <img src="/local/templates/phpdev/img/opora_320_5.png" alt="" class="img_320">
                </div>
                <div class="text">
                    <div class="title">Мачты</div>
                    <div class="desc">Решают серьёзные вопросы</div>
                    <!-- <div class="know_more">Смотреть мачты</div> -->
                </div>
            </a>
            <a href="/catalog/?page=168" class="product_item _white">
                <div class="img">
                    <img src="/local/templates/phpdev/img/opora_6.png" alt="">
                    <img src="/local/templates/phpdev/img/opora_320_6.png" alt="" class="img_320">
                </div>
                <div class="text">
                    <div class="title">Прочие металоконструкции</div>
                    <div class="desc">На страже безопасности</div>
                    <!-- <div class="know_more">Напишите нам</div> -->
                </div>
            </a>
            <a href="/catalog/?page=232" class="product_item">
                <div class="img">
                    <img src="/local/templates/phpdev/img/opora_7.png" alt="">
                    <img src="/local/templates/phpdev/img/opora_320_7.png" alt="" class="img_320">
                </div>
                <div class="text">
                    <div class="title">Закладные детали фундамента</div>
                    <div class="desc">Точно прочно</div>
                    <!-- <div class="know_more">Смотреть фундамент</div> -->
                </div>
            </a>
            <a href="/about/" class="product_item _white">
                <div class="img">
                    <img src="/local/templates/phpdev/img/opora_8.png" alt="">
                    <img src="/local/templates/phpdev/img/opora_320_8.png" alt="" class="img_320">
                </div>
                <div class="text">
                    <div class="title">Производство</div>
                    <div class="desc">Стабильно качественно</div>
                    <!-- <div class="know_more">Узнать подробнее</div> -->
                </div>
            </a>
            <a href="/portfolio/" class="product_item _white">
                <div class="img">
                    <img src="/local/templates/phpdev/img/opora_9.png" alt="">
                    <img src="/local/templates/phpdev/img/opora_320_9.png" alt="" class="img_320">
                </div>
                <div class="text">
                    <div class="title">Наши работы</div>
                    <div class="desc">Не словом, а делом</div>
                    <!-- <div class="know_more">Смотреть портфолио</div> -->
                </div>
            </a>
        </div>
    </div>
</div>



.slick-list{height:200px}
.slick-slide
{
width: 200px
}




<section class="instagram">
    <div class="container">
        <div class="inst__items">

            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "instagram_items",
                array(
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "N",
                    "DISPLAY_PICTURE" => "N",
                    "DISPLAY_PREVIEW_TEXT" => "N",
                    "AJAX_MODE" => "Y",
                    "IBLOCK_TYPE" => "",
                    "IBLOCK_ID" => "24",
                    "NEWS_COUNT" => '8',
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(
                        0 => "ID",
                        1 => "NAME",
                        2 => 'PROPERTY_LINK',
                        3 => 'PREVIEW_PICTURE'
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "LINK",
                        1 => "DESCRIPTION",
                        2 => "",
                    ),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "N",
                    "SET_BROWSER_TITLE" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "0",
                    "CACHE_FILTER" => "Y",
                    "CACHE_GROUPS" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => "show_more",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "SET_STATUS_404" => "N",
                    "SHOW_404" => "N",
                    "MESSAGE_404" => "",
                    "PAGER_BASE_LINK" => "",
                    "PAGER_PARAMS_NAME" => '',
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "COMPONENT_TEMPLATE" => "instagram_items"
                ),
                false
            );
            ?>
        </div>
    </div>
    </div>
</section>
<style>
    .col-md-3 {
        margin-bottom: 25%
    }

    .inst__items .row {
        margin-bottom: 0
    }

    .instagram {
        margin-bottom: 0px
    }

    @media only screen and (max-width: 991px) {
        .col-md-3 {
            margin-bottom: 3%;
        }
    }
</style>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>






реврайт битрикс сайт <IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /
    DirectoryIndex index.php
    RewriteRule ^index.php$ - [L]
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule . /index.php [L]
</IfModule>

payment__wrap














