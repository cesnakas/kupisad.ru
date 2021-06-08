<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новинки");?>
<?
	//include module
	\Bitrix\Main\Loader::includeModule("dw.deluxe");

	//vars
	$catalogIblockId = null;
	$arPriceCodes = array();

	//get template settings
	$arTemplateSettings = DwSettings::getInstance()->getCurrentSettings();
	if(!empty($arTemplateSettings)){
		$catalogIblockId = $arTemplateSettings["TEMPLATE_PRODUCT_IBLOCK_ID"];
		$arPriceCodes = explode(", ", $arTemplateSettings["TEMPLATE_PRICE_CODES"]);
	}
?>
<h1>Уцененные товары</h1><?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"personal", 
	array(
		"COMPONENT_TEMPLATE" => "personal",
		"ROOT_MENU_TYPE" => "left2",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?><?$APPLICATION->IncludeComponent(
	"dresscode:simple.offers", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "1c_catalog",
		"IBLOCK_ID" => "21",
		"PRICE_CODE" => array(
			0 => "ROZNICA",
		),
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600000",
		"PROP_NAME" => "OFFERS",
		"PROP_VALUE" => "13053",
		"CONVERT_CURRENCY" => "Y",
		"PROPERTY_CODE" => array(
			0 => "OFFERS",
			1 => "CML2_ARTICLE",
			2 => "ATT_BRAND",
			3 => "COLOR",
			4 => "ZOOM2",
			5 => "BATTERY_LIFE",
			6 => "SWITCH",
			7 => "GRAF_PROC",
			8 => "LENGTH_OF_CORD",
			9 => "DISPLAY",
			10 => "LOADING_LAUNDRY",
			11 => "FULL_HD_VIDEO_RECORD",
			12 => "INTERFACE",
			13 => "COMPRESSORS",
			14 => "Number_of_Outlets",
			15 => "MAX_RESOLUTION_VIDEO",
			16 => "MAX_BUS_FREQUENCY",
			17 => "MAX_RESOLUTION",
			18 => "FREEZER",
			19 => "POWER_SUB",
			20 => "POWER",
			21 => "HARD_DRIVE_SPACE",
			22 => "MEMORY",
			23 => "OS",
			24 => "ZOOM",
			25 => "PAPER_FEED",
			26 => "SUPPORTED_STANDARTS",
			27 => "VIDEO_FORMAT",
			28 => "SUPPORT_2SIM",
			29 => "MP3",
			30 => "ETHERNET_PORTS",
			31 => "MATRIX",
			32 => "CAMERA",
			33 => "PHOTOSENSITIVITY",
			34 => "DEFROST",
			35 => "SPEED_WIFI",
			36 => "SPIN_SPEED",
			37 => "PRINT_SPEED",
			38 => "SOCKET",
			39 => "IMAGE_STABILIZER",
			40 => "GSM",
			41 => "SIM",
			42 => "TYPE",
			43 => "MEMORY_CARD",
			44 => "TYPE_BODY",
			45 => "TYPE_MOUSE",
			46 => "TYPE_PRINT",
			47 => "CONNECTION",
			48 => "TYPE_OF_CONTROL",
			49 => "TYPE_DISPLAY",
			50 => "TYPE2",
			51 => "REFRESH_RATE",
			52 => "RANGE",
			53 => "AMOUNT_MEMORY",
			54 => "MEMORY_CAPACITY",
			55 => "VIDEO_BRAND",
			56 => "DIAGONAL",
			57 => "RESOLUTION",
			58 => "TOUCH",
			59 => "CORES",
			60 => "LINE_PROC",
			61 => "PROCESSOR",
			62 => "CLOCK_SPEED",
			63 => "TYPE_PROCESSOR",
			64 => "PROCESSOR_SPEED",
			65 => "HARD_DRIVE",
			66 => "HARD_DRIVE_TYPE",
			67 => "Number_of_memory_slots",
			68 => "MAXIMUM_MEMORY_FREQUENCY",
			69 => "TYPE_MEMORY",
			70 => "BLUETOOTH",
			71 => "FM",
			72 => "GPS",
			73 => "HDMI",
			74 => "SMART_TV",
			75 => "USB",
			76 => "WIFI",
			77 => "FLASH",
			78 => "ROTARY_DISPLAY",
			79 => "SUPPORT_3D",
			80 => "SUPPORT_3G",
			81 => "WITH_COOLER",
			82 => "FINGERPRINT",
			83 => "COLLECTION",
			84 => "TOTAL_OUTPUT_POWER",
			85 => "HTML",
			86 => "VID_ZASTECHKI",
			87 => "VID_SUMKI",
			88 => "VIDEO",
			89 => "PROFILE",
			90 => "VYSOTA_RUCHEK",
			91 => "GAS_CONTROL",
			92 => "WARRANTY",
			93 => "GRILL",
			94 => "MORE_PROPERTIES",
			95 => "GENRE",
			96 => "OTSEKOV",
			97 => "CONVECTION",
			98 => "INTAKE_POWER",
			99 => "NAZNAZHENIE",
			100 => "BULK",
			101 => "PODKLADKA",
			102 => "SURFACE_COATING",
			103 => "brand_tyres",
			104 => "SEASON",
			105 => "SEASONOST",
			106 => "DUST_COLLECTION",
			107 => "REF",
			108 => "COUNTRY_BRAND",
			109 => "DRYING",
			110 => "REMOVABLE_TOP_COVER",
			111 => "CONTROL",
			112 => "FINE_FILTER",
			113 => "FORM_FAKTOR",
			114 => "SKU_COLOR",
			115 => "DELIVERY",
			116 => "PICKUP",
			117 => "USER_ID",
			118 => "BLOG_POST_ID",
			119 => "BLOG_COMMENTS_CNT",
			120 => "VOTE_COUNT",
			121 => "SHOW_MENU",
			122 => "SIMILAR_PRODUCT",
			123 => "RATING",
			124 => "RELATED_PRODUCT",
			125 => "VOTE_SUM",
			126 => "MARKER_PHOTO",
			127 => "NEW",
			128 => "DELIVERY_DESC",
			129 => "SALE",
			130 => "MARKER",
			131 => "POPULAR",
			132 => "WEIGHT",
			133 => "HEIGHT",
			134 => "DEPTH",
			135 => "WIDTH",
			136 => "",
		),
		"CURRENCY_ID" => "RUB",
		"DISABLE_SELECT_CATEGORY" => "N",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_MEASURES" => "N",
		"LAZY_LOAD_PICTURES" => "N",
		"FILTER_PRICE_CODE" => array(
			0 => "ROZNICA",
		)
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>