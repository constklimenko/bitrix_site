<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>


<head>
  <?$APPLICATION->ShowHead();?>
  <title>
    <?$APPLICATION->ShowTitle()?>
  </title>
  
  <? use Bitrix\Main\Page\Asset;?>
  
  <? Asset::getInstance() -> AddCss( SITE_TEMPLATE_PATH . "/css/bootstrap.css");




Asset::getInstance() -> AddCss( SITE_TEMPLATE_PATH . "/css/style.css");
Asset::getInstance() -> AddCss( SITE_TEMPLATE_PATH . "/css/flexslider.css");


Asset::getInstance() -> AddJs( SITE_TEMPLATE_PATH . "js/bootstrap-3.1.1.min.js");

Asset::getInstance() -> AddJs( SITE_TEMPLATE_PATH . "js/simpleCart.min.js");
Asset::getInstance() -> AddJs( SITE_TEMPLATE_PATH . "js/responsiveslides.min.js");

Asset::getInstance() -> AddString('<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>');

CJSCore::Init(['jquery']);
?>

</head>
<body>
  
    <!--[if lt IE 7]>
    <p >You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
  
<?$APPLICATION->ShowPanel()?>

  <?if($USER->IsAdmin()):?>

  <div>
    <form action="/bitrix/admin/site_edit.php" method="GET">
      <input type="hidden" name="LID" value="<?= SITE_ID ?>" />
      <p>
        <span style="color:red">
          <?echo GetMessage("DEF_TEMPLATE_NF")?>
        </span>
      </p>
      <input type="submit" name="set_template" value="<?echo GetMessage(" DEF_TEMPLATE_NF_SET")?>" />
    </form>
  </div>

  <?endif?>
	 <!-- header-section-starts -->
   <div class="header">
        <div class="header-top-strip">
            <div class="container">
                <div class="header-top-left">
                    <ul>
                        <li><a href="account.html"><span class="glyphicon glyphicon-user"> </span>Login</a></li>
                        <li><a href="register.html"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>
                    </ul>
                </div>
                <div class="header-right">
                    <div class="cart box_1">
                        <a href="checkout.html">
                            <h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)<img src="images/bag.png" alt=""></h3>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- header-section-ends -->
    <div class="banner-top">
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
                    <div class="logo">
                        <h1><a href="index.html"><span>E</span> -Shop</a></h1>
                    </div>
                </div>
                <!--/.navbar-header-->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <h6>NEW IN</h6>
                                            <li><a href="products.html">New In Clothing</a></li>
                                            <li><a href="products.html">New In Bags</a></li>
                                            <li><a href="products.html">New In Shoes</a></li>
                                            <li><a href="products.html">New In Watches</a></li>
                                            <li><a href="products.html">New In Grooming</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <h6>CLOTHING</h6>
                                            <li><a href="products.html">Polos & Tees</a></li>
                                            <li><a href="products.html">Casual Shirts</a></li>
                                            <li><a href="products.html">Casual Trousers</a></li>
                                            <li><a href="products.html">Jeans</a></li>
                                            <li><a href="products.html">Shorts & 3/4th</a></li>
                                            <li><a href="products.html">Formal Shirts</a></li>
                                            <li><a href="products.html">Formal Trousers</a></li>
                                            <li><a href="products.html">Suits & Blazers</a></li>
                                            <li><a href="products.html">Track Wear</a></li>
                                            <li><a href="products.html">Inner Wear</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <h6>WATCHES</h6>
                                            <li><a href="products.html">Analog</a></li>
                                            <li><a href="products.html">Chronograph</a></li>
                                            <li><a href="products.html">Digital</a></li>
                                            <li><a href="products.html">Watch Cases</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">women <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <h6>NEW IN</h6>
                                            <li><a href="products.html">New In Clothing</a></li>
                                            <li><a href="products.html">New In Bags</a></li>
                                            <li><a href="products.html">New In Shoes</a></li>
                                            <li><a href="products.html">New In Watches</a></li>
                                            <li><a href="products.html">New In Beauty</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <h6>CLOTHING</h6>
                                            <li><a href="products.html">Polos & Tees</a></li>
                                            <li><a href="products.html">Casual Shirts</a></li>
                                            <li><a href="products.html">Casual Trousers</a></li>
                                            <li><a href="products.html">Jeans</a></li>
                                            <li><a href="products.html">Shorts & 3/4th</a></li>
                                            <li><a href="products.html">Formal Shirts</a></li>
                                            <li><a href="products.html">Formal Trousers</a></li>
                                            <li><a href="products.html">Suits & Blazers</a></li>
                                            <li><a href="products.html">Track Wear</a></li>
                                            <li><a href="products.html">Inner Wear</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <h6>WATCHES</h6>
                                            <li><a href="products.html">Analog</a></li>
                                            <li><a href="products.html">Chronograph</a></li>
                                            <li><a href="products.html">Digital</a></li>
                                            <li><a href="products.html">Watch Cases</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">kids <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-2">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="multi-column-dropdown">
                                            <h6>NEW IN</h6>
                                            <li><a href="products.html">New In Boys Clothing</a></li>
                                            <li><a href="products.html">New In Girls Clothing</a></li>
                                            <li><a href="products.html">New In Boys Shoes</a></li>
                                            <li><a href="products.html">New In Girls Shoes</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="multi-column-dropdown">
                                            <h6>ACCESSORIES</h6>
                                            <li><a href="products.html">Bags</a></li>
                                            <li><a href="products.html">Watches</a></li>
                                            <li><a href="products.html">Sun Glasses</a></li>
                                            <li><a href="products.html">Jewellery</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </li>
                        <li><a href="typography.html">TYPO</a></li>
                        <li><a href="contact.html">CONTACT</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
    </div>
    <div class="banner">
        <div class="container">
            <div class="banner-bottom">
                <div class="banner-bottom-left">
                    <h2>B<br>U<br>Y</h2>
                </div>
                <div class="banner-bottom-right">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider4">
                            <li>
                                <div class="banner-info">
                                    <h3>Smart But Casual</h3>
                                    <p>Start your shopping here...</p>
                                </div>
                            </li>
                            <li>
                                <div class="banner-info">
                                    <h3>Shop Online</h3>
                                    <p>Start your shopping here...</p>
                                </div>
                            </li>
                            <li>
                                <div class="banner-info">
                                    <h3>Pack your Bag</h3>
                                    <p>Start your shopping here...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--banner-->
                    
                    <script>
                        // You can also use "$(window).load(function() {"
                        $(function() {
                            // Slideshow 4
                            $("#slider4").responsiveSlides({
                                auto: true,
                                pager: true,
                                nav: false,
                                speed: 500,
                                namespace: "callbacks",
                                before: function() {
                                    $('.events').append("<li>before event fired.</li>");
                                },
                                after: function() {
                                    $('.events').append("<li>after event fired.</li>");
                                }
                            });

                        });
                    </script>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="shop">
                <a href="single.html">SHOP COLLECTION NOW</a>
            </div>
        </div>
    </div>