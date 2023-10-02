<?

use Bitrix\Main\Localization\Loc;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

$name = Loc::getMessage("MFT_NAME");
if (empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])) {
  $name .= '*';
}
$email = Loc::getMessage("MFT_EMAIL");
if (empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])) {
  $email .= '*';
}
$phone = Loc::getMessage("MFT_PHONE");
if (empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])) {
  $phone .= '*';
}
$message = Loc::getMessage("MFT_MESSAGE");
if (empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])) {
  $message .= '*';
}
?>
  <div class="col-md-8">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <?php if (!empty($arResult['ERROR_MESSAGE'])) : ?>
          <?php foreach ($arResult['ERROR_MESSAGE'] as $error) : ?>
            <span class="text-danger"><?= $error; ?></span><br>
          <? endforeach; ?>
        <?php elseif (!$arResult['OK_MESSAGE']) : ?>
          <span class="text-success"><?= $arResult['OK_MESSAGE']; ?></span><br>
        <? endif; ?>
      </div>
    </div>
    <div class="row">
      <form id="contact-form" class="default-form" action="<?= POST_FORM_ACTION_URI ?>" method="POST">
        <?= bitrix_sessid_post() ?>
        <div class="col-md-4 col-sm-6">
          <input type="text" name="user_name" value="<?= $arResult["AUTHOR_NAME"] ?>"
                 placeholder="<?= $name; ?>"/>
        </div>
        <div class="col-md-4 col-sm-6">
          <input type="text" name="user_email" value="<?= $arResult["AUTHOR_EMAIL"] ?>"
                 placeholder="<?= $email; ?>"/>
        </div>
        <div class="col-md-4 col-sm-12">
          <input type="text" name="user_phone" value="<?= $arResult["AUTHOR_PHONE"] ?>"
                 placeholder="<?= $phone; ?>"/>
        </div>
        <div class="col-md-12 col-sm-12">
          <textarea name="MESSAGE" cols="30" rows="10"
                    placeholder="<?= $message; ?>"><?= $arResult["MESSAGE"] ?></textarea>
          <!--              <button class="btn mt-30">Отправить</button>-->
          <input style="width: initial" class="btn mt-30" type="submit" name="submit" value="<?= Loc::getMessage("MFT_SUBMIT") ?>">
        </div>
        <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
      </form>
      <p class="form-messege"></p>
    </div>
  </div>
</div>
