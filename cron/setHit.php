<?php 
$_SERVER["DOCUMENT_ROOT"] = dirname(__DIR__);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Loader,
	Bitrix\Sale,
	Bitrix\Catalog,
	Bitrix\Iblock\ElementTable as ET;

Loader::includeModule('iblock');
Loader::includeModule('catalog');
Loader::includeModule('sale');

$iblockId = 16;
$arEnumId = [10];
$enumId = 10;

if(!function_exists('getRootSection')){
	function getRootSection($iblockId, $elemId){
		$item = CIBlockElement::GetByID($elemId)->GetNext();
		$scRes = CIBlockSection::GetNavChain(
								$iblockId,
								$item['IBLOCK_SECTION_ID'],
								["ID","DEPTH_LEVEL"]
							);
		while($arGrp = $scRes->Fetch()){
			if ($arGrp['DEPTH_LEVEL'] == 1){
				return $arGrp['ID'];

			}
		}
	}
}

//самые продаваемые товары
$ordersIterator = Sale\Internals\OrderTable::getList([
	'select' => array('ID')
]);
$ids = [];
while ($arOrder = $ordersIterator->fetch()) {
	$order = Sale\Order::load($arOrder['ID']);
	$basket = $order->getBasket();
	$basketItems = $basket->getBasketItems();
	foreach ($basket as $item) {
		$id = $item->getProductId();
		$arr = CIBlockElement::GetByID($id)->GetNext();
		if($arr['IBLOCK_ID'] != $iblockId){
			$mxResult = CCatalogSku::GetProductInfo($id);
			$id = $mxResult['ID'];
		}
		$quant = $item->getQuantity();
		if(key_exists($id, $ids)){
			$ids[$id] += $quant;
		} else {
			$ids[$id] = $quant;
		}
	}
}
arsort($ids);
$ids = array_keys($ids);

if(count($ids) > 5){
	$arSections = [];
	foreach($ids as $k => $item){
		$sectionId = getRootSection($iblockId, $item);
		if(key_exists($sectionId, $arSections)){
			if($arSections[$sectionId] >= 5){
				unset($ids[$k]);
			} else {
				$arSections[$sectionId]++;
			}
		} else {
			$arSections[$sectionId] = 1;
		}
	}
} elseif(empty($ids)){ //если их нет, то самые просматриваемые
   $viewedIterator = Catalog\CatalogViewedProductTable::getList(array(
      'select' => ['ELEMENT_ID'],
      'filter' => ['=SITE_ID' => SITE_ID],
      'order' => ['VIEW_COUNT' => 'DESC'],
      'limit' => 10
   ));

   while ($arFields = $viewedIterator->fetch()){
      $ids[] = $arFields['ELEMENT_ID'];
   }
}
$existIds = [];
$arSelect = ["ID"];
$arFilter = [
	"IBLOCK_ID" => $iblockId, 
	"ACTIVE_DATE"=>"Y", 
	"ACTIVE"=>"Y", 
	"PROPERTY_OFFERS_VALUE" => 'Хит продаж'
];
echo "<pre>";
$res = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
 $arFields = $ob->GetFields();
 $existIds[] = $arFields['ID'];
}
//удаление Хит продаж у всех товаров
foreach($existIds as $id){
	$db_props = CIBlockElement::GetProperty($iblockId, $id, array("sort" => "asc"), Array("CODE"=>"OFFERS"));
	$propValues = [];
	while($ar_props = $db_props->Fetch()){
		$propValues[] = $ar_props['VALUE'];
	}
	$propValues = array_diff($propValues, $arEnumId);

	if(empty($propValues))
		$propValues=false;
	CIBlockElement::SetPropertyValuesEx($id, $iblockId, ['OFFERS'=>$propValues]);
}
// проставление Хит продаж нужным товарам
var_dump($ids);
foreach($ids as $id){
	$db_props = CIBlockElement::GetProperty($iblockId, $id, array("sort" => "asc"), Array("CODE"=>"OFFERS"));
	$propValues = [];
	while($ar_props = $db_props->Fetch()){
		$propValues[] = $ar_props['VALUE'];
	}
	$propValues[] = $enumId;
	CIBlockElement::SetPropertyValuesEx($id, $iblockId, ['OFFERS'=>$propValues]);
}
echo "</pre>";