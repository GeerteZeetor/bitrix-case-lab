<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?><br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:menu.sections",
	"",
	Array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DEPTH_LEVEL" => "1",
		"DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#",
		"IBLOCK_ID" => "11",
		"IBLOCK_TYPE" => "content",
		"IS_SEF" => "Y",
		"SECTION_PAGE_URL" => "#SECTION_CODE#/",
		"SEF_BASE_URL" => "/services/"
	)
);?> <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>