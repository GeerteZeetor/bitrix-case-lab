<?php

require __DIR__ . '/include/functions.php';

global $SiteExpireDate;
if (DEMO && ($SiteExpireDate < time())) {
  $SiteExpireDate = time() * 1.1;
}