<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?><?$APPLICATION->IncludeComponent(
	"bitrix:voting.result",
	"graphics",
	Array(
		"CACHE_TIME" => "1200",
		"CACHE_TYPE" => "A",
		"QUESTION_DIAGRAM_1" => "histogram",
		"QUESTION_DIAGRAM_2" => "histogram",
		"QUESTION_DIAGRAM_3" => "histogram",
		"THEME" => "colourless",
		"VOTE_ALL_RESULTS" => "Y",
		"VOTE_ID" => "1"
	)
);?><br>
<br>
<?$APPLICATION->IncludeComponent(
	"bitrix:voting.result",
	"",
	Array(
		"CACHE_TIME" => "1200",
		"CACHE_TYPE" => "A",
		"QUESTION_DIAGRAM_1" => "-",
		"QUESTION_DIAGRAM_2" => "-",
		"QUESTION_DIAGRAM_3" => "-",
		"VOTE_ALL_RESULTS" => "N",
		"VOTE_ID" => "1"
	)
);?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>