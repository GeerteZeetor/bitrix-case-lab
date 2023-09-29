<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<? if (!empty($arResult['ITEMS'])): ?>

  <div class="slider-active dots-style custom owl-carousel owl-theme owl-loaded">
    <? foreach ($arResult['ITEMS'] as $arItem) : ?>
      <?
      $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
      $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
      ?>
      <div class="" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
        <? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
          <a href="<?= $arItem['PROPERTIES']['link']['VALUE'] ?? ''; ?>" target="_blank">
            <div class="slider-img bg-opacity-black-60"
                 style="background:url(<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>)"></div>
          </a>
        <? endif; ?>
        <a href="<?= $arItem['PROPERTIES']['link']['VALUE'] ?? ''; ?>" target="_blank">
          <div class="slider-content slider-style-5 slider-style-2 slider-style-4 text-center z-index-5">
            <span><?= $arItem['NAME'] ?? ''; ?></span>
            <h2><?= $arItem['PREVIEW_TEXT'] ?? ''; ?></h2>
          </div>
        </a>
      </div>
    <? endforeach; ?>
  </div>

<? endif; ?>

