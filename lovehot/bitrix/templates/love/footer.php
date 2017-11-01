<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
				</div><!-- .content-->
		</div><!-- .container-->

		<div class="sideLeft" role="complementary">
		
			<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "left_menu", Array(
				"IBLOCK_TYPE" => "catalog",	// Тип инфо-блока
				"IBLOCK_ID" => 3,	// Инфо-блок $arIblockIndex['ID']
				"SECTION_ID" => "",	// ID раздела
				"SECTION_CODE" => "",	// Код раздела
				"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
				"COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
				"TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
				"SECTION_FIELDS" => "",	// Поля разделов
				"SECTION_USER_FIELDS" => "",	// Свойства разделов
				"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
				"CACHE_TYPE" => "A",	// Тип кеширования
				"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
				"CACHE_GROUPS" => "Y",	// Учитывать права доступа
				),
				false
			);?>
				
            <?$APPLICATION->IncludeComponent("bitrix:news.list", "left_menu", Array(
				"IBLOCK_TYPE" => "catalog",	// Тип информационного блока (используется только для проверки)
				"IBLOCK_ID" => "4",	// Код информационного блока
				"NEWS_COUNT" => "40",	// Количество новостей на странице
				"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
				"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
				"SORT_BY2" => "",	// Поле для второй сортировки новостей
				"SORT_ORDER2" => "",	// Направление для второй сортировки новостей
				"FILTER_NAME" => "",	// Фильтр
				"FIELD_CODE" => array(	// Поля
					0 => "",
					1 => "",
				),
				"PROPERTY_CODE" => array(	// Свойства
					0 => "",
					1 => "",
				),
				"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
				"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
				"AJAX_MODE" => "N",	// Включить режим AJAX
				"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
				"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
				"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
				"CACHE_TYPE" => "N",	// Тип кеширования
				"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
				"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
				"CACHE_GROUPS" => "Y",	// Учитывать права доступа
				"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
				"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
				"SET_TITLE" => "N",	// Устанавливать заголовок страницы
				"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
				"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
				"PARENT_SECTION" => "",	// ID раздела
				"PARENT_SECTION_CODE" => "",	// Код раздела
				"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
				"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
				"PAGER_TITLE" => "Новости",	// Название категорий
				"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
				"PAGER_TEMPLATE" => "",	// Название шаблона
				"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
				"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
				"DISPLAY_DATE" => "Y",	// Выводить дату элемента
				"DISPLAY_NAME" => "Y",	// Выводить название элемента
				"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
				"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
				"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
				),
				false
			);?>

		</div><!-- .sideLeft -->

	</div><!-- .middle-->

	<div class="footer_wrap">
		<footer role="contentinfo">
        	<div class="f_logo"><a href="/">LoveHot.Ru Интим Магазин Москва</a></div>
            
            <aside class="f_contacts">
            	<p class="phone">
				<?
				$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/telephone_small.php"
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
            </aside>
			<aside class="f_contacts_link" style="left: 580px; position: absolute; top: 85px;">
				<p>
					<a href="/contacts.php" style="color:#81007C;outline: medium none; text-decoration: underline;">Контакты</a>
				</p>
			</aside>
            
            <div class="f_social_btn">
            	<p>Расскажите о нас <br />в социальных сетях:</p>
				<?
				$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/soc_zone.php"
					),
					false,
					array(
					"ACTIVE_COMPONENT" => "Y"
					)
				);
				?>
				
                <div class="btn_share">
					<!-- Put this div tag to the place, where the Like block will be -->
					<div id="vk_like" style="padding-left:30px;"></div>
					<script type="text/javascript">
					VK.Widgets.Like("vk_like", {type: "mini", verb: 1, height: 20});
					</script>
	                <div id="fb-root"></div>
	            	<script src="http://connect.facebook.net/ru_RU/all.js#xfbml=1"></script><fb:like href="" send="false" layout="button_count" width="100" show_faces="false" font="tahoma"></fb:like>
                </div>
				
            </div>
            
            <p class="f_text">
			<?
			$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => SITE_DIR."include/footer_text.php"
				),
				false,
				array(
				"ACTIVE_COMPONENT" => "Y"
				)
			);
			?>
			</p>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97865152-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
     (w[c] = w[c] || []).push(function() {
         try {
             w.yaCounter21498547 = new Ya.Metrika({id:21498547,
                     clickmap:true,
                     trackLinks:true,
                     accurateTrackBounce:true});
         } catch(e) { }
     });

     var n = d.getElementsByTagName("script")[0],
         s = d.createElement("script"),
         f = function () { n.parentNode.insertBefore(s, n); };
     s.type = "text/javascript";
     s.async = true;
     s.src = (d.location.protocol == "https:" ? "https:" : "http:") + 
"//mc.yandex.ru/metrika/watch.js";

     if (w.opera == "[object Opera]") {
         d.addEventListener("DOMContentLoaded", f, false);
     } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/21498547" 
style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->



		</footer><!-- footer -->
    </div>

</div><!-- .wrapper -->

</body>
</html>