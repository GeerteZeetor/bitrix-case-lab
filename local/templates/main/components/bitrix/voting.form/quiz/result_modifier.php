<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult["VOTE"])):
	return false;
elseif (empty($arResult["QUESTIONS"])):
	return true;
endif;

foreach ($arResult["QUESTIONS"] as $questionKey => $arQuestion):
	$bFountActive = false;
	$FirstAnswerKey = false;
	$ActiveAnswerKey = false;
	foreach ($arQuestion["ANSWERS"] as $answerKey => $arAnswer):
		if ($FirstAnswerKey === false):
			$FirstAnswerKey = $answerKey;
		endif;
		$arAnswer["FIELD_PARAM"] = ($arAnswer["FIELD_PARAM"] <> '' ? $arAnswer["FIELD_PARAM"] : "");
      if ($arAnswer["FIELD_TYPE"] == 0) {
        if ($_REQUEST["vote_radio_" . $arAnswer["QUESTION_ID"]] == $arAnswer["ID"]):
          $bFountActive = true;
          $arAnswer["FIELD_PARAM"] .= " checked='checked' ";
        endif;
      }
		if ($bFountActive):
			$arResult["QUESTIONS"][$questionKey]["ANSWERS"][$answerKey] = $arAnswer;
			break;
		endif;
	endforeach; 
	if (!$bFountActive && $FirstAnswerKey !== false):
		$arAnswer = $arResult["QUESTIONS"][$questionKey]["ANSWERS"][$FirstAnswerKey];
		$arAnswer["FIELD_PARAM"] = ($arAnswer["FIELD_PARAM"] <> '' ? $arAnswer["FIELD_PARAM"] : "");
      if ($arAnswer["FIELD_TYPE"] == 0) {
        $arAnswer["FIELD_PARAM"] .= " checked='checked' ";
      }
		$arResult["QUESTIONS"][$questionKey]["ANSWERS"][$FirstAnswerKey] = $arAnswer;
	endif;
endforeach;
