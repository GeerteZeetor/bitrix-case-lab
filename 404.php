<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

if (!empty($APPLICATION)) {
    $APPLICATION->SetTitle("404 Not Found");
}
?>
    404
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>