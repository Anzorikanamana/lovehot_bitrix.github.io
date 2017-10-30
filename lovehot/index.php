<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
#$_SERVER["DOCUMENT_ROOT"] = (`pwd`);
$APPLICATION->SetPageProperty("description", "Интернет магазин онлайн СЕКС ШОП в Москве. БЕСПЛАТНАЯ доставка для взрослых интимных товаров в пределах МКАД. Доставка эротических игрушек НАЛОЖЕННЫМ платежом по всей России на Lovehot.ru");
$APPLICATION->SetPageProperty("title", "СЕКС ШОП онлайн интернет магазин для взрослых в Москве | интимные товары | эротические игрушки | сексшоп с доставкой на LoveHot.ru");
$APPLICATION->SetTitle("СЕКС ШОП онлайн интернет магазин для взрослых в Москве | интимные товары | эротические игрушки | сексшоп с доставкой на Lovehot.ru");
?> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"index_brand",
	Array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "4",
		"NEWS_COUNT" => "40",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "",
		"SORT_ORDER2" => "",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(),
		"PROPERTY_CODE" => array(),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_NOTES" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);?> <section class="product_list popular"> 
  <h2>Популярные</h2>
 
  <div class="carousele_box" id="carousel_1"> 

    <div class="c_carousele"> 		
		    <div class="btn next"></div>
    		<div class="btn prev"></div>
<?$APPLICATION->IncludeComponent(
	"love:store.catalog.random.index",
	"main",
	Array(
		"IBLOCK_TYPE_ID" => "catalog",
		"IBLOCK_ID" => array(0=>"3",),
		"RAND_COUNT" => "20",
		"PARENT_PROPERTY" => "SPECIALOFFER",
		"DETAIL_URL" => "",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "180",
		"CACHE_GROUPS" => "Y",
		"PARENT_SECTION" => "",
		"DISPLAY_IMG_WIDTH" => "110",
		"DISPLAY_IMG_HEIGHT" => "110",
		"SHARPEN" => "30"
	)
);?> 		</div>
   	</div>
 </section> 				 <section class="product_list popular"> 
  <h2>Новинки</h2>
 
  <div class="carousele_box" id="carousel_2"> 

   		 
    <div class="c_carousele"> 
	    <div class="btn next"></div>
   	 
    <div class="btn prev"></div>
		<?$APPLICATION->IncludeComponent(
	"love:store.catalog.random.index",
	"main_new",
	Array(
		"IBLOCK_TYPE_ID" => "catalog",
		"IBLOCK_ID" => array(0=>"3",),
		"RAND_COUNT" => "20",
		"PARENT_PROPERTY" => "NEWPRODUCT",
		"DETAIL_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "180",
		"CACHE_GROUPS" => "Y",
		"PARENT_SECTION" => "",
		"DISPLAY_IMG_WIDTH" => "110",
		"DISPLAY_IMG_HEIGHT" => "110",
		"SHARPEN" => "30"
	)
);?> 		</div>
   	</div>
 </section> <section class="product_list popular"> 
  <h2>Эксклюзив</h2>
 
  <div class="carousele_box" id="carousel_3"> 

   		 
    <div class="c_carousele"> 
	    <div class="btn next"></div>
   	 
    <div class="btn prev"></div>
		<?$APPLICATION->IncludeComponent(
	"love:store.catalog.random.index",
	"main_ex",
	Array(
		"IBLOCK_TYPE_ID" => "catalog",
		"IBLOCK_ID" => array(0=>"3",),
		"RAND_COUNT" => "20",
		"PARENT_PROPERTY" => "SALELEADER",
		"DETAIL_URL" => "",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "180",
		"CACHE_GROUPS" => "Y",
		"PARENT_SECTION" => "",
		"DISPLAY_IMG_WIDTH" => "110",
		"DISPLAY_IMG_HEIGHT" => "110",
		"SHARPEN" => "30"
	)
);?> 		</div>
   	</div>
 </section> <section class="product_list sexy"> 
  <h2>Be Sexy</h2>
 
  <div class="carousele_box" id="carousel_4"> 


    <div class="sexy_carousele"> 
	    <div class="btn next"></div>
   
    <div class="btn prev"></div>
<?$APPLICATION->IncludeComponent(
	"love:store.catalog.random.index", 
	"by_sexy", 
	array(
		"IBLOCK_TYPE_ID" => "catalog",
		"IBLOCK_ID" => array(
			0 => "3",
		),
		"RAND_COUNT" => "20",
		"PARENT_PROPERTY" => "BYSEXY",
		"DETAIL_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "180",
		"CACHE_GROUPS" => "Y",
		"PARENT_SECTION" => "",
		"DISPLAY_IMG_WIDTH" => "110",
		"DISPLAY_IMG_HEIGHT" => "110",
		"SHARPEN" => "30",
		"COMPONENT_TEMPLATE" => "by_sexy",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?> 	</div>
   </div>
 </section> <section class="news_block"> 	 
  <h2>НОВОСТИ</h2>
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"index_news",
	Array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "1",
		"NEWS_COUNT" => "2",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FILTER_PROPERTY_CODE" => "",
		"FIELD_CODE" => array(),
		"PROPERTY_CODE" => array(),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "j F Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N"
	)
);?> </section> 				 
<a name="reviews"></a>
    
<div> 
  <br />
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "maint1",
		"EDIT_TEMPLATE" => ""
	)
);?>  
  <div> 
    <div> <section class="comments"> 	 
        <h2>отзывы 
          <br />
         наших клиентов</h2>
       <a style="cursor:pointer;" class="add_comment" onclick="addCommentFeedback();" >добавить отзыв 
          <br />
         </a> 		 					
	
		<div id="add_feedback" style="display:none;">
						<?
						global $USER;
						if ($USER->IsAuthorized()){
						?>
						<?$APPLICATION->IncludeComponent("bitrix:iblock.element.add.form", "add_reviews", Array(
							"SEF_MODE" => "N",	// Включить поддержку ЧПУ
							"IBLOCK_TYPE" => "services",	// Тип инфо-блока
							"IBLOCK_ID" => "8",	// Инфо-блок
							"PROPERTY_CODES" => array(	// Свойства, выводимые на редактирование
								0 => "NAME",
								1 => "DATE_ACTIVE_FROM",
								2 => "PREVIEW_TEXT",
							),
							"PROPERTY_CODES_REQUIRED" => array(	// Свойства, обязательные для заполнения
								0 => "NAME",
								1 => "PREVIEW_TEXT",
							),
							"GROUPS" => array(	// Группы пользователей, имеющие право на добавление/редактирование
								0 => "1",
								1 => "7",
							),
							"STATUS_NEW" => "NEW",	// Деактивировать элемент
							"STATUS" => "INACTIVE",	// Редактирование возможно
							"LIST_URL" => "",	// Страница со списком своих элементов
							"ELEMENT_ASSOC" => "CREATED_BY",	// Привязка к пользователю
							"MAX_USER_ENTRIES" => "100000",	// Ограничить кол-во элементов для одного пользователя
							"MAX_LEVELS" => "100000",	// Ограничить кол-во рубрик, в которые можно добавлять элемент
							"LEVEL_LAST" => "Y",	// Разрешить добавление только на последний уровень рубрикатора
							"USE_CAPTCHA" => "N",	// Использовать CAPTCHA
							"USER_MESSAGE_EDIT" => "Спасибо, ваш отзыв успешно сохранен.",
								"USER_MESSAGE_ADD" => "Спасибо,ваш отзыв успешно сохранен.",	// Сообщение об успешном сохранении
							"DEFAULT_INPUT_SIZE" => "40",	// Размер полей ввода
							"RESIZE_IMAGES" => "N",	// Использовать настройки инфоблока для обработки изображений
							"MAX_FILE_SIZE" => "0",	// Максимальный размер загружаемых файлов, байт (0 - не ограничивать)
							"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",	// Использовать визуальный редактор для редактирования текста анонса
							"DETAIL_TEXT_USE_HTML_EDITOR" => "N",	// Использовать визуальный редактор для редактирования подробного текста
							"CUSTOM_TITLE_NAME" => "ФИО",	// * наименование *
							"CUSTOM_TITLE_TAGS" => "",	// * теги *
							"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",	// * дата начала *
							"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",	// * дата завершения *
							"CUSTOM_TITLE_IBLOCK_SECTION" => "",	// * раздел инфоблока *
							"CUSTOM_TITLE_PREVIEW_TEXT" => "Отзыв",	// * текст анонса *
							"CUSTOM_TITLE_PREVIEW_PICTURE" => "",	// * картинка анонса *
							"CUSTOM_TITLE_DETAIL_TEXT" => "",	// * подробный текст *
							"CUSTOM_TITLE_DETAIL_PICTURE" => "",	// * подробная картинка *
							),
							false
						);?>
						<?
						}
						else{
						?>
						<div class="form_left" style="margin-left: 90px; margin-top:20px; color:red;">Вам небходимо авторизоватся.</div>
						<?
						}
						?>
					</div>	
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"reviews",
	Array(
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "services",
		"IBLOCK_ID" => "8",
		"NEWS_COUNT" => "5",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(),
		"PROPERTY_CODE" => array(),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "j F Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000",
		"CACHE_NOTES" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);?> </section> <aside class="c_banner"> 					<?$APPLICATION->IncludeComponent(
	"bitrix:advertising.banner",
	"product",
	Array(
		"TYPE" => "other_small",
		"NOINDEX" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "0",
		"CACHE_NOTES" => ""
	)
);?></aside><aside class="c_banner"></aside><aside class="c_banner"></aside> 
      <div style="clear: both; font-size: medium; line-height: 1.4; "> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => ""
	)
);?> </div>
     
      <div class="order_popup"><a href="/personal/order/make/" class="btn_order" >оформить заказ</a> 	<a href="#" class="continue_link" ><span>Продолжить покупки</span></a> </div>
     </div>
   </div>
 </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>