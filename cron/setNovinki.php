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
$arEnumId = [9];
$enumId = 9;

$arSelect = ["ID"];
$now = new DateTime();
$arFilter = [
	"IBLOCK_ID" => $iblockId, 
	"ACTIVE_DATE"=>"Y", 
	"ACTIVE"=>"Y", 
	">DATE_CREATE" => $now->modify('-30 day')->format('d.m.Y H:i:s')
];
echo "<pre>";
$ids = [];
$res = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
 $arFields = $ob->GetFields();
 $ids[] = $arFields['ID'];
}

$existIds = [];
$arFilter2 = [
	"IBLOCK_ID" => $iblockId, 
	"ACTIVE_DATE"=>"Y", 
	"ACTIVE"=>"Y", 
	"PROPERTY_OFFERS_VALUE" => 'Новинка'
];
echo "<pre>";
$res2 = CIBlockElement::GetList([], $arFilter2, false, false, $arSelect);
while($ob2 = $res2->GetNextElement())
{
 $arFields2 = $ob2->GetFields();
 $existIds[] = $arFields2['ID'];
}
//удаление Новинка у всех товаров
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
// проставление Новинка нужным товарам
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