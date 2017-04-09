<?php

require_once('../requireMember.php');
$myPath = __FILE__;
$tplPath = _TEMPLATES_JPN_MEMBERPAGE_PATH.'profile/left.tpl';
$smarty->assign('TPL', $tplPath);

require_once('../../requireLast.php');