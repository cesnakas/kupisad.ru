<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новинки");?><h1>Новинки</h1>
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
<?$APPLICATION->IncludeComponent(
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
		"PROP_VALUE" => "11654",
		"CONVERT_CURRENCY" => "Y",
		"PROPERTY_CODE" => array(
			0 => "OFFERS",
			1 => "CML2_ARTICLE",
			2 => "ATT_BRAND",
			3 => "TOTAL_OUTPUT_POWER",
			4 => "VID_ZASTECHKI",
			5 => "VID_SUMKI",
			6 => "VIDEO",
			7 => "VYSOTA_RUCHEK",
			8 => "WARRANTY",
			9 => "OTSEKOV",
			10 => "CONVECTION",
			11 => "NAZNAZHENIE",
			12 => "BULK",
			13 => "PODKLADKA",
			14 => "SEASON",
			15 => "REF",
			16 => "COUNTRY_BRAND",
			17 => "SKU_COLOR",
			18 => "DELIVERY",
			19 => "PICKUP",
			20 => "MORE_PROPERTIES",
			21 => "COLLECTION",
			22 => "SHOW_MENU",
			23 => "SIMILAR_PRODUCT",
			24 => "RELATED_PRODUCT",
			25 => "USER_ID",
			26 => "BLOG_POST_ID",
			27 => "BLOG_COMMENTS_CNT",
			28 => "VOTE_COUNT",
			29 => "RATING",
			30 => "VOTE_SUM",
			31 => "COLOR",
			32 => "ZOOM2",
			33 => "BATTERY_LIFE",
			34 => "SWITCH",
			35 => "GRAF_PROC",
			36 => "LENGTH_OF_CORD",
			37 => "DISPLAY",
			38 => "LOADING_LAUNDRY",
			39 => "FULL_HD_VIDEO_RECORD",
			40 => "INTERFACE",
			41 => "COMPRESSORS",
			42 => "Number_of_Outlets",
			43 => "MAX_RESOLUTION_VIDEO",
			44 => "MAX_BUS_FREQUENCY",
			45 => "MAX_RESOLUTION",
			46 => "FREEZER",
			47 => "POWER_SUB",
			48 => "POWER",
			49 => "HARD_DRIVE_SPACE",
			50 => "MEMORY",
			51 => "OS",
			52 => "ZOOM",
			53 => "PAPER_FEED",
			54 => "SUPPORTED_STANDARTS",
			55 => "VIDEO_FORMAT",
			56 => "SUPPORT_2SIM",
			57 => "MP3",
			58 => "ETHERNET_PORTS",
			59 => "MATRIX",
			60 => "CAMERA",
			61 => "PHOTOSENSITIVITY",
			62 => "DEFROST",
			63 => "SPEED_WIFI",
			64 => "SPIN_SPEED",
			65 => "PRINT_SPEED",
			66 => "SOCKET",
			67 => "IMAGE_STABILIZER",
			68 => "GSM",
			69 => "SIM",
			70 => "TYPE",
			71 => "MEMORY_CARD",
			72 => "TYPE_BODY",
			73 => "TYPE_MOUSE",
			74 => "TYPE_PRINT",
			75 => "CONNECTION",
			76 => "TYPE_OF_CONTROL",
			77 => "TYPE_DISPLAY",
			78 => "TYPE2",
			79 => "REFRESH_RATE",
			80 => "RANGE",
			81 => "AMOUNT_MEMORY",
			82 => "MEMORY_CAPACITY",
			83 => "VIDEO_BRAND",
			84 => "DIAGONAL",
			85 => "RESOLUTION",
			86 => "TOUCH",
			87 => "CORES",
			88 => "LINE_PROC",
			89 => "PROCESSOR",
			90 => "CLOCK_SPEED",
			91 => "TYPE_PROCESSOR",
			92 => "PROCESSOR_SPEED",
			93 => "HARD_DRIVE",
			94 => "HARD_DRIVE_TYPE",
			95 => "Number_of_memory_slots",
			96 => "MAXIMUM_MEMORY_FREQUENCY",
			97 => "TYPE_MEMORY",
			98 => "BLUETOOTH",
			99 => "FM",
			100 => "GPS",
			101 => "HDMI",
			102 => "SMART_TV",
			103 => "USB",
			104 => "WIFI",
			105 => "FLASH",
			106 => "ROTARY_DISPLAY",
			107 => "SUPPORT_3D",
			108 => "SUPPORT_3G",
			109 => "WITH_COOLER",
			110 => "FINGERPRINT",
			111 => "HTML",
			112 => "PROFILE",
			113 => "GAS_CONTROL",
			114 => "GRILL",
			115 => "GENRE",
			116 => "INTAKE_POWER",
			117 => "SURFACE_COATING",
			118 => "brand_tyres",
			119 => "SEASONOST",
			120 => "DUST_COLLECTION",
			121 => "DRYING",
			122 => "REMOVABLE_TOP_COVER",
			123 => "CONTROL",
			124 => "FINE_FILTER",
			125 => "FORM_FAKTOR",
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