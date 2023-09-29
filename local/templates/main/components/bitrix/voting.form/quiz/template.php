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
            <!-- Заголовок вопроса -->
            <h2 class="title">
              <? echo $arResult["VOTE"]["TITLE"]; ?>
            </h2>
            <!-- Вопрос -->
            <h2 class="title title-quest">
              <?= $question['QUESTION']; ?>
            </h2>
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
        <p>Нажмите отправить, чтобы закончить и перейти на главную станицу.</p>
        <input class="x" type="submit" name="vote" value="Отправить"/>
      </dialog>
    </form>
  </div>
<? endif ?>
