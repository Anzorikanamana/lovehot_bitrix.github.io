<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<script language="javascript">
	function setSku() {
		pid = $('#sku_sel').val();
		if (pid) {
			upid = '#u' + pid;
			$('#catalog_add2cart_link').attr('href', $(upid).val());
		}
	}
</script>
<?
//trace($arResult);
//echo "<!-- ".print_r($arResult,1)." -->";
$PRICE_BASKET = 0;

$tek_id=$arResult[SECTION][ID]; // текущий ID раздела
$root_id=$arResult[PROPERTIES][SECTION_ROOT][VALUE]; // ID ROOT раздела

if ($root_id=='') $root_id=$tek_id;

if ($tek_id==$root_id) {


if($arResult["PROPERTIES"]["TITLE"]["VALUE"]){ // заголовок
	$APPLICATION->SetPageProperty("title", $arResult["PROPERTIES"]["TITLE"]["VALUE"]);
	#$APPLICATION->SetTitle($arResult["PROPERTIES"]["TITLE"]["VALUE"]);
}

if($arResult["PROPERTIES"]["KEYWORD"]["VALUE"]){ // keywords
	$APPLICATION->SetPageProperty("keywords", $arResult["PROPERTIES"]["KEYWORD"]["VALUE"]);
}

if($arResult["PROPERTIES"]["DISCRIPTION"]["VALUE"]){ // DISCRIPTION
	$APPLICATION->SetPageProperty("description", $arResult["PROPERTIES"]["DISCRIPTION"]["VALUE"]);
}

?>

<section class="product_block">
	<h2 class="category_title"><?if($arResult["PROPERTIES"]["NAME_DETAIL"]["VALUE"]) echo $arResult["PROPERTIES"]["NAME_DETAIL"]["VALUE"]; else echo $arResult["NAME"];?></h2>
	
		<div class="photo">
			
			<div class="csbanner bn372">
				<div><?$APPLICATION->IncludeComponent(
					"bitrix:advertising.banner",
					"",
					Array(
						"TYPE" => "bn372x60",
						"NOINDEX" => "Y",
						"CACHE_TYPE" => "A",
						"CACHE_TIME" => "0",
						"CACHE_NOTES" => ""
					),
					false
				);?></div>
			</div>
			
		<ul>
		<li>
			<? if($arResult['DETAIL_PICTURE_350']['SRC']) $INDEX_SRC_IMG = $arResult['DETAIL_PICTURE_350']['SRC']; else $INDEX_SRC_IMG = SITE_TEMPLATE_PATH.'/img/no_images.png'; ?>
			<img src="<?=$INDEX_SRC_IMG;?>" id="catalog_detail_image" alt="<?=$arResult["NAME"]?>" height="472" width="294" />
		</li>
		
		<?if(count($arResult["MORE_PHOTO"])>0):?>
			<?foreach($arResult["MORE_PHOTO"] as $PHOTO):?>
			<li>
				<img border="0" src="<?=$PHOTO["SRC_PREVIEW"]?>" width="<?=$PHOTO["PREVIEW_WIDTH"]?>" height="<?=$PHOTO["PREVIEW_HEIGHT"]?>" alt="<?=$arResult["NAME"]?>" />
			</li>
			<?endforeach;?>
		<?endif?>
		</ul>
		
		<div class="csbanner bn372d">
			<div><br/><?$APPLICATION->IncludeComponent(
				"bitrix:advertising.banner",
				"",
				Array(
					"TYPE" => "bn372x60d",
					"NOINDEX" => "Y",
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "0",
					"CACHE_NOTES" => ""
				),
				false
			);?></div>
		</div>
		
		</div>
				<div class="descr">
                    	<p class="articul">Артикул <?if($arResult["PROPERTIES"]["VENDORES"]["VALUE"]) echo $arResult["PROPERTIES"]["VENDORES"]["VALUE"]; else echo '______';?></p>
                    	<div class="price_block">
							<?foreach($arResult["PRICES"] as $code=>$arPrice):
								if($arPrice["CAN_ACCESS"]):
							?>
									<?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
										<? $PRICE_BASKET = $arPrice["DISCOUNT_VALUE"];?>
										<p class="price"><?=round($arPrice["DISCOUNT_VALUE"])?> <span>руб.</span></p>
										<div class="old_price">
											<p class="discount">-<?echo round((($arPrice["VALUE"]-$arPrice["DISCOUNT_VALUE"])/$arPrice["VALUE"])*100);?>%</p>
											<p><?=$arPrice["VALUE"]?> <span>руб.</span></p>
										</div>
									<?else:?>
										<? $PRICE_BASKET = $arPrice["VALUE"];?>
										<p class="price"><?=$arPrice["VALUE"]?> <span>руб.</span></p>
									<?endif;?>
							<?
									break;
								endif;
							endforeach;
							?>
							<?$ar_link_add = explode('?',$arResult["ADD_URL"]);?>
								<!--noindex--><a href="<?="/include/add_to_basket.php?".$ar_link_add[1]."&PRICE=".$PRICE_BASKET."&price_id=".$arResult["PRICES"]["BASE"]["ID"]."&quantity=1&sku=1";?>" class="btn_buy" rel="nofollow" onclick="return addToCart(this, 'catalog_detail_image', 'detail', '<?=GetMessage("CATALOG_IN_BASKET")?>');" id="catalog_add2cart_link">заказать</a><!--/noindex-->
                        </div>
                        
						<?
						//trace($arResult["PROPERTIES"]["DOP_TEXT"]["VALUE"]);
						if(is_array($arResult["PROPERTIES"]["DOP_TEXT"]["VALUE"])){
						?>
                        <div class="product_color">
                        	<p><?if($arResult["PROPERTIES"]["DOP_TITLE"]["VALUE"]) echo $arResult["PROPERTIES"]["DOP_TITLE"]["VALUE"]; else echo "Выбор цвета";?>:</p>
							
							<select class="cusel">
							<!--<option value="">Сделайте свой выбор</option>-->
							<?foreach($arResult["PROPERTIES"]["DOP_TEXT"]["VALUE"] as $k_dop=>$v_dop):?>
                            	<option value="<?=$arResult["PROPERTIES"]["DOP_TEXT"]["DESCRIPTION"][$k_dop];?>" onClick="document.location='<?=$arResult["PROPERTIES"]["DOP_TEXT"]["DESCRIPTION"][$k_dop];?>';"><?=$v_dop;?></option>
							<?endforeach;?>
                            </select>
							<?
							if($arResult["PROPERTIES"]["SPECIFICATION"]["VALUE"]) {
								echo "<p>".$arResult["PROPERTIES"]["SPECIFICATION"]["VALUE"].":</p>
								<select class=\"cusel\">";
								foreach($arResult["PROPERTIES"]["SPECIFICATION_VALUE"]["VALUE"] as $k_spec=>$v_spec) {
									echo "<option value=\"{$v_spec}\">{$v_spec}</option>";
								}
								echo "</select>";
							}
							?>
                            
                        </div>
						<?}?>
						
                        <? if (count($arResult['SKU'])):?>
                        <div class="product_color">
                        	<p>Варианты товара:</p>
                        	<select class="cusel" name="sku_sel" onchange="setSku();" id="sku_sel" style="width: 420px;">
                        		<? foreach ($arResult['SKU'] as $sku):?>
                        		<?
                        			$diff = "";
                        			if ($sku['PROPERTIES']['size']['VALUE']) {
                        				$diff = "размер: ".$sku['PROPERTIES']['size']['VALUE'];
                        			}
                        			
                        			if ($sku['PROPERTIES']['color']['VALUE']) {
                        				$diff2 = "цвет: ".$sku['PROPERTIES']['color']['VALUE'];
                        				if ($diff) {
                        					$diff = $diff.", ".$diff2;
                        				}
                        				else {
                        					$diff = $diff2;
                        				}
                        			}
                        		?>
                        		<option value="<?=$sku['ID']?>"><?=$diff;?></option>
                        		<? endforeach; ?>
                        	</select>
                        </div>
                        <br/>
                        <? endif;?>
                        
                        <? if (count($arResult['SKU'])):
							foreach ($arResult['SKU'] as $sku) {
							$prices_db = CPrice::GetList(array(), array('PRODUCT_ID' => $sku['ID']));
							$sku_p = $prices_db->Fetch();
						?>
<input type="hidden" id="p<?=$sku['ID']?>" value="<?=$sku_p['ID'];?>" rel="<?=$sku['PROPERTIES']['article']['VALUE']?>">
<input type="hidden" id="u<?=$sku['ID']?>" value="/include/add_to_basket.php?action=ADD2BASKET&id=<?=$sku['ID']?>&SECTION_CODE=<?=$arResult['CODE']?>&ELEMENT_CODE=&PRICE=<?=$PRICE_BASKET;?>&price_id=<?=$sku_p['ID']?>&quantity=1">
						<?
							}
						endif;

						?>	
						
						<script>
							setSku();
						</script>
                        
                        <div class="pr_r">
	                        <div class="phone">
	                        	<p>Так же вы можете сделать заказ по телефону:</p>
	                            <p class="numb">
								<?
								$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR."include/telephone_product.php"
									),
									false,
									array(
									"ACTIVE_COMPONENT" => "Y"
									)
								);
								?>
								</p>
	                        </div>
                            
							

	                        <?
								$FilterVote = Array(
									"IBLOCK_TYPE" => "catalog",
									"IBLOCK_ID" => "3",
									"ELEMENT_ID" => $arResult["ID"],
									"MAX_VOTE" => "5",
									"VOTE_NAMES" => array("0","1","2","3","4"),
									"SET_STATUS_404" => "N",
									"CACHE_TYPE" => "N",
									"CACHE_TIME" => "3600"
								);
								if(!$USER->IsAuthorized()):
									$FilterVote["READ_ONLY"] = "Y";
								endif;
								$APPLICATION->IncludeComponent("love:iblock.vote","product_ajax", $FilterVote);
							?>
							
                            <?if($arResult["CATALOG_QUANTITY"] > 0){?>
								<div class="in_stock">в наличии</div>
							<?}else{?>
								<div class="in_stock">под заказ</div>
							<?}?>
                        </div>
                        
                        <ul class="info_list">
							
							<?
							if (is_array($arResult['DISPLAY_PROPERTIES']) && count($arResult['DISPLAY_PROPERTIES']) > 0):
								foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
									<li>
										<div class="col_1"><?=$arProperty["NAME"]?></div>
										<div class="col_2">
											<?
											if($arProperty["CODE"] == "ADD_ORDER"){
												if(!is_array($arProperty["DISPLAY_VALUE"])){
													$v = $arProperty["DISPLAY_VALUE"];
													$k = 0;
													?>
													<noindex><p id="catalog_list_url_<?=$arProperty["VALUE"][$k]?>">
														<a href="<?="/include/add_to_basket.php?quantity=1";?>&action=ADD2BASKET_DOP&id=<?=$arProperty["VALUE"][$k]?>" class="btn_add" rel="nofollow" onclick="return addToCart(this, 'catalog_list_url_<?=$arProperty["VALUE"][$k]?>', 'list', '');" id="catalog_add2cart_link_<?=$arProperty["VALUE"][$k]?>" ></a>
														<a href="<?=$arr_link[1];?>" class="recommended"><?=strip_tags($v);?></a>
													</p></noindex>
													<?
												}
												else{?>
													<?foreach($arProperty["DISPLAY_VALUE"] as $k=>$v){
														$arr_link = explode('"',$v);
													?>
													<noindex><p id="catalog_list_url_<?=$arProperty["VALUE"][$k]?>">
														<a href="<?="/include/add_to_basket.php?quantity=1";?>&action=ADD2BASKET_DOP&id=<?=$arProperty["VALUE"][$k]?>" class="btn_add" rel="nofollow" onclick="return addToCart(this, 'catalog_list_url_<?=$arProperty["VALUE"][$k]?>', 'list', '');" id="catalog_add2cart_link_<?=$arProperty["VALUE"][$k]?>" ></a>
														<a href="<?=$arr_link[1];?>" class="recommended"><?=strip_tags($v);?></a>
													</p></noindex>
													<?}?>
												<?}?>
											<?
											}else{
												echo $arProperty["DISPLAY_VALUE"];
											}?>
										</div>
									</li>
								<?endforeach;?>
							<?endif;?>
                        </ul>
                        
                </div>
</section>

<div class="methods_wrap clearfix">
<section class="methods_block first">
                	<header>способы оплаты</header>
                    
                    <div class="methods_list">
						<?
						$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => SITE_DIR."include/product_payment.php"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);
						?>
                    </div>
                </section>
                
                <section class="methods_block">
                	<header>способы доставки</header>
                    
                    <div class="methods_list">
						<?
						$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => SITE_DIR."include/product_delivery.php"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);
						?>
                    </div>
                </section>
</div>               
<p class="product_description">Подробное описание</p>
<p class="bottom_text"><?=$arResult["DETAIL_TEXT"];?></p>

<?$APPLICATION->IncludeComponent("love:store.catalog.random", "random", Array(
	"DISPLAY_IMG_WIDTH" => "75",	// Ширина картинки для анонса
	"DISPLAY_IMG_HEIGHT" => "75",	// Высота картинки для анонса
	"SHARPEN" => "30",	// Резкость при масштабировании картинок (от 1 до 100)
	"IBLOCK_TYPE_ID" => "catalog",	// Тип инфо-блока
	"IBLOCK_ID" => array(	// Инфо-блок
		0 => "3",
	),
	"PARENT_SECTION" => $arResult["IBLOCK_SECTION_ID"],	// ID раздела
	"RAND_COUNT" => "10",	// Количество позиций на странице
	"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
	"CACHE_TYPE" => "N",	// Тип кеширования
	"CACHE_TIME" => "0",	// Время кеширования (сек.)
	"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	),
	false
);?>


			<a name="reviews"></a>
                <section class="comments">
                	<h2>отзывы<br> наших клиентов</h2>
                    <noindex><a style="cursor:pointer;" class="add_comment" onClick="addCommentFeedbackElement();">добавить отзыв</a></noindex>
					
					<div id="add_feedback" style="display:none;">
						<?
						global $USER;
						if ($USER->IsAuthorized()){
						?>
						<?$APPLICATION->IncludeComponent("bitrix:iblock.element.add.form", "add_reviews_product", Array(
							"SEF_MODE" => "N",	
							"IBLOCK_TYPE" => "services",
							"IBLOCK_ID" => "6",
							"PROPERTY_CODES" => array(
								0 => "NAME",
								1 => "DATE_ACTIVE_FROM",
								2 => "PREVIEW_TEXT",
								3 => 24,
							),
							"PROPERTY_CODES_REQUIRED" => array(
								0 => "NAME",
								1 => "PREVIEW_TEXT",
								2 => 24
							),
							"GROUPS" => array(
								0 => "1",
								1 => "7",
							),
							"STATUS_NEW" => "NEW",
							"STATUS" => "INACTIVE",
							"LIST_URL" => "",	
							"ELEMENT_ASSOC" => "CREATED_BY",
							"MAX_USER_ENTRIES" => "100000",
							"MAX_LEVELS" => "100000",
							"LEVEL_LAST" => "Y",
							"USE_CAPTCHA" => "N",
							"USER_MESSAGE_EDIT" => "Спасибо, ваш отзыв успешно сохранен.",
							"USER_MESSAGE_ADD" => "Спасибо,ваш отзыв успешно сохранен.",
							"DEFAULT_INPUT_SIZE" => "40",
							"RESIZE_IMAGES" => "N",
							"MAX_FILE_SIZE" => "0",
							"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
							"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
							"CUSTOM_TITLE_NAME" => "ФИО",
							"CUSTOM_TITLE_TAGS" => "",
							"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
							"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
							"CUSTOM_TITLE_IBLOCK_SECTION" => "",
							"CUSTOM_TITLE_PREVIEW_TEXT" => "Отзыв",
							"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
							"CUSTOM_TITLE_DETAIL_TEXT" => "",
							"CUSTOM_TITLE_DETAIL_PICTURE" => "",
							"ELEMENT_ID" => $arResult["ID"]
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
						"love:news.list",
						"product_otziv",
						Array(
							"DISPLAY_DATE" => "Y",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "N",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"AJAX_MODE" => "N",
							"IBLOCK_TYPE" => "services",
							"IBLOCK_ID" => "6",
							"NEWS_COUNT" => "30",
							"SORT_BY1" => "ACTIVE_FROM",
							"SORT_ORDER1" => "DESC",
							"SORT_BY2" => "SORT",
							"SORT_ORDER2" => "ASC",
							"FILTER_NAME" => array("PROPERTY_24"=>$arResult["ID"]),
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
						),
					false
					);?>
                </section>
                
                <aside class="c_banner">
					<?$APPLICATION->IncludeComponent("bitrix:advertising.banner", "product", Array(
						"TYPE" => "other_small",	
						"NOINDEX" => "Y",	
						"CACHE_TYPE" => "A",	
						"CACHE_TIME" => "360",
						"AJAX_MODE" => "Y",
						),
						false
					);?>
				</aside>
<div class="order_popup">
	<noindex><a href="/personal/cart/" class="btn_order">оформить заказ</a>
    <a href="#" class="continue_link"><span>Продолжить покупки</span></a></noindex>
</div>

<?

}

else 
{
echo "<div class='errortext'>Элемент не найден.</div>";
}

?>
