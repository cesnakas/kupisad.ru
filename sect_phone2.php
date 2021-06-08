<?
	//include module
	\Bitrix\Main\Loader::includeModule("dw.deluxe");
	//get template settings
	$arTemplateSettings = DwSettings::getInstance()->getCurrentSettings();
?>
<?if(!empty($arTemplateSettings["TEMPLATE_TELEPHONE_1"])):?><a class="heading" href="tel:<?=$arTemplateSettings["TEMPLATE_TELEPHONE_1"]?>"><?=$arTemplateSettings["TEMPLATE_TELEPHONE_1"]?></a><?endif;?>
