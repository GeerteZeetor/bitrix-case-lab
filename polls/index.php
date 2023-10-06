<?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
if (!empty($APPLICATION)) {
    $APPLICATION->SetTitle('Опрос о месседжере');
    $APPLICATION->SetPageProperty('title', 'Опрос | We coders');
}
?>
<?php $APPLICATION -> IncludeComponent(
    "bitrix:iblock.element.add.form",
    "Polls",
    [
        "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
        "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
        "CUSTOM_TITLE_DETAIL_PICTURE" => "",
        "CUSTOM_TITLE_DETAIL_TEXT" => "",
        "CUSTOM_TITLE_IBLOCK_SECTION" => "",
        "CUSTOM_TITLE_NAME" => "Имя",
        "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
        "CUSTOM_TITLE_PREVIEW_TEXT" => "",
        "CUSTOM_TITLE_TAGS" => "",
        "DEFAULT_INPUT_SIZE" => "30",
        "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
        "ELEMENT_ASSOC" => "CREATED_BY",
        "GROUPS" => [],
        "IBLOCK_ID" => "12",
        "IBLOCK_TYPE" => "polls",
        "LEVEL_LAST" => "Y",
        "LIST_URL" => "",
        "MAX_FILE_SIZE" => "0",
        "MAX_LEVELS" => "100000",
        "MAX_USER_ENTRIES" => "100000",
        "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
        "PROPERTY_CODES" => ["NAME", "22", "23"],
        "PROPERTY_CODES_REQUIRED" => ["22", "NAME"],
        "RESIZE_IMAGES" => "N",
        "SEF_MODE" => "N",
        "STATUS" => "ANY",
        "STATUS_NEW" => "N",
        "USER_MESSAGE_ADD" => "Ваш отзыв был отправлен!",
        "USER_MESSAGE_EDIT" => "",
        "USE_CAPTCHA" => "Y",
        "AJAX_MoDE" => "Y",
    ]
); ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'; ?>
