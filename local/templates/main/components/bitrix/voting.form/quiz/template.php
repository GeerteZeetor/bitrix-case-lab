<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?= ShowError($arResult["ERROR_MESSAGE"]); ?>
<?= ShowNote($arResult["OK_MESSAGE"]); ?>

<? if (!empty($arResult["VOTE"])): ?>
  <div class="container-quiz">
    <form action="<?= POST_FORM_ACTION_URI ?>" method="post" class="quiz-vote-form vote-form">
      <input type="hidden" name="vote" value="Y">
      <input type="hidden" name="PUBLIC_VOTE_ID" value="<?= $arResult["VOTE"]["ID"] ?>">
      <input type="hidden" name="VOTE_ID" value="<?= $arResult["VOTE"]["ID"] ?>">
      <?= bitrix_sessid_post() ?>
      <?php foreach ($arResult['QUESTIONS'] as $keyQuest => $question) : ?>
        <div class="quiz" id="quiz<?= $keyQuest; ?>">
          <div class="quiz-header" id="header">
            <!-- Вопрос -->
            <h2 class="title title-quest">
              <?= $question['QUESTION']; ?>
            </h2>
                <img class="img-loader" src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/loader_<?= $keyQuest; ?>.png" alt="">
            <div class="progress2 progress-moved-<?= $keyQuest; ?>">
              <div class="progress-bar2">
              </div>
            </div>
          </div>
          <ul class="quiz-list" id="list">
            <?php foreach ($question["ANSWERS"] as $answer) : ?>
              <li>
                <label class="label-answer">
                  <input type="radio" class="answer input" name="vote_radio_<?= $answer["QUESTION_ID"] ?>"
                         value="<?= $answer["ID"] ?>" <?= $answer["~FIELD_PARAM"] ?>/>
                  <!-- Ответ -->
                  <span class="text-content"><?= $answer['MESSAGE']; ?></span>
                </label>
              </li>
            <? endforeach; ?>
          </ul>
          <button class="quiz-submit submit" name="vote">Далее</button>
        </div>
      <? endforeach; ?>
      <dialog id="dialog">
        <div style="justify-content: center">
          <img src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/up.jpg" alt="finger up" class="dialog-img">
        </div>
        <h2>Спасибо за уделённое время!</h2>
        <img src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/modal_img_loader.png" alt="finger up" class="dialog-img-loader">
        <div class="progress2 porg progress-moved-4">
          <div class="progress-bar2">
          </div>
        </div>
        <p>Нажмите закрыть, чтобы закончить и перейти на главную станицу</p>
        <input class="x" type="submit" name="vote" value="Закрыть"/>
        <p>Проголосовало: <?= $arResult['QUESTIONS'][1]['COUNTER'] + 1; ?> человек</p>
      </dialog>
    </form>
  </div>
<? endif ?>
