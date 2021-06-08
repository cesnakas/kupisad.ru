<?
\Bitrix\Main\Loader::includeModule('iblock');

$dbItem = \Bitrix\Iblock\ElementTable::getList(array(
    'select' => array('ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_PICTURE'),
    'filter' => array('IBLOCK_ID' => 23),
    'order' => array('SORT' => 'ASC')
));
while ($arItem = $dbItem->fetch()) {
    $dbProperty = \CIBlockElement::getProperty($arItem['IBLOCK_ID'], $arItem['ID'], array("sort", "asc"), array('CODE' => 'H_REF'));
    while ($arProperty = $dbProperty->GetNext()) {
    	$arItem['PICTURE'] = \CFile::getFileArray($arItem['PREVIEW_PICTURE']);
        if ($arProperty['VALUE']) {
            $arItem['H_REF'] = $arProperty['VALUE'];
        }
    }
    $arItems[] = $arItem;
}
?>
<?
foreach ($arItems as $item) { 
    if($item['NAME'] == '1'){?>
	<a href="<?=$item['H_REF']?>" target="_blank"><img src="<?=$item['PICTURE']['SRC']?>"></a>
<? } }?>