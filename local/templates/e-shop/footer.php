<div class="news-letter">
        <div class="container">
            <div class="join">
                <h6>JOIN OUR MAILING LIST</h6>
                <div class="sub-left-right">
                    <form>
                        <input type="text" value="Enter Your Email Here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email Here';}" />
                        <input type="submit" value="SUBSCRIBE" />
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="footer_top">
                <div class="span_of_4">
                    <div class="col-md-3 span1_of_4">
                    <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"shop_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "shop",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "shop_menu"
	),
	false
);?>
                    </div>
                    <div class="col-md-3 span1_of_4">
                    <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"help_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "Help",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "help_menu"
	),
	false
);?>
                    </div>
                    <div class="col-md-3 span1_of_4">
                    <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"account_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "Help",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "account_menu"
	),
	false
);?>
                    </div>
                    <div class="col-md-3 span1_of_4">
                    <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"popular_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "Help",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "popular_menu"
	),
	false
);?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="cards text-center">
                <img src="<?=SITE_TEMPLATE_PATH ?>/images/cards.jpg" alt="" />
            </div>
            <div class="copyright text-center">
                <p>© 2015 Eshop. All Rights Reserved | Design by <a href="http://w3layouts.com">  W3layouts</a></p>
            </div>
        </div>
    </div>
</body>

</html>