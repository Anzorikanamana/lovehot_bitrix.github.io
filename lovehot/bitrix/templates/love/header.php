<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
<? 
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone"); 
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android"); 
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS"); 
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry"); 
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod"); 
$mobile = strpos($_SERVER['HTTP_USER_AGENT'],"Mobile"); 
$symb = strpos($_SERVER['HTTP_USER_AGENT'],"Symbian"); 
$operam = strpos($_SERVER['HTTP_USER_AGENT'],"Opera M"); 
$htc = strpos($_SERVER['HTTP_USER_AGENT'],"HTC_"); 
$fennec = strpos($_SERVER['HTTP_USER_AGENT'],"Fennec/"); 
$winphone = strpos($_SERVER['HTTP_USER_AGENT'],"WindowsPhone"); 
$wp7 = strpos($_SERVER['HTTP_USER_AGENT'],"WP7"); 
$wp8 = strpos($_SERVER['HTTP_USER_AGENT'],"WP8"); 


$VISITOR_ID = $APPLICATION->get_cookie("MOBILE_VISITOR_MB"); 
if (($ipad || $iphone || $android || $palmpre || $ipod || $berry || $mobile || $symb || $operam || $htc || $fennec || $winphone || $wp7 || $wp8) && 
($_SERVER["SERVER_NAME"] == "lovehot.ru" || $_SERVER["SERVER_NAME"] == "www.lovehot.ru") && 
empty($VISITOR_ID)) { 
$APPLICATION->set_cookie("MOBILE_VISITOR_MB", "MOBILE", time()+60*60); 
LocalRedirect("http://lovehot.ru/?type=pda"); 
exit(); 
} 
?>
<title><?$APPLICATION->ShowTitle()?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/reset.css" />
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/common.css" />
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/slider.css" />
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/range_slider.css" />
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/cusel.css" />
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/jquery-ui-1.8.18.custom.css" />
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/jquery/jquery-1.7.1.min.js"></script>
<?$APPLICATION->ShowHead();?>
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/colors.css" />
<script src="<?=SITE_TEMPLATE_PATH?>/jquery/jquery.placeholder.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/jquery/jcarousellite.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/jquery/jquery.pikachoose.full.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/jquery/cusel-min-2.5.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/jquery/jquery.radio.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/jquery/jquery.ui-slider.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/jquery/jquery-ui-1.8.18.custom.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/jquery/jquery.ui.datepicker-ru.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/jquery/jquery.validate.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/jquery/messages_ru.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/jquery/scripts.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/script.js"></script>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 10]><script src="<?=SITE_TEMPLATE_PATH?>/jquery/PIE.js"></script><![endif]-->
<script type="text/javascript" src="http://userapi.com/js/api/openapi.js?47"></script>
<script type="text/javascript"> VK.init({apiId: 2816726, onlyWidgets: true}); </script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34615941-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body onselectstart="return false;" oncopy="return false;">
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div class="wrapper">
	<header role="banner">
		<?
		$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
			"AREA_FILE_SHOW" => "file",
			"PATH" => SITE_DIR."include/company_logo.php"
			),
			false,
			array(
			"ACTIVE_COMPONENT" => "Y"
			)
		);
		?>
		
		<?
		$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
			"AREA_FILE_SHOW" => "file",
			"PATH" => SITE_DIR."include/delivery.php"
			),
			false,
			array(
			"ACTIVE_COMPONENT" => "Y"
			)
		);
		?>
		
		<?
		$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
			"AREA_FILE_SHOW" => "file",
			"PATH" => SITE_DIR."include/delivery_free.php"
			),
			false,
			array(
			"ACTIVE_COMPONENT" => "Y"
			)
		);
		?>

        <div class="h_contacts">
        	<p class="phone">
				<?
				$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/telephone.php"
					),
					false,
					array(
					"ACTIVE_COMPONENT" => "Y"
					)
				);
				?>
			</p>
            <p class="e_mail">
				<?
				$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/email.php"
					),
					false,
					array(
					"ACTIVE_COMPONENT" => "Y"
					)
				);
				?>
			</p>
        </div>
        
        <div class="h_op">
			<?
			$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => SITE_DIR."include/user_links.php"
				),
				false,
				array(
				"ACTIVE_COMPONENT" => "Y"
				)
			);
			?>
            
            <div class="callback_popup">
				<?$APPLICATION->IncludeComponent(
					"love:main.feedback",
					"",
					Array(
						"USE_CAPTCHA" => "Y",
						"OK_TEXT" => "Спасибо, ваше сообщение принято.",
						"EMAIL_TO" => "info@lovehot.ru",
						"REQUIRED_FIELDS" => array(),
						"EVENT_MESSAGE_ID" => array(27)
					),
				false
				);?>
            </div>
            
            <div class="csbanner bn175">
            	<div><?$APPLICATION->IncludeComponent(
					"bitrix:advertising.banner",
					"",
					Array(
						"TYPE" => "bn175x70",
						"NOINDEX" => "Y",
						"CACHE_TYPE" => "A",
						"CACHE_TIME" => "0",
						"CACHE_NOTES" => ""
					),
					false
				);?></div>
            </div>
            
            <div class="csbanner bn410">
            	<div><?$APPLICATION->IncludeComponent(
					"bitrix:advertising.banner",
					"",
					Array(
						"TYPE" => "bn410x50",
						"NOINDEX" => "Y",
						"CACHE_TYPE" => "A",
						"CACHE_TIME" => "0",
						"CACHE_NOTES" => ""
					),
					false
				);?></div>
            </div>
        </div>
        
			<?$APPLICATION->IncludeComponent("bitrix:search.title", "store", array(
				"NUM_CATEGORIES" => "1",
				"TOP_COUNT" => "5",
				"CHECK_DATES" => "N",
				"SHOW_OTHERS" => "Y",
				"PAGE" => "#SITE_DIR#search/",
				"CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS") ,
				"CATEGORY_0" => array(
					0 => "iblock_catalog",
				),
				"CATEGORY_0_iblock_catalog" => array(
					0 => "all",
				),
				"CATEGORY_OTHERS_TITLE" => GetMessage("SEARCH_OTHER"),
				"SHOW_INPUT" => "Y",
				"INPUT_ID" => "title-search-input",
				"CONTAINER_ID" => "search"
				),
				false
			);?>
        
		<?
			$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", ".default", array(
				"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
				"PATH_TO_PERSONAL" => SITE_DIR."personal/order/make/",
				"SHOW_PERSONAL_LINK" => "N"
				),
				false,
				Array()
			);
		?>
        
        <noindex>
        <ul class="sign_in_block">
			<?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "store", array(
					"REGISTER_URL" => SITE_DIR."auth/register.php",
					"PROFILE_URL" => SITE_DIR."personal/",
					"SHOW_ERRORS" => "N"
				),
				false,
				Array()
			);?>
        </ul>
    	</noindex>
        
        <nav role="navigation">
			<?
				$APPLICATION->IncludeComponent('bitrix:menu', "vertical", array(
					"ROOT_MENU_TYPE" => "top",
					"MENU_CACHE_TYPE" => "Y",
					"MENU_CACHE_TIME" => "36000000",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => array(),
					"MAX_LEVEL" => "1",
					"USE_EXT" => "N",
					"ALLOW_MULTI_SELECT" => "N"
					)
				);
			?>
            <div class="glow_left"></div>
            <div class="glow_right"></div>
            <div class="glow_top"></div>
        </nav>
        <div class="pop"></div>



	</header><!-- header-->

	<div class="middle clearfix">

		<div class="container">
			<div class="content" role="main">
				<!--<h2><?$APPLICATION->ShowTitle(false);?><?$APPLICATION->ShowProperty("ADDITIONAL_TITLE", "");?></h2>-->