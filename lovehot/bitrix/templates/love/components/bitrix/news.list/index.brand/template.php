<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
	//trace($_SERVER["REDIRECT_URL"]); // arrFilter_pf%5BBRAND%5D=109&set_filter=%D4%E8%EB%FC%F2%F0&set_filter=Y
?>
			
<h2>Выбирайте бренды которым доверяют</h2>
<ul class="brands_block">

<?
$cell = 0;
$count_ul = 10;//ceil((count($arResult["ITEMS"]))/3);
?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	
	<?
	if($cell != 0){
		if($cell%$count_ul == 0) echo '</li><li>';
	}
	else{
		echo '<li>';
	}
	?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div>
			<a href="<?=$arItem["DETAIL_PAGE_URL"];//'/catalog/?arrFilter_pf[BRAND]='.$arItem["ID"].'&set_filter=Y';?>">
				<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
					<img class="preview_picture" border="0" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" />
				<?else:?>
					<?=$arItem["NAME"]?>
				<?endif?>
			</a>
			</div>
		<?endif?>
		
	<?endif?>
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])) $cell++;?>
<?endforeach;?>
<?
if($cell%$count_ul != 0){
	echo '</li>';
}
?>
</ul>