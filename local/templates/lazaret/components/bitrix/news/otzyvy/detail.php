<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="row">
	<?$ElementID = $APPLICATION->IncludeComponent(
		"bitrix:news.detail",
		"",
		Array(
			"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
			"DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
			"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
			"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
			"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
			"IBLOCK_ID" => $arParams["IBLOCK_ID"],
			"FIELD_CODE" => $arParams["DETAIL_FIELD_CODE"],
			"PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
			"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
			"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
			"META_KEYWORDS" => $arParams["META_KEYWORDS"],
			"META_DESCRIPTION" => $arParams["META_DESCRIPTION"],
			"BROWSER_TITLE" => $arParams["BROWSER_TITLE"],
			"SET_CANONICAL_URL" => $arParams["DETAIL_SET_CANONICAL_URL"],
			"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
			"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
			"SET_TITLE" => $arParams["SET_TITLE"],
			"MESSAGE_404" => $arParams["MESSAGE_404"],
			"SET_STATUS_404" => $arParams["SET_STATUS_404"],
			"SHOW_404" => $arParams["SHOW_404"],
			"FILE_404" => $arParams["FILE_404"],
			"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
			"ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
			"ACTIVE_DATE_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
			"CACHE_TYPE" => $arParams["CACHE_TYPE"],
			"CACHE_TIME" => $arParams["CACHE_TIME"],
			"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
			"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
			"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
			"DISPLAY_TOP_PAGER" => $arParams["DETAIL_DISPLAY_TOP_PAGER"],
			"DISPLAY_BOTTOM_PAGER" => $arParams["DETAIL_DISPLAY_BOTTOM_PAGER"],
			"PAGER_TITLE" => $arParams["DETAIL_PAGER_TITLE"],
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => $arParams["DETAIL_PAGER_TEMPLATE"],
			"PAGER_SHOW_ALL" => $arParams["DETAIL_PAGER_SHOW_ALL"],
			"CHECK_DATES" => $arParams["CHECK_DATES"],
			"ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
			"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
			"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
			"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
			"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
			"USE_SHARE" => $arParams["USE_SHARE"],
			"SHARE_HIDE" => $arParams["SHARE_HIDE"],
			"SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
			"SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
			"SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
			"SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
			"ADD_ELEMENT_CHAIN" => (isset($arParams["ADD_ELEMENT_CHAIN"]) ? $arParams["ADD_ELEMENT_CHAIN"] : ''),
			'STRICT_SECTION_CHECK' => (isset($arParams['STRICT_SECTION_CHECK']) ? $arParams['STRICT_SECTION_CHECK'] : ''),
		),
		$component
	);?>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="actions item-margin-left text-align-center">
				<div style="text-align:right">
					<button class="btn btn-primary" type="button" title="Обратиться к нашим врачам" onclick="ComagicWidget.openSitePhonePanel();" style="color: #000 !important;background-color: #fb0 !important;margin: 0 22px 0 0;padding: 12px 26px;position: relative;top: -2px;">Обратиться к нашим врачам</button>
					<button class="btn btn-primary"
                            style="margin-right: 20px;margin: 0 20px 0 0;padding: 12px 26px;position: relative;top: -2px;"
                            type="button"
                            title="Add Comment"
                            onclick="qPopup.open();">Оставить отзыв</button>
					<!--<button class="btn btn-primary" style="margin-right: 20px;margin: 0 20px 0 0;padding: 12px 26px;position: relative;top: -2px;" type="button" title="Add Comment" onclick="$('#AddComment').toggle('slow')">Оставить отзыв</button>-->
					<div class="greenram" style="display:inline-block;text-align:center"><a href="/otzyvy/">Вернуться в раздел</a></div>
				</div>
			</div>

	<!-- 		<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div id="AddComment" class="comment_reply" style="display:none;">
						<div class="comment no-background comment-width">
							<form action="/otzyvy/prohozhu-lechenie-s-psihoterapiei-otzyv-o-lkinike-lazaret-fevral-2019/" name="comment_form_00" method="post" id="comment_form_00">
								<div class="row">
									<div class="caption">Имя</div>
									<div class="field">
										<input type="text" size="70" name="author" class="form-control" value="">
									</div>
								</div>
								<div class="row">
									<div class="caption">E-mail</div>
									<div class="field">
										<input id="email0" type="text" size="70" name="email" class="form-control" value="">
										<div id="error_email0"></div>
									</div>
								</div>
								<div class="row">
									<div class="caption">Телефон</div>
									<div class="field">
										<input type="text" size="70" name="phone" class="form-control" value="">
									</div>
								</div>
								<div class="row">
									<div class="caption">Тема</div>
									<div class="field">
										<input type="text" size="70" name="subject" class="form-control" value="">
									</div>
								</div>
								<div class="row">
									<div class="caption">Комментарий</div>
									<div class="field">
										<textarea name="text" cols="68" rows="5" class="form-control mceEditor"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="caption">Оценка</div>
									<div class="field stars">
										
										<div class="ui-stars-cancel ui-stars-cancel-disabled" style="opacity: 0.5;"><a title="">0</a></div><div class="ui-stars-star"><a title="">1</a></div><div class="ui-stars-star"><a title="">2</a></div><div class="ui-stars-star"><a title="">3</a></div><div class="ui-stars-star"><a title="">4</a></div><div class="ui-stars-star"><a title="">5</a></div><input type="hidden" name="grade" value="0"></div>
									</div>
									<div class="row">
										<div class="caption"></div>
										<div class="field">
											<img id="comment_0" class="captcha" src="/captcha.php?id=522340&amp;height=30&amp;width=100" title="Контрольное число" name="captcha">
											<div class="captcha">
												<img src="/images/refresh.png">
												<span onclick="$('#comment_0').updateCaptcha('522340', 30); return false">Показать другое число</span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="caption">
										Контрольное число<sup><font color="red">*</font></sup></div>
										<div class="field">
											<input type="hidden" name="captcha_id" value="522340">
											<input type="text" name="captcha" class="form-control" size="15">
										</div>
									</div>
									<div class="row">
										<div class="caption"></div>
										<div class="actions item-margin-left">
											<button class="btn btn-secondary" type="submit" name="add_comment" value="add_comment">Опубликовать</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>

<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_DIR."include/otzyv_buttom_doc_opinion.php",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => "standard.php"
	),
	false
);?>