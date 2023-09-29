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
<!-- Контент для детальной страниыцы портфолио -->
<?php if (!empty($arResult['ID'])) : ?>


  <div class="single-portfolio-area pt-90 pb-60">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="portfolio-details">
            <h3><?= $arResult['PROPERTIES']['title_detail']['VALUE'] ?? ''; ?></h3>
            <?php if (!empty($arResult['PROPERTIES']['description']['VALUE'])) : ?>
              <?php foreach ($arResult['PROPERTIES']['description']['VALUE'] as $keyValue => $propValue) : ?>
                <?php if (!empty($arResult['PROPERTIES']['description']['DESCRIPTION'][$keyValue])) : ?>
                  <span class="text-colort-blue">
                  <?= $arResult['PROPERTIES']['description']['DESCRIPTION'][$keyValue]; ?>
                </span>
                <? endif; ?>
                <?php if (!empty($propValue)) : ?>
                  <p><?= $propValue['TEXT']; ?></p>
                <? endif; ?>

              <? endforeach; ?>
            <? endif; ?>
          </div>
        </div>

        <?php if (!empty($arResult['PROPERTIES']['add_info']['VALUE'])) : ?>
          <div class="col-md-5">
            <div class="portfolio-meta">
              <ul>
                <?php foreach ($arResult['PROPERTIES']['add_info']['VALUE'] as $keyValue => $propValue) : ?>
                  <li>
                    <span><b><?= $propValue ?? ''; ?></b> </span> <?= $arResult['PROPERTIES']['add_info']['DESCRIPTION'][$keyValue] ?? ''; ?>
                  </li>
                <? endforeach; ?>
              </ul>
              <?php if ($arResult['PROPERTIES']['link']['VALUE']) : ?>
                <a target="_blank" href="<?= $arResult['PROPERTIES']['link']['DESCRIPTION'] ?? ''; ?>"
                   class="btn mt-30"><?= $arResult['PROPERTIES']['link']['VALUE'] ?? ''; ?>
                </a>
              <? endif; ?>
            </div>
          </div>
        <? endif; ?>
      </div>
    </div>
  </div>



  <!-- Фотогалерея -->
  <?php if (!empty($arResult['PROPERTIES']['gallery']['VALUE'])) : ?>
    <div class="img-gallery-area pt-30 pb-60">
      <div class="container">
        <div class="row">
          <?php foreach ($arResult['PROPERTIES']['photos'] as $photo) : ?>
            <div class="col-md-6 col-sm-4">
              <div class="img-gallery hover-bg-opacity mb-30">
                <a class="image-link" href="<?= $photo['src']; ?>">
                  <img src="<?= $photo['src']; ?>" alt=""/></a>
              </div>
            </div>
          <? endforeach; ?>
        </div>
      </div>
    </div>
  <? endif; ?>
<? endif; ?>
