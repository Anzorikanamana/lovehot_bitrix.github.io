<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(count($arResult["ITEMS"]) > 0): ?>
<section class="product_list popular product_page">
<h2>Похожие товары</h2>
<div class="carousele_box" id="carousel_3">
<div class="btn next"></div>
<div class="btn prev"></div>
<div class="c_carousele">
<div class="btn next adapt"></div>
<div class="btn prev adapt"></div>
<ul>
<?	foreach($arResult["ITEMS"] as $key => $arElement):
		if(is_array($arElement)):
			$bPicture = is_array($arElement["PICTURE_PREVIEW"]);
?>
			<li>
			<?if ($bPicture):?>
				<a class="pic" href="<?=$arElement["DETAIL_PAGE_URL"]?>">
					<img border="0" src="<?=$arElement["PICTURE_PREVIEW"]["SRC"]?>" width="120" height="120" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>" id="catalog_list_image_<?=$arElement['ID']?>" />
				</a>
			<?else:?>
				<a class="pic" href="<?=$arElement["DETAIL_PAGE_URL"]?>">
					<img border="0" src="<?=SITE_TEMPLATE_PATH?>/img/no_images.png" width="120" height="120" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>" id="catalog_list_image_<?=$arElement['ID']?>" />
				</a>
			<?endif;?>
			<p class="code"><?=$arElement["NAME"]?></p>

			<?if(count($arElement["PRICE"])>0):?>
				<p class="price">
					<? $PRICE_BASKET = round($arElement['PRICE']["DISCOUNT_PRICE"]);//$arElement['PRICE']['PRICE']['PRICE'];?>
					<?=$PRICE_BASKET;?><span>руб.</span>
				</p>
			<?endif;?>

			<!--<a href="<?echo $arElement["ADD_URL"]?>" class="buy" rel="nofollow" onclick="return addToCart(this, 'catalog_list_image_<?=$arElement['ID']?>', 'list', 'в корзине');" id="catalog_add2cart_link_<?=$arElement['ID']?>" >заказать</a>-->
			
			<?if($arElement['PRICE']["DISCOUNT_PRICE"] != $arElement['PRICE']['PRICE']['PRICE']){?>
				<p class="product_discount">-<?=round((($arElement['PRICE']['PRICE']['PRICE']-$arElement['PRICE']["DISCOUNT_PRICE"])/$arElement['PRICE']['PRICE']['PRICE'])*100);?>%</p>
			<?}?>
		<?endif;?>
	<?endforeach;?>
	</ul>
	</div>
</div>
</section>
<?endif;?>