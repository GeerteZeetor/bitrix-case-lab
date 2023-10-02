<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

if (empty($arResult)) {
  return "";
}

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();
if (!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css)) {
  $strReturn .= '<link href="' . CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css") . '" type="text/css" rel="stylesheet" />' . "\n";
}

$res = '<div class="col-md-5 col-sm-6">
          <div class="breadcrumb-menu">
           <ol class="breadcrumb text-right">';

$elCount = count($arResult);

foreach ($arResult as $index => $item) {
  $link = (!empty($item["LINK"]) && $index < ($elCount -1)) ? $item["LINK"] : '#';
  $title = $item["TITLE"] ?? '';
  $res .= '<li>
              <a href="' . $link . '">' . $title . '</a>
           </li>';
}
$res .= '    </ol>
          </div>
      </div>';

return $res;

