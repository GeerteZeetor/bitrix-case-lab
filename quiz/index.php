<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Опрос о Гринатом");
?>

<?$APPLICATION->IncludeComponent(
    "bitrix:voting.form",
    "quiz",
    Array(
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "VOTE_ID" => "1",
        "VOTE_RESULT_TEMPLATE" => "/",
        "COMPONENT_TEMPLATE" => "quiz"
    )
);?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
