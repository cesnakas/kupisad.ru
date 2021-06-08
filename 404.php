<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetPageProperty("tags", "404 ошибка");
$APPLICATION->SetPageProperty("description", "404 ошибка");
$APPLICATION->SetPageProperty("keywords_inner", "404 ошибка");
$APPLICATION->SetPageProperty("title", "404 ошибка");
$APPLICATION->SetPageProperty("keywords", "404 ошибка");
$APPLICATION->SetPageProperty("robots", "noindex, nofollow");
$APPLICATION->AddChainItem("404 ошибка", "");
?><div id="error404" style="display:none;">
	<div class="wrapper">
		<a href="<?=SITE_DIR?>" class="errorPic"><img src="<?=SITE_TEMPLATE_PATH?>/images/404.jpg"></a>
		<h1>Такой страницы не существует</h1>
		<div class="errorText">начните поиск с <a href="<?=SITE_DIR?>">главной страницы</a> или выберите нужный товар в <a href="<?=SITE_DIR?>catalog/">каталоге</a>:</div>
	</div>
	<div id="empty">
		<div class="wrapper">
			<?$APPLICATION->IncludeComponent("bitrix:menu", "emptyMenu", Array(
				"ROOT_MENU_TYPE" => "left",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => "",
					"MAX_LEVEL" => "1",
					"CHILD_MENU_TYPE" => "left",
					"USE_EXT" => "Y",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "N",
				),
				false
			);?>
		</div>
	</div>
</div>
<div class="errorWrap">
	<div class="errorWrap__heading">
		<div class="limiter"><a href="/"><img src="/bitrix/templates/dresscode/images/logo.png?v=1593421242" alt=""></a></div>
	</div>
	<div class="errorWrap__body">
		<div class="limiter errorWrap__limiter">
			<div class="errorWrap__holder">
				<div class="errorWrap__number">Error 404</div>
				<div class="errorWrap__text">Нам очень жаль, но данной страницы не существует :(</div>
				<div class="errorWrap__cupon-info">
					<p>Не расстривайся, используй купон на скидку 5%</p>
					<a class="cupon-link" href="">404-detected</a>
				</div>
				<div class="errorWrap__footer">
					<a href="/" class="back-link">Вернуться за покупками</a>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
#subHeader6, #headerLine3,
#footerTabsCaption, #footerTabs,
#bigdata_recommended_products_Zz2YMH,
	#footer, #footerLine, #breadcrumbs, #left{ display:none;}
</style>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>