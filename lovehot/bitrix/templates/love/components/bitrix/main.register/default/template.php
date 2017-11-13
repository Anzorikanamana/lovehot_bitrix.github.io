<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();
?>

<h2 class="title_uppercase">Регистрация</h2>


<?if($USER->IsAuthorized()):?>

<p><?echo GetMessage("MAIN_REGISTER_AUTH")?></p>

<?else:?>
<?
if (count($arResult["ERRORS"]) > 0):
	foreach ($arResult["ERRORS"] as $key => $error)
		if (intval($key) == 0 && $key !== 0) 
			$arResult["ERRORS"][$key] = str_replace("#FIELD_NAME#", "&quot;".GetMessage("REGISTER_FIELD_".$key)."&quot;", $error);

	ShowError(implode("<br />", $arResult["ERRORS"]));

elseif($arResult["USE_EMAIL_CONFIRMATION"] === "Y"):
?>
<p><?echo GetMessage("REGISTER_EMAIL_WILL_BE_SENT")?></p>
<?endif?>


<form method="post" action="<?=POST_FORM_ACTION_URI?>" name="regform" enctype="multipart/form-data" class="user_form registration_form">
            <?
			if($arResult["BACKURL"] <> ''):
			?>
				<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
			<?
			endif;
			?>   	
                    <div class="form_line">
                        <label>Пол</label>
                        <input class="niceRadio" name="REGISTER[PERSONAL_GENDER]" value="M" checked id="sex_man" type="radio" />
                        <label for="sex_man" class="sex">Мужской</label>
                        <input class="niceRadio" name="REGISTER[PERSONAL_GENDER]" value="F" id="sex_woman" type="radio" />
                        <label for="sex_woman" class="sex">Женский</label>
                    </div>
					<div class="form_content">
						<div class="form_left">
							<div class="form_line required">
								<label>Никнейм</label>
								<input required type="text" name="REGISTER[LOGIN]" value="<?=$arResult["VALUES"]["LOGIN"]?>" />
							</div>
							<div class="form_line required">
								<label>Имя</label>
								<input required type="text" name="REGISTER[NAME]" value="<?=$arResult["VALUES"]["NAME"]?>" />
							</div>
							<div class="form_line">
								<label>Отчество</label>
								<input type="text" name="REGISTER[SECOND_NAME]" value="<?=$arResult["VALUES"]["SECOND_NAME"]?>" />
							</div>
							<div class="form_line">
								<label>Фамилия</label>
								<input type="text"  name="REGISTER[LAST_NAME]" value="<?=$arResult["VALUES"]["LAST_NAME"]?>" />
							</div>
						</div>
						<div class="form_right">
							<div class="form_line required">
								<label>Пароль</label>
								<input required type="password" autocomplete="off" value="" name="REGISTER[PASSWORD]" />
							</div>
							<div class="form_line required">
								<label>Подтверждение пароля</label>
								<input required type="password" autocomplete="off" value="" name="REGISTER[CONFIRM_PASSWORD]" />
							</div>
							<div class="form_line required">
								<label>E-mail</label>
								<input required type="email" name="REGISTER[EMAIL]" value="<?=$arResult["VALUES"]["EMAIL"]?>" />
							</div>
							<div class="form_line">
								<label>Город</label>
								<input type="text" name="REGISTER[PERSONAL_CITY]" value="<?=$arResult["VALUES"]["PERSONAL_CITY"]?>" />
							</div>
							<div class="form_line">
								<label>Адрес</label>
								<input type="text" name="REGISTER[PERSONAL_STREET]" value="<?=$arResult["VALUES"]["PERSONAL_STREET"]?>" />
							</div>
							<div class="form_line">
								<label>Дата рождения</label>
								<input class="datepicker" type="text" name="REGISTER[PERSONAL_BIRTHDAY]" value="<?=$arResult["VALUES"]["PERSONAL_BIRTHDAY"]?>" />
							</div>
							<div class="form_line textarea">
								<label>О себе</label>
								<textarea name="REGISTER[PERSONAL_NOTES]"><?=$arResult["VALUES"]["PERSONAL_NOTES"]?></textarea>
							</div>
							<?
							/* CAPTCHA */
							if ($arResult["USE_CAPTCHA"] == "Y")
							{
								?>
									<div class="form_line captcha">
										<label>Введите слово<br>с картинки</label>
										<input type="text" name="captcha_word" value="" />
										<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
										<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="130" height="46" alt="CAPTCHA" style="margin-top: 0px;" />
									</div>
								<?
							}
							/* !CAPTCHA */
							?>
						   
							<div class="form_line submit">
								<input type="submit" name="register_submit_button" value=" " />
							</div>
						</div>
					</div>
</form>
<?endif?>