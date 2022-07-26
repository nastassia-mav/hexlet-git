<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>


<!-- Modal1 -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >

    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Login</h4>
                <div class="login-form">
                    <form action="#" method="post">
                        <input type="email" name="email" placeholder="E-mail" required="">
                        <input type="password" name="password" placeholder="Password" required="">
                        <div class="tp">
                            <input type="submit" value="LOGIN NOW">
                        </div>
                        <div class="forgot-grid">
                            <div class="log-check">
                                <label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
                            </div>
                            <div class="forgot">
                                <a href="#" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Modal1 -->
<!-- Modal1 -->
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >

    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Register</h4>
                <div class="login-form">
                    <form action="#" method="post">
                        <input type="text" name="name" placeholder="Name" required="">
                        <input type="email" name="email" placeholder="E-mail" required="">
                        <input type="password" name="password" placeholder="Password" required="">
                        <input type="password" name="conform password" placeholder="Confirm Password" required="">
                        <div class="signin-rit">
													<span class="agree-checkbox">
														<label class="checkbox"><input type="checkbox" name="checkbox">I agree to your <a class="w3layouts-t" href="#" target="_blank">Terms of Use</a> and <a class="w3layouts-t" href="#" target="_blank">Privacy Policy</a></label>
													</span>
                        </div>
                        <div class="tp">
                            <input type="submit" value="REGISTER NOW">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Modal1 -->
<!--/content-inner-section-->
<div class="w3_content_agilleinfo_inner">
    <div class="agile_featured_movies">
        <!--/agileinfo_tabs-->
        <div class="agileinfo_tabs">
            <!--/tab-section-->
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li>Recent</li>
                    <li>Popularity</li>
                    <li>Top Rating </li>

                </ul>
                <div class="resp-tabs-container">
                    <div class="tab1">
                        <div class="tab_movies_agileinfo">
                            <div class="w3_agile_featured_movies">
                                <div class="col-md-5 video_agile_player">
                                    <div class="video-grid-single-page-agileits">
                                        <div data-video="f2Z65fobH2I" id="video"> <img src="<?= SITE_TEMPLATE_PATH ?>/images/11.jpg" alt="" class="img-responsive" /> </div>
                                    </div>



                                    <div class="player-text">
                                        <p class="fexi_header">Force 2</p>
                                        <p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>Presenting the official trailer of Force 2 starring John Abraham, Sonakshi Sinha and Tahir Raj Bhasin

                                            A film by Abhinay Deo, Produced by Vipul Amrutlal Shah, JA entertainment Pvt. Ltd....</p>
                                        <p class="fexi_header_para"><span>Release On<label>:</label></span>Sep 29, 2016 </p>
                                        <p class="fexi_header_para">
                                            <span>Genres<label>:</label> </span>
                                            <a href="genre.html">Drama</a> |
                                            <a href="genre.html">Adventure</a> |
                                            <a href="genre.html">Family</a>
                                        </p>
                                        <p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-7 wthree_agile-movies_list">
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:news.list",
                                        "top_movies",
                                        Array(
                                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                            "ADD_SECTIONS_CHAIN" => "Y",
                                            "AJAX_MODE" => "N",
                                            "AJAX_OPTION_ADDITIONAL" => "",
                                            "AJAX_OPTION_HISTORY" => "N",
                                            "AJAX_OPTION_JUMP" => "N",
                                            "AJAX_OPTION_STYLE" => "Y",
                                            "CACHE_FILTER" => "N",
                                            "CACHE_GROUPS" => "Y",
                                            "CACHE_TIME" => "0",
                                            "CACHE_TYPE" => "A",
                                            "CHECK_DATES" => "Y",
                                            "DETAIL_URL" => "",
                                            "DISPLAY_BOTTOM_PAGER" => "Y",
                                            "DISPLAY_DATE" => "Y",
                                            "DISPLAY_NAME" => "Y",
                                            "DISPLAY_PICTURE" => "Y",
                                            "DISPLAY_PREVIEW_TEXT" => "Y",
                                            "DISPLAY_TOP_PAGER" => "N",
                                            "FIELD_CODE" => array("ID", "NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_TEXT", "DETAIL_PICTURE", "", ""),
                                            "FILTER_NAME" => "",
                                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                            "IBLOCK_ID" => "1",
                                            "IBLOCK_TYPE" => "kontent",
                                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                            "INCLUDE_SUBSECTIONS" => "Y",
                                            "MESSAGE_404" => "",
                                            "NEWS_COUNT" => "8",
                                            "PAGER_BASE_LINK_ENABLE" => "N",
                                            "PAGER_DESC_NUMBERING" => "N",
                                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                            "PAGER_SHOW_ALL" => "N",
                                            "PAGER_SHOW_ALWAYS" => "N",
                                            "PAGER_TEMPLATE" => ".default",
                                            "PAGER_TITLE" => "Новости",
                                            "PARENT_SECTION" => "1",
                                            "PARENT_SECTION_CODE" => "",
                                            "PREVIEW_TRUNCATE_LEN" => "",
                                            "PROPERTY_CODE" => array("FILM_GENRE", "FILM_COUNTRY", "FILM_YEAR"),
                                            "SET_BROWSER_TITLE" => "Y",
                                            "SET_LAST_MODIFIED" => "N",
                                            "SET_META_DESCRIPTION" => "Y",
                                            "SET_META_KEYWORDS" => "Y",
                                            "SET_STATUS_404" => "N",
                                            "SET_TITLE" => "Y",
                                            "SHOW_404" => "N",
                                            "SORT_BY1" => "ACTIVE_FROM",
                                            "SORT_BY2" => "ID",
                                            "SORT_ORDER1" => "DESC",
                                            "SORT_ORDER2" => "DESC",
                                            "STRICT_SECTION_CHECK" => "Y"
                                        )
                                    );?>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="cleafix"></div>
                        </div>
                    </div>
                    <div class="tab2">
                        <div class="tab_movies_agileinfo">
                            <div class="w3_agile_featured_movies">
                                <div class="col-md-5 video_agile_player">
                                    <div class="video-grid-single-page-agileits">
                                        <div data-video="fNKUgX8PhMA" id="video1"> <img src="<?= SITE_TEMPLATE_PATH ?>/images/22.jpg" alt="" class="img-responsive" /> </div>
                                    </div>


                                    <div class="player-text">
                                        <p class="fexi_header">Me Before You </p>
                                        <p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>Me Before You Official Trailer #2 (2016) - Emilia Clarke, Sam Claflin Movie HD

                                            A girl in a small town forms an unlikely bond with a recently-paralyzed man she's taking care of....</p>
                                        <p class="fexi_header_para"><span>Release On<label>:</label></span>Feb 3, 2016 </p>
                                        <p class="fexi_header_para">
                                            <span>Genres<label>:</label> </span>
                                            <a href="genre.html">Drama</a> |
                                            <a href="genre.html">Adventure</a> |
                                            <a href="genre.html">Family</a>
                                        </p>
                                        <p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-7 wthree_agile-movies_list">
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:news.list",
                                        "top_movies",
                                        Array(
                                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                            "ADD_SECTIONS_CHAIN" => "Y",
                                            "AJAX_MODE" => "N",
                                            "AJAX_OPTION_ADDITIONAL" => "",
                                            "AJAX_OPTION_HISTORY" => "N",
                                            "AJAX_OPTION_JUMP" => "N",
                                            "AJAX_OPTION_STYLE" => "Y",
                                            "CACHE_FILTER" => "N",
                                            "CACHE_GROUPS" => "Y",
                                            "CACHE_TIME" => "0",
                                            "CACHE_TYPE" => "A",
                                            "CHECK_DATES" => "Y",
                                            "DETAIL_URL" => "",
                                            "DISPLAY_BOTTOM_PAGER" => "Y",
                                            "DISPLAY_DATE" => "Y",
                                            "DISPLAY_NAME" => "Y",
                                            "DISPLAY_PICTURE" => "Y",
                                            "DISPLAY_PREVIEW_TEXT" => "Y",
                                            "DISPLAY_TOP_PAGER" => "N",
                                            "FIELD_CODE" => array("ID", "NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_TEXT", "DETAIL_PICTURE", "", ""),
                                            "FILTER_NAME" => "",
                                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                            "IBLOCK_ID" => "1",
                                            "IBLOCK_TYPE" => "kontent",
                                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                            "INCLUDE_SUBSECTIONS" => "Y",
                                            "MESSAGE_404" => "",
                                            "NEWS_COUNT" => "8",
                                            "PAGER_BASE_LINK_ENABLE" => "N",
                                            "PAGER_DESC_NUMBERING" => "N",
                                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                            "PAGER_SHOW_ALL" => "N",
                                            "PAGER_SHOW_ALWAYS" => "N",
                                            "PAGER_TEMPLATE" => ".default",
                                            "PAGER_TITLE" => "Новости",
                                            "PARENT_SECTION" => "2",
                                            "PARENT_SECTION_CODE" => "",
                                            "PREVIEW_TRUNCATE_LEN" => "",
                                            "PROPERTY_CODE" => array("FILM_GENRE", "FILM_COUNTRY", "FILM_YEAR"),
                                            "SET_BROWSER_TITLE" => "Y",
                                            "SET_LAST_MODIFIED" => "N",
                                            "SET_META_DESCRIPTION" => "Y",
                                            "SET_META_KEYWORDS" => "Y",
                                            "SET_STATUS_404" => "N",
                                            "SET_TITLE" => "Y",
                                            "SHOW_404" => "N",
                                            "SORT_BY1" => "ACTIVE_FROM",
                                            "SORT_BY2" => "ID",
                                            "SORT_ORDER1" => "DESC",
                                            "SORT_ORDER2" => "DESC",
                                            "STRICT_SECTION_CHECK" => "Y"
                                        )
                                    );?>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="cleafix"></div>
                        </div>
                    </div>
                    <div class="tab3">
                        <div class="tab_movies_agileinfo">
                            <div class="w3_agile_featured_movies">
                                <div class="col-md-5 video_agile_player">
                                    <div class="video-grid-single-page-agileits">
                                        <div data-video="BXEZFd0RT5Y" id="video2"> <img src="<?= SITE_TEMPLATE_PATH ?>/images/44.jpg" alt="" class="img-responsive" /> </div>
                                    </div>

                                    <div class="player-text">
                                        <p class="fexi_header">Storks </p>
                                        <p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>Starring: Andy Samberg, Jennifer Aniston, Ty Burrell Storks Official Trailer 3 (2016) - Andy Samberg Movie the company's top delivery stork, lands in hot water when the Baby Factory produces an adorable....... </p>
                                        <p class="fexi_header_para"><span>Release On<label>:</label></span>Aug 1, 2016 </p>
                                        <p class="fexi_header_para">
                                            <span>Genres<label>:</label> </span>
                                            <a href="genre.html">Drama</a> |
                                            <a href="genre.html">Adventure</a> |
                                            <a href="genre.html">Family</a>
                                        </p>
                                        <p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-7 wthree_agile-movies_list">
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:news.list",
                                        "top_movies",
                                        Array(
                                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                            "ADD_SECTIONS_CHAIN" => "Y",
                                            "AJAX_MODE" => "N",
                                            "AJAX_OPTION_ADDITIONAL" => "",
                                            "AJAX_OPTION_HISTORY" => "N",
                                            "AJAX_OPTION_JUMP" => "N",
                                            "AJAX_OPTION_STYLE" => "Y",
                                            "CACHE_FILTER" => "N",
                                            "CACHE_GROUPS" => "Y",
                                            "CACHE_TIME" => "0",
                                            "CACHE_TYPE" => "A",
                                            "CHECK_DATES" => "Y",
                                            "DETAIL_URL" => "",
                                            "DISPLAY_BOTTOM_PAGER" => "Y",
                                            "DISPLAY_DATE" => "Y",
                                            "DISPLAY_NAME" => "Y",
                                            "DISPLAY_PICTURE" => "Y",
                                            "DISPLAY_PREVIEW_TEXT" => "Y",
                                            "DISPLAY_TOP_PAGER" => "N",
                                            "FIELD_CODE" => array("ID", "NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_TEXT", "DETAIL_PICTURE", "", ""),
                                            "FILTER_NAME" => "",
                                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                            "IBLOCK_ID" => "1",
                                            "IBLOCK_TYPE" => "kontent",
                                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                            "INCLUDE_SUBSECTIONS" => "Y",
                                            "MESSAGE_404" => "",
                                            "NEWS_COUNT" => "8",
                                            "PAGER_BASE_LINK_ENABLE" => "N",
                                            "PAGER_DESC_NUMBERING" => "N",
                                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                            "PAGER_SHOW_ALL" => "N",
                                            "PAGER_SHOW_ALWAYS" => "N",
                                            "PAGER_TEMPLATE" => ".default",
                                            "PAGER_TITLE" => "Новости",
                                            "PARENT_SECTION" => "3",
                                            "PARENT_SECTION_CODE" => "",
                                            "PREVIEW_TRUNCATE_LEN" => "",
                                            "PROPERTY_CODE" => array("FILM_GENRE", "FILM_COUNTRY", "FILM_YEAR"),
                                            "SET_BROWSER_TITLE" => "Y",
                                            "SET_LAST_MODIFIED" => "N",
                                            "SET_META_DESCRIPTION" => "Y",
                                            "SET_META_KEYWORDS" => "Y",
                                            "SET_STATUS_404" => "N",
                                            "SET_TITLE" => "Y",
                                            "SHOW_404" => "N",
                                            "SORT_BY1" => "ACTIVE_FROM",
                                            "SORT_BY2" => "ID",
                                            "SORT_ORDER1" => "DESC",
                                            "SORT_ORDER2" => "DESC",
                                            "STRICT_SECTION_CHECK" => "Y"
                                        )
                                    );?>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="cleafix"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--//tab-section-->
        <h3 class="agile_w3_title"> Latest <span>Movies</span></h3>
        <!--/movies-->
        <div class="w3_agile_latest_movies">

            <div id="owl-demo" class="owl-carousel owl-theme">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "latest_movies",
                    Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "0",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array("ID", "NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_TEXT", "DETAIL_PICTURE", "", ""),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "1",
                        "IBLOCK_TYPE" => "kontent",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "10",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "4",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array("FILM_GENRE", "FILM_COUNTRY", "FILM_YEAR"),
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "Y",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_BY2" => "ID",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "DESC",
                        "STRICT_SECTION_CHECK" => "Y"
                    )
                );?>
            </div>
        </div>
        <!--//movies-->
        <h3 class="agile_w3_title">Requested <span>Movies</span> </h3>
        <!--/requested-movies-->
        <div class="wthree_agile-requested-movies">
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "requested_movies",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "0",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("ID", "NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_TEXT", "DETAIL_PICTURE", "", ""),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "1",
                    "IBLOCK_TYPE" => "kontent",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "10",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "5",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("FILM_GENRE", "FILM_COUNTRY", "FILM_YEAR"),
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "Y",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "ID",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "DESC",
                    "STRICT_SECTION_CHECK" => "Y"
                )
            );?>
            <div class="clearfix"></div>
        </div>
        <!--//requested-movies-->
        <!--/top-movies-->


        <h3 class="agile_w3_title">Top<span>Movies</span> </h3>
        <div class="top_movies">
            <div class="tab_movies_agileinfo">
                <div class="w3_agile_featured_movies two">

                    <div class="col-md-7 wthree_agile-movies_list second-top">
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "top_movies",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "0",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("ID", "NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_TEXT", "DETAIL_PICTURE", "", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "1",
                "IBLOCK_TYPE" => "kontent",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "8",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "6",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("FILM_GENRE", "FILM_COUNTRY", "FILM_YEAR"),
                "SET_BROWSER_TITLE" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "ID",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "DESC",
                "STRICT_SECTION_CHECK" => "Y"
            )
        );?><br>
                    </div>
                    <div class="col-md-5 video_agile_player second-top">
                        <div class="video-grid-single-page-agileits">
                            <div data-video="BXEZFd0RT5Y" id="video3"> <img src="<?= SITE_TEMPLATE_PATH ?>/images/44.jpg" alt="" class="img-responsive" /> </div>
                        </div>

                        <div class="player-text two">
                            <p class="fexi_header">Storks </p>
                            <p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>Starring: Andy Samberg, Jennifer Aniston, Ty Burrell
                                Storks Official Trailer 3 (2016) - Andy Samberg Movie  the company's top delivery stork, lands in hot water when the Baby Factory produces an adorable....... </p>
                            <p class="fexi_header_para"><span>Release On<label>:</label></span>Aug 1, 2016 </p>

                            <p class="fexi_header_para">
                                <span>Genres<label>:</label> </span>
                                <a href="genre.html">Drama</a> |
                                <a href="genre.html">Adventure</a> |
                                <a href="genre.html">Family</a>
                            </p>
                            <p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                            </p>
                        </div>

                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="cleafix"></div>
            </div>
        </div>


        <!--//top-movies-->
    </div>
</div>
<!--//content-inner-section-->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
