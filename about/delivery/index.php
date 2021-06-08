<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Доставка");
?><h1>Доставка</h1>
 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"personal",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"COMPONENT_TEMPLATE" => "personal",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "about",
		"USE_EXT" => "N"
	)
);?>
<div class="global-block-container">
	<div class="global-content-block">
		 Интернет-магазин Купи Сад осуществляет доставку рассады, саженцев и семян растений собственной Службой доставки по Москве и Московской области и транспортными компаниями по всей России
		<h3 class="bold">Стоимость доставки</h3>
		<p>
			 Стоимость доставки&nbsp;рассчитывается автоматически при оформлении заказа. Если при оформлении заказа Ваш населенный пункт был не найден, свяжитесь с нашими менеджерами и они оформят доставку по телефону.
		</p>
		<h3 class="bold">Время доставки</h3>
		<p>
			 Дата и время доставки согласовывается с нашими менеджером или менеджерами службы доставки.
		</p>
		<p>
 <b>ВНИМАНИЕ!</b> Неправильно указанный номер телефона, неточный или неполный адрес могут привести к дополнительной задержке! Пожалуйста, внимательно проверяйте ваши персональные данные при регистрации и оформлении заказа. Конфиденциальность ваших регистрационных данных гарантируется.
		</p>
		<p>
			 Доставка выполняется ежедневно с 10:00 до 20:00 часов.&nbsp;Время осуществления доставки зависит от времени размещения заказа и наличия товара на складе:
		</p>
		<ul>
			<li>если заказ подтвержден менеджером Службы доставки до 12:00, товар может быть доставлен на следующий рабочий день между 10:00 и 15:00 или между 15:00 и 20:00;</li>
			<li>если заказ подтвержден менеджером Службы доставки после 12:00, товар может быть доставлен на следующий рабочий день между 15:00 и 18:00.</li>
		</ul>
		<p>
			 Вы также можете указать любое другое удобное время доставки, и покупка будет доставлена в удобное вам время. Иное время доставки, а также время доставки в населенные пункты области определяется по договоренности с клиентом.
		</p>
		<h3 class="bold">Место доставки</h3>
		<p>
			 Доставка осуществляется по адресу, указанному при оформлении заказа. Если необходимо доставить товар по иному адресу, необходимо сообщить адрес менеджеру интернет-магазина, который свяжется с вами непосредственно после оформления заказа на сайте.
		</p>
		<h3 class="bold">Правила</h3>
		<p>
			 При доставке вам будут переданы все необходимые документы на покупку: товарный, кассовый чеки. При оформлении покупки на организацию, вам будут переданы счет-фактура, а также накладная, в которой необходимо поставить печать вашей организации. Цена, указанная в переданных вам курьером документах, является окончательной, курьер не обладает правом корректировки цены. Стоимость доставки выделяется в документах на покупку отдельной графой.
		</p>
		<p>
 <b>ВНИМАНИЕ!</b> Просим вас помнить, что все&nbsp;параметры и потребительские свойства приобретаемого товара вам следует уточнять у нашего менеджера до момента покупки товара. В обязанности работников Службы доставки не входит осуществление консультаций и комментариев относительно потребительских свойств товара. При не заявлении вами при получении товара претензий по поводу качества товара, в дальнейшем подобные претензии не рассматриваются. В случае вопросов, пожеланий и претензий свяжитесь с нашим менеджером:
		</p>
		<p>
 <b>Отдел продаж интернет-магазина</b>: +7 (495) 260-07-40 (многоканальный).
		</p>
		<p>
 <b>Электронная почта</b>: <a href="mailto:shop@kupisad.ru">shop</a><a href="mailto:shop@kupisad.ru">@k</a><a href="mailto:shop@kupisad.ru">upisad.ru</a>
		</p>
		<p>
 <b>Мессенджеры</b>: <a href="mailto:+7(926)037-32-22">+</a><a href="mailto:+7(926)037-32-22">7(926)037-3222</a>
		</p>
		<p>
 <b>ИП Лапицкий А.А.&nbsp;</b><b>ОГРНИП: </b>309774623800559
		</p>
	</div>
	<div class="global-information-block">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "information_block",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => ""
	)
);?>
	</div>
</div>
 <br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>