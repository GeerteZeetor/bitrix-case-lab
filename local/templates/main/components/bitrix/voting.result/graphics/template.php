<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!empty($arResult["ERROR_MESSAGE"])):
  ?>
  <div class="vote-note-box vote-note-error">
    <div class="vote-note-box-text"><?= ShowError($arResult["ERROR_MESSAGE"]) ?></div>
  </div>
<?
endif;

if (!empty($arResult["OK_MESSAGE"])):
  ?>
  <div class="vote-note-box vote-note-note">
    <div class="vote-note-box-text"><?= ShowNote($arResult["OK_MESSAGE"]) ?></div>
  </div>
<?
endif;
if (empty($arResult["VOTE"]) || empty($arResult["QUESTIONS"])):
  return true;
endif;
?>
<? if (!empty($arResult["VOTE"])): ?>
  <div class="background">
    <div class="container container-graph">
      <?php foreach ($arResult["QUESTIONS"] as $arQuestion) : ?>
        <h1 class="title-1 title-graph"><?= $arQuestion["QUESTION"]; ?></h1>
        <div class="simple-bar-chart">
          <?php foreach ($arQuestion["ANSWERS"] as $arAnswer) : ?>
            <div class="item"
                 style="--clr: #<?= htmlspecialcharsbx($arAnswer["COLOR"]) ?>; --val: <?= round($arAnswer["BAR_PERCENT"] * 0.8); ?>">
              <div class="label"><?= $arAnswer["MESSAGE"] ?></div>
              <div class="value"><?= $arAnswer["COUNTER"]; ?> (<?= round($arAnswer["BAR_PERCENT"] * 0.8); ?>%)</div>
            </div>
          <? endforeach; ?>
        </div>
        <hr id="hr">
      <? endforeach; ?>
    </div>
  </div>
<? endif; ?>