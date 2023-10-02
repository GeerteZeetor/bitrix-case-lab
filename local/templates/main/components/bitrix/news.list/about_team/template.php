<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<div id="team" class="team-area bg-color pt-90 pb-60">
  <div class="container">
    <div class="row">
      <div class="section-heading text-center mb-70">
        <h2>Команда</h2>
        <p>Творческие и гениальные. Мастера своего дела</p>
      </div>
    </div>
    <div class="row">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
      <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="col-lg-4 col-md-4 col-sm-4">
        <div class="single-team mb-30">
          <div class="team-img">
            <img src="<?= $arItem['DETAIL_PICTURE']['SRC']; ?>" alt=""/>
            <div class="team-text">
              <h4><?= $arItem['PROPERTIES']['hey_speak']['VALUE']; ?></h4>
              <p><?= $arItem['DETAIL_TEXT']; ?>
              </p>
              <div class="team-icon">
                <a href="<?= $arItem['PROPERTIES']['link_facebook']['VALUE']; ?>"><i class="fa fa-facebook"></i></a>
                <a href="<?= $arItem['PROPERTIES']['link_twitter']['VALUE']; ?>"><i class="fa fa-twitter"></i></a>
                <a href="<?= $arItem['PROPERTIES']['link_linkedin']['VALUE']; ?>"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="team-name text-center">
            <h4><?= $arItem['NAME']; ?></h4>
            <h5><?= $arItem['PROPERTIES']['job_title']['VALUE']; ?></h5>
          </div>
        </div>
      </div>
      <?endforeach;?>
    </div>
  </div>
</div>
<? endif; ?>
