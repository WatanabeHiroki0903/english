<?php

$myTplPath = str_replace(_HTML_JPN_PATH, _TEMPLATES_JPN_PATH, $myPath);
$myTplPath = str_replace('.php', '.tpl', $myTplPath);

$smarty->display($myTplPath);

$smarty->display(_TEMPLATES_JPN_PATH.'footer.tpl');