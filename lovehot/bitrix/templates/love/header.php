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
		<!--MENU-->
		<article class="mobile_mnu">
			<a class="toggle_mnu" href="#"><span></span></a>
			<div class="mobile_menu_container">
				<ul class="top_mnu">
					<li class="sub_mnu">
						<a href="#" class="menu_part_name">������� ����</a>
						<section class="l_menu hide_menu main_menu">
							<ul>
								<li class="active"><a href="/">�������</a></li>
								<li><a href="/catalogbrand/">������</a></li>
								<li><a href="/action/">�����</a></li>
								<li><a href="/about/discount.html">������</a></li>
								<li><a href="/masturbatory-vaginy/">��� ����</a></li>
								<li><a href="/vibratory/">��� ���</a></li>
								<li><a href="/vibrator-dlya-dvoikh/">��� �����</a></li>
								<li><a href="/about/delivery/">�������� � ������</a></li>
								<li><a href="/about/faq/">����� �����</a></li>
							</ul>            
						</section>
					</li>
					<li class="sub_mnu">
						<a href="#" class="menu_part_name">������� �������</a>
						<section class="hide_menu">
							<li class="sub_mnu">
								<section class="l_menu">
									<header>		<a href="/sex-igrushki/" class="menu_part_name_sub">���� �������</a></header>
									<ul class="hide_menu_sub">
										<li>
											<a href="/sex-igrushki/">���� �������</a>		
										</li>
										<li class="active">
											<a  href="#" class="mnu_catagory_btn">���������</a>			
											<div class="level_two">
												<a href="/vibratory/" class="ctg_name">���������</a>
												<ul style="height: 84px;">
													<li><a href="/vibratori-elitnye/">�������</a></li>
													<li><a href="/vibratory-malenkie/">���������</a></li>
													<li><a href="/bolshie-vibratory/">�������</a></li>
													<li><a href="/vibrator-dlya-dvoikh/">��� �����</a></li>
												</ul>
												<ul style="height: 84px;">
													<li><a href="/vibratory-realistiki/">����������</a></li>
													<li><a href="/vibratory-rozovye-krasnye/">������� � �������</a></li>
													<li><a href="/vibratory-gelevye/">�������</a></li>
													<li><a href="/vodonepronitsaemye-vibratory/">�����������������</a></li>
												</ul>
												<ul style="height: 84px;">
													<li><a href="/vibrator-s-rotatsiey/">� ��������</a></li>
													<li><a href="/vibratory-hi-tech/">Hi-Tech</a></li>
													<li><a href="/vibrator-s-distantsionnym-upravleniem/">� ������������� �����������</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">����������� �������</a>			
											<div class="level_two">
												<a href="/stimulyatory-klitora/" class="ctg_name">����������� �������</a>
												<ul>
													<li><a href="/klitoralniy-vibrator/">� ���������</a></li>
													<li><a href="/bez-kontaktnie/">��� ����������</a></li>
												</ul>
												<ul>
													<li><a href="/stimulyatory-babochka/">�������</a></li>
													<li><a href="/bez-vibratsii/">��� ��������</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="/stimulyatory-tochki-g/">����������� ����� G</a>			
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">��������</a>	
											<div class="level_two">
												<a href="/strapony/" class="ctg_name">��������</a>	
												<ul>
													<li><a href="/harness-strapon/">Harness</a></li>
													<li><a href="/bezremnevoy-strapon/">�����������</a></li>
													<li><a href="/bolshoy-strapon/">�������</a></li>
												</ul>
												<ul>
													<li><a href="/dvoynoy-strapon/">�������</a></li>
													<li><a href="/strapon-s-vibratsiey/">C ���������</a></li>
													<li><a href="/chernyy-strapon/">������</a></li>
												</ul>
												<ul>
													<li><a href="/rozoviy-strapon/">�������</a></li>
													<li><a href="/strapon-share/">Share</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">��������������</a>			
											<div class="level_two">
												<a href="/falloimitatory/" class="ctg_name">��������������</a>
												<ul>
													<li><a href="/bolshie-falloimitatory/">�������</a></li>
													<li><a href="/falloimitator-dvoynoy/">�������</a></li>
													<li><a href="/vibrator-falloimitator/">� ���������</a></li>
												</ul>
												<ul>
													<li><a href="/falloimitator-realistik/">����������</a></li>
													<li><a href="/falloimitator-gelevyy/">�������</a></li>
													<li><a href="/falloimitator-steklo/">����������</a></li>
												</ul>
												<ul>
													<li><a href="/fallomitatory-na-prisoske/">�� ��������</a></li>
													<li><a href="/falloimitatory-konchayushchie/">���������</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">������������ � ������</a>			
											<div class="level_two">
												<a href="/masturbatory-vaginy/" class="ctg_name">������������ � ������</a>
												<ul>
													<li><a href="/vaginy-masturbatory/">������</a></li>
													<li><a href="/masturbatory-rotiki/">������</a></li>
												</ul>
												<ul>
													<li><a href="/masturbatory-popki/">�����</a></li>
													<li><a href="/masturbator-realistik/">����������</a></li>
												</ul>
												<ul>
													<li><a href="/masturbator-s-vibraciey/">� ���������</a></li>
													<li><a href="/masturbatory-yaponskie/">��������</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">��������� �����</a>			
											<div class="level_two">
												<a href="/vakuumnye-pompy/" class="ctg_name">��������� �����</a>
												<ul>
													<li><a href="/pompy-dlya-muzhchin/">��� ������</a></li>
												</ul>
												<ul>
													<li><a href="/pompy-dlya-zhenshchin/">��� ������</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">���������� ������</a>			
											<div class="level_two">
												<a href="/uvelichenie-penisa/" class="ctg_name">���������� ������</a>
												<ul>
													<li><a href="/ekstendery/">����������</a></li>
												</ul>
												<ul>
													<li><a href="/pompy-dlya-uvelicheniya/">����� ��� ����������</a></li>
												</ul>
												<ul>
													<li><a href="/binty-kremy-i-smazki/">�����, ����� � ������</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">������� � ������</a>			
											<div class="level_two">
												<a href="/nasadki-kolca/" class="ctg_name">������� � ������</a>
												<ul>
													<li><a href="/nasadki-harness/">������� Harness</a></li>
													<li><a href="/nasadki-na-penis/">������� �� �����</a></li>
												</ul>
												<ul>
													<li><a href="/koltsa/">������</a></li>
													<li><a href="/s-vibratsiey/">� ���������</a></li>
												</ul>
												<ul>
													<li><a href="/s-dopolnitelnoy-stimulyatsiey/">� �������������� �����������</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="/vaginalnye-shariki/">����������� ������</a>			
										</li>
										<li>
											<a href="/kiberkozha/">���������</a>			
										</li>
									</ul>
								</section>
							</li>
							<li class="sub_mnu">
								<section class="l_menu">
									<header>		<a href="/analnie-igrushki/" class="menu_part_name_sub">�������� �������</a></header>
									<ul class="hide_menu_sub">
										<li>
											<a href="/analnie-vibratory/">�������� ���������</a>			
										</li>
										<li>
											<a href="/massagery-prostaty/">��� ������� ��������</a>			
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">�������� ������</a>			
											<div class="level_two">
												<a href="/analnye-probki/" class="ctg_name">�������� ������</a>
												<ul>
													<li><a href="/bolshie-analnie-probki/">�������</a></li>
													<li><a href="/analnaya-probka-s-vibratsiey/">� ���������</a></li>
												</ul>
												<ul>
													<li><a href="/butt-plug/">Lovetoy</a></li>
													<li><a href="/probka-analnaya-steklyannaya/">����������</a></li>
												</ul>
												<ul>
													<li><a href="/analnaya-probka-s-khvostom/">� �������</a></li>
													<li><a href="/naduvnye-analnie-probki/">��������</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="/analnye-ukrasheniya/">�������� ���������</a>			
										</li>
										<li>
											<a href="/shariki-i-busy/">������ � ����</a>			
										</li>
										<li>
											<a href="/analnie-bez-vibratsii/">��� ��������</a>			
										</li>
									</ul>
								</section>
							</li>
							<li class="sub_mnu">
								<section class="l_menu">
									<header>		<a href="#" class="menu_part_name_sub">���� �����</a></header>
									<ul class="hide_menu_sub">
										<li>
											<a href="/sex-kukli/">���� �����</a>			
										</li>
										<li>
											<a href="/sex-kukly-dlya-mujchin/">��� ������</a>			
										</li>
										<li>
											<a href="/sex-kukly-dlya-jenshin/">��� ������</a>			
										</li>
									</ul>
								</section>
							</li>
							<li class="sub_mnu">
								<section class="l_menu">
									<header>		<a href="#" class="menu_part_name_sub">���� � �����</a></header>
									<ul class="hide_menu_sub">
										<li>
											<a href="/BDSM-i-fetish/">���� � �����</a>			
										</li>
										<li>
											<a href="/maski-shlemy/">����� � �����</a>			
										</li>
										<li>
											<a href="/klyapy/">�����</a>			
										</li>
										<li>
											<a href="/osheyniki-povodki/">�������� � �������</a>			
										</li>
										<li>
											<a href="/naruchniki-fiksatsiya/">��������� � ��������</a>			
										</li>
										<li>
											<a href="/pleti-shlepalki-knuty/">�����, �������� � �����</a>			
										</li>
										<li>
											<a href="/seks-mashiny/">���� ������</a>			
										</li>
										<li>
											<a href="/electrostimulyatory/">�����������������</a>			
										</li>
									</ul>
								</section>
							</li>
							<li class="sub_mnu">
								<section class="l_menu">
									<header>		<a href="#" class="menu_part_name_sub">����������� �����</a></header>
									<ul class="hide_menu_sub">
										<li>
											<a href="/eroticheskoe-belye/">����������� �����</a>			
										</li>
										<li>
											<a href="/platya-sorochki/">������, �������, ����</a>			
										</li>
										<li>
											<a href="/kombinezony-ketsyuety/">�����������/���������</a>			
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">������� �������</a>			
											<div class="level_two">
												<a href="/igrovye-kostyumy/" class="ctg_name">������� �������</a>
												<ul>
													<li><a href="/gornichnye/">���������</a></li>
													<li><a href="/shkolnitsy/">���������</a></li>
													<li><a href="/medsestrichki/">������������</a></li>
													<li><a href="/politsiya/">�������</a></li>
													<li><a href="/voennye/">��������</a></li>
													<li><a href="/banditki/">��������</a></li>
												</ul>
												<ul>
													<li><a href="/moryachki/">�������</a></li>
													<li><a href="/piratki/">�������</a></li>
													<li><a href="/printsessy/">���������</a></li>
													<li><a href="/angelochki/">���������</a></li>
													<li><a href="/dyavolitsy/">���������</a></li>
													<li><a href="/vedmochki/">���������</a></li>
												</ul>
												<ul>
													<li><a href="/khellouin/">��������</a></li>
													<li><a href="/skazochnye/">���������</a></li>
													<li><a href="/zveryushki/">��������</a></li>
													<li><a href="/novogodnie/">����������</a></li>
													<li><a href="/muzhskie/">�������</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">����� � ��������</a>			
											<div class="level_two">
												<a href="/chulki-kolgotki/" class="ctg_name">����� � ��������</a>
												<ul>
													<li><a href="/chulochki/">�����/������/�������</a></li>
												</ul>
												<ul>
													<li><a href="/kapri/">�����/��������/�����</a></li>
												</ul>
												<ul>
													<li><a href="/kolgoty-kupit/">��������</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">������ �����</a>			
											<div class="level_two">
												<a href="/nijnee-bele/" class="ctg_name">������ �����</a>
												<ul>
													<li><a href="/byustgaltery/">������������ � ����</a></li>
												</ul>
												<ul>
													<li><a href="/trusiki/">������� � �����</a></li>
												</ul>
												<ul>
													<li><a href="/nabory/">������</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="/latex/">������ � �����</a>			
										</li>
										<li>
											<a href="/korsety/">������� � ����</a>			
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">����������</a>			
											<div class="level_two">
												<a href="/aksessuary/" class="ctg_name">����������</a>
												<ul>
													<li><a href="/melochi/">��� ��� ��������</a></li>
													<li><a href="/lentochki/">��������</a></li>
													<li><a href="/povyazk-na-glaza/">�����</a></li>
												</ul>
												<ul>
													<li><a href="/pariki/">������</a></li>
													<li><a href="/perchatki/">��������</a></li>
													<li><a href="/peryshki/">�������</a></li>
												</ul>
												<ul>
													<li><a href="/podvyazki/">��������</a></li>
												</ul>
											</div>
										</li>
									</ul>
								</section>
							</li>
							<li class="sub_mnu">
								<section class="l_menu">
									<header>		<a href="#" class="menu_part_name_sub">��� �����������</a></header>
									<ul class="hide_menu_sub">
										<li>
											<a href="/dlya-soblazneniya/">��� �����������</a>	
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">���� � ����������</a>			
											<div class="level_two">
												<a href="/duhi-s-feromonami/" class="ctg_name">���� � ����������</a>
												<ul>
													<li><a href="/muzhskie-duhi-s-feomonami/">�������</a></li>
												</ul>
												<ul>
													<li><a href="/zhenskie-duhi-s-pheromonami/">�������</a></li>
												</ul>
												<ul>
													<li><a href="/uniseks-duhi/">�������</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="/vozbuzhdayushchie-geli/">������������ ����</a>			
										</li>
										<li>
											<a href="/dlya-massazha/">��� �������</a>			
										</li>
									</ul>
								</section>
							</li>
							<li class="sub_mnu">
								<section class="l_menu">
									<header>		<a href="#" class="menu_part_name_sub">����������</a></header>
									<ul class="hide_menu_sub">
										<li>
											<a href="/lyubrikanty/">����������</a>			
										</li>
										<li>
											<a href="/vaginalnie/">�����������</a>			
										</li>
										<li>
											<a href="/analnye/">��������</a>			
										</li>
										<li>
											<a href="/analno-vaginalnye/">�������-�����������</a>			
										</li>
										<li>
											<a href="/oralnye/">��������</a>			
										</li>
										<li>
											<a href="/prolongiruyushchie/">��������������</a>			
										</li>
										<li>
											<a href="/vozbuzhdayushchie/">������������</a>			
										</li>
									</ul>
								</section>
							</li>
							<li class="sub_mnu">
								<section class="l_menu">
									<header>		<a href="#" class="menu_part_name_sub">������ ������</a></header>
									<ul class="hide_menu_sub">
										<li>
											<a href="/raznie-melochi/">������ ������</a>			
										</li>
										<li>
											<a href="/dlya-gigieny/">��� �������</a>			
										</li>
										<li>
											<a href="/prezervativy/">������������</a>			
										</li>
										<li>
											<a href="/batareyki/">���������</a>			
										</li>
										<li>
											<a href="/zaryadnye-ustroystva/">�������� ����������</a>			
										</li>
										<li>
											<a href="/kraski-dlya-tela/">������ ��� ����</a>			
										</li>
										<li>
											<a href="/dlya-igrushek/">������</a>			
										</li>
									</ul>
								</section>
							</li>
							<li class="sub_mnu">
								<section class="l_menu brands_menu">
									<header><a href="/catalogbrand/" class="menu_part_name_sub">��� ������</a></header>
									<ul class="hide_menu_sub">
										<li>
											<a href="/catalogbrand/">��� ������</a>
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">LELO</a>
											<div class="level_two">
												<a href="/brand/lelo" class="ctg_name">LELO</a>
												<ul>
													<li><a href="/lelo/vibratory/">���������</a></li>
													<li><a href="/lelo/lelo-kolca-muzhchin/">��� ������</a></li>
													<li><a href="/lelo/gold/">GOLD</a></li>
												</ul>
												<ul>
													<li><a href="/lelo/shariki/">������</a></li>
													<li><a href="/lelo/picobong/">PicoBong</a></li>
													<li><a href="/lelo/bez-vibracii/">�����������</a></li>
												</ul>
												<ul>
													<li><a href="/lelo/sprei-i-smazki/">����� � ������</a></li>
													<li><a href="/lelo/aksessuary/">����������</a></li>
													<li><a href="/lelo/massazhnye-svechi/">����� � �����</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">TENGA</a>
											<div class="level_two">
												<a href="/brand/tenga" class="ctg_name">TENGA</a>
												<ul>
													<li><a href="/tenga/flip-hole/">Flip Hole</a></li>
													<li><a href="/tenga/flip-air/">Flip Air</a></li>
													<li><a href="/tenga/odnorazovie/">����������� </a></li>
												</ul>
												<ul>
													<li><a href="/tenga/eggs/">EGGS</a></li>
													<li><a href="/tenga/tenga-3d/">TENGA 3D</a></li>
													<li><a href="/tenga/lyubrikanty/">����������</a></li>
												</ul>
												<ul>
													<li><a href="/tenga/nagrevatel/">�����������</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">We Vibe</a>
											<div class="level_two">
												<a href="/brand/we-vibe" class="ctg_name">We Vibe</a>
												<ul>
													<li><a href="/we-vibe/we-vibe-4/">We Vibe 4</a></li>
													<li><a href="/we-vibe/we-vibe-thirll/">We Vibe Thrill</a></li>
													<li><a href="/we-vibe/touch/">Touch</a></li>
													<li><a href="/we-vibe/salsa/">Salsa</a></li>
												</ul>
												<ul>
													<li><a href="/we-vibe/tango/">Tango</a></li>
													<li><a href="/we-vibe/we-vibe-sync/">We Vibe Sync</a></li>
													<li><a href="/we-vibe/we-vibe-rave/">We Vibe Rave</a></li>
													<li><a href="/we-vibe/we-vibe-nova-pink/">We Vibe Nova Pink</a></li>
												</ul>
												<ul>
													<li><a href="/we-vibe/we-vibe-se/">We Vibe SE</a></li>
													<li><a href="/we-vibe/we-vibe-classic/">We Vibe Classic</a></li>
													<li><a href="/we-vibe/we-vibe-unite/">We Vibe Unite</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">Fun Factory</a>
											<div class="level_two">
												<a href="/brand/fun-factory" class="ctg_name">Fun Factory</a>
												<ul>
													<li><a href="/fun-factory/strapony/">��������</a></li>
													<li><a href="/fun-factory/vibrator/">���������</a></li>
													<li><a href="/fun-factory/pulsatory/">����������</a></li>
													<li><a href="/fun-factory/analnye-igrushki/">�������� �������</a></li>
												</ul>
												<ul>
													<li><a href="/fun-factory/falloimitatory/">��������������</a></li>
													<li><a href="/fun-factory/masturbator/">�����������</a></li>
													<li><a href="/fun-factory/smartballs/">Smartballs</a></li>
													<li><a href="/fun-factory/kolts%EE/">������</a></li>
												</ul>
												<ul>
													<li><a href="/fun-factory/zaryadnoe-ustroystvo/">�������� ����������</a></li>
													<li><a href="/fun-factory/massazhnaya-svecha/">��������� �����</a></li>
													<li><a href="/fun-factory/geli-i-smazki/">����, ������ � ������</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">ZINI</a>
											<div class="level_two">
												<a href="/brand/zini" class="ctg_name">ZINI</a>
												<ul>
													<li><a href="/zini/vibrostimulyatory/">���������</a></li>
												</ul>
												<ul>
													<li><a href="/zini/igrushki-analnie/">�������� �������</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">Fleshlight</a>
											<div class="level_two">
												<a href="/brand/fleshlight" class="ctg_name">Fleshlight</a>
												<ul>
													<li><a href="/fleshlight/vibro-pink-lady-touch/">Vibro </a></li>
													<li><a href="/fleshlight/pink-lady/">������</a></li>
													<li><a href="/fleshlight/mouth/">������</a></li>
													<li><a href="/fleshlight/butt/">�����</a></li>
												</ul>
												<ul>
													<li><a href="/fleshlight/stamina-training-unit/">STU</a></li>
													<li><a href="/fleshlight/girls/">Girls</a></li>
													<li><a href="/fleshlight/pirates-edition/">Pirates Edition</a></li>
													<li><a href="/fleshlight/blade/">BLADE</a></li>
												</ul>
												<ul>
													<li><a href="/fleshlight/alien/">Alien</a></li>
													<li><a href="/fleshlight/ice/">ICE</a></li>
													<li><a href="/fleshlight/flight/">Flight</a></li>
													<li><a href="/fleshlight/smazki-i-ukhod/">����������</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">Piperdream</a>
											<div class="level_two">
												<a href="/brand/piperdream" class="ctg_name">Piperdream</a>
												<ul>
													<li><a href="/piperdream/piperdream-extreme-toyz/">Piperdream Extreme Toyz</a></li>
												</ul>
												<ul>
													<li><a href="/piperdream/piperdream-pump-worx/">Piperdream Pump Worx</a></li>
												</ul>
												<ul>
													<li><a href="/piperdream/piperdream-year-of-the-rabbit/">Piperdream Year of the Rabbit</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">NEXUS</a>
											<div class="level_two">
												<a href="/brand/nexus" class="ctg_name">NEXUS</a>
												<ul>
													<li><a href="/nexus/ace/">ACE</a></li>
													<li><a href="/nexus/revo/">REVO</a></li>
													<li><a href="/nexus/g-play/">G-PLAY</a></li>
													<li><a href="/nexus/rider/">RIDER</a></li>
													<li><a href="/nexus/vibro/">VIBRO</a></li>
												</ul>
												<ul>
													<li><a href="/nexus/max-5/">MAX 5</a></li>
													<li><a href="/nexus/glide/">GLIDE</a></li>
													<li><a href="/nexus/titus/">TITUS</a></li>
													<li><a href="/nexus/excel/">EXCEL</a></li>
													<li><a href="/nexus/neo/">NEO</a></li>
												</ul>
												<ul>
													<li><a href="/nexus/silo/">SILO</a></li>
													<li><a href="/nexus/gyro/">GYRO</a></li>
													<li><a href="/nexus/stilo-toy/">STILO TOY</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">Topco Sales</a>
											<div class="level_two">
												<a href="/brand/topco-sales" class="ctg_name">Topco Sales</a>
												<ul>
													<li><a href="/topco-sales/vibrators/">���������</a></li>
													<li><a href="/topco-sales/anal-games/">�������� �������</a></li>
													<li><a href="/topco-sales/masturbators/">������������</a></li>
												</ul>
												<ul>
													<li><a href="/topco-sales/raznoe/">�������</a></li>
													<li><a href="/topco-sales/dildos/">��������������</a></li>
													<li><a href="/topco-sales/balls/">������</a></li>
												</ul>
												<ul>
													<li><a href="/topco-sales/kukolki/">�����</a></li>
													<li><a href="/topco-sales/dlya-bdsm/">��� BDSM</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" class="mnu_catagory_btn">��� ������...</a>
											<div class="level_two">
												<a href="/brand/kupit" class="ctg_name">��� ������...</a>
												<ul>
													<li><a href="/kupit/anal-jewelry/">Anal Jewelry</a></li>
													<li><a href="/kupit/baci-lingerie/">BACI Lingerie</a></li>
													<li><a href="/kupit/bathmate/">Bathmate</a></li>
													<li><a href="/kupit/bewicked/">BeWicked</a></li>
													<li><a href="/kupit/doc-johnson/">Doc-Johnson</a></li>
													<li><a href="/kupit/fun-toys/">Fun Toys</a></li>
													<li><a href="/kupit/hot/">HOT</a></li>
													<li><a href="/kupit/je-joue/">Je Joue</a></li>
												</ul>
												<ul>
													<li><a href="/kupit/leaf-by-swan/">LEAF by Swan</a></li>
													<li><a href="/kupit/leg-avenue-inc/">Leg Avenue Inc</a></li>
													<li><a href="/kupit/male-edge/">Male Edge</a></li>
													<li><a href="/kupit/mystim/">Mystim</a></li>
													<li><a href="/kupit/nanma-manufacturing-company-ltd/">Nanma Manufacturing Company Ltd</a></li>
													<li><a href="/kupit/ohmibod/">OhMiBod</a></li>
													<li><a href="/kupit/pjur/">Pjur</a></li>
													<li><a href="/kupit/sexy-life/">Sexy Life</a></li>
												</ul>
												<ul>
													<li><a href="/kupit/soloflesh/">SOLOFLESH</a></li>
													<li><a href="/kupit/spider/">Spider</a></li>
													<li><a href="/kupit/swan/">Swan</a></li>
													<li><a href="/kupit/tonga/">Tonga</a></li>
													<li><a href="/kupit/womanizer+-+%F1%F2%E8%EC%F3%EB%FF%F2%EE%F0%FB+%EA%EB%E8%F2%EE%F0%E0/">Womanizer</a></li>
													<li><a href="/kupit/toy-joy/">Toy Joy</a></li>
													<li><a href="/kupit/vibe-therapy/">Vibe Therapy</a></li>
												</ul>
											</div>
										</li>
									</ul>
								</section>
							</li>
						</section>
					</li>	
				</ul>
			</div>
			<div class="modal_overlay"></div>
		</article>
		<!-- MENU END -->
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
						"OK_TEXT" => "�������, ���� ��������� �������.",
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