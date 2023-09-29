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
  <section class="project-count-area brand-bg pad-90">
    <div class="container">
      <div class="row">
        <? foreach ($arResult['ITEMS'] as $arItem) : ?>
          <div class="col-md-3 col-sm-3">
            <div class="single-count white-text text-center">
              <?= $arItem['DETAIL_TEXT'] ?? ''; ?>
              <h2 class="counter"><?= $arItem['PREVIEW_TEXT'] ?? ''; ?></h2>
              <p><?= $arItem['NAME'] ?? ''; ?></p>
            </div>
          </div>
        <? endforeach; ?>
      </div>
    </div>
  </section>
<? endif; ?>
