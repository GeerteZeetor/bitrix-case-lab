<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?>
<?$APPLICATION->IncludeComponent("bitrix:voting.result", "graphics", Array(
	"CACHE_TIME" => "1200",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"QUESTION_DIAGRAM_1" => "histogram",	// Тип диаграммы для вопроса "К какой отрасли относится Грин..."
		"QUESTION_DIAGRAM_2" => "histogram",	// Тип диаграммы для вопроса "Гринатом является"
		"QUESTION_DIAGRAM_3" => "histogram",	// Тип диаграммы для вопроса "Масштаб компании"
		"THEME" => "colourless",
		"VOTE_ALL_RESULTS" => "Y",	// Показывать все результаты
		"VOTE_ID" => "1",	// Идентификатор опроса
	),
	false
);?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>