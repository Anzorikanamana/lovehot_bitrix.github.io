<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
				</div><!-- .content-->
		</div><!-- .container-->

		<div class="sideLeft" role="complementary">
		
			<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "left_menu", Array(
				"IBLOCK_TYPE" => "catalog",	// ��� ����-�����
				"IBLOCK_ID" => 3,	// ����-���� $arIblockIndex['ID']
				"SECTION_ID" => "",	// ID �������
				"SECTION_CODE" => "",	// ��� �������
				"SECTION_URL" => "",	// URL, ������� �� �������� � ���������� �������
				"COUNT_ELEMENTS" => "Y",	// ���������� ���������� ��������� � �������
				"TOP_DEPTH" => "2",	// ������������ ������������ ������� ��������
				"SECTION_FIELDS" => "",	// ���� ��������
				"SECTION_USER_FIELDS" => "",	// �������� ��������
				"ADD_SECTIONS_CHAIN" => "N",	// �������� ������ � ������� ���������
				"CACHE_TYPE" => "A",	// ��� �����������
				"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
				"CACHE_GROUPS" => "Y",	// ��������� ����� �������
				),
				false
			);?>
				
            <?$APPLICATION->IncludeComponent("bitrix:news.list", "left_menu", Array(
				"IBLOCK_TYPE" => "catalog",	// ��� ��������������� ����� (������������ ������ ��� ��������)
				"IBLOCK_ID" => "4",	// ��� ��������������� �����
				"NEWS_COUNT" => "40",	// ���������� �������� �� ��������
				"SORT_BY1" => "SORT",	// ���� ��� ������ ���������� ��������
				"SORT_ORDER1" => "ASC",	// ����������� ��� ������ ���������� ��������
				"SORT_BY2" => "",	// ���� ��� ������ ���������� ��������
				"SORT_ORDER2" => "",	// ����������� ��� ������ ���������� ��������
				"FILTER_NAME" => "",	// ������
				"FIELD_CODE" => array(	// ����
					0 => "",
					1 => "",
				),
				"PROPERTY_CODE" => array(	// ��������
					0 => "",
					1 => "",
				),
				"CHECK_DATES" => "Y",	// ���������� ������ �������� �� ������ ������ ��������
				"DETAIL_URL" => "",	// URL �������� ���������� ��������� (�� ��������� - �� �������� ���������)
				"AJAX_MODE" => "N",	// �������� ����� AJAX
				"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
				"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
				"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
				"CACHE_TYPE" => "N",	// ��� �����������
				"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
				"CACHE_FILTER" => "N",	// ���������� ��� ������������� �������
				"CACHE_GROUPS" => "Y",	// ��������� ����� �������
				"PREVIEW_TRUNCATE_LEN" => "",	// ������������ ����� ������ ��� ������ (������ ��� ���� �����)
				"ACTIVE_DATE_FORMAT" => "d.m.Y",	// ������ ������ ����
				"SET_TITLE" => "N",	// ������������� ��������� ��������
				"SET_STATUS_404" => "N",	// ������������� ������ 404, ���� �� ������� ������� ��� ������
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// �������� �������� � ������� ���������
				"ADD_SECTIONS_CHAIN" => "N",	// �������� ������ � ������� ���������
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// �������� ������, ���� ��� ���������� ��������
				"PARENT_SECTION" => "",	// ID �������
				"PARENT_SECTION_CODE" => "",	// ��� �������
				"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
				"DISPLAY_BOTTOM_PAGER" => "N",	// �������� ��� �������
				"PAGER_TITLE" => "�������",	// �������� ���������
				"PAGER_SHOW_ALWAYS" => "N",	// �������� ������
				"PAGER_TEMPLATE" => "",	// �������� �������
				"PAGER_DESC_NUMBERING" => "N",	// ������������ �������� ���������
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// ����� ����������� ������� ��� �������� ���������
				"PAGER_SHOW_ALL" => "N",	// ���������� ������ "���"
				"DISPLAY_DATE" => "Y",	// �������� ���� ��������
				"DISPLAY_NAME" => "Y",	// �������� �������� ��������
				"DISPLAY_PICTURE" => "Y",	// �������� ����������� ��� ������
				"DISPLAY_PREVIEW_TEXT" => "Y",	// �������� ����� ������
				"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
				),
				false
			);?>

		</div><!-- .sideLeft -->

	</div><!-- .middle-->

	<div class="footer_wrap">
		<footer role="contentinfo">
        	<div class="f_logo"><a href="/">LoveHot.Ru ����� ������� ������</a></div>
            
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
					<a href="/contacts.php" style="color:#81007C;outline: medium none; text-decoration: underline;">��������</a>
				</p>
			</aside>
            
            <div class="f_social_btn">
            	<p>���������� � ��� <br />� ���������� �����:</p>
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