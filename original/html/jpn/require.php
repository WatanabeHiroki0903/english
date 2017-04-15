<?php
ini_set('display_errors', 1);

require_once('/vagrant/demo_site/original/html/path.inc');
require_once(_HTML_PATH. 'jpn/path.inc');
require_once(_SMARTY_PATH.'/libs/Smarty.class.php');

$smarty = new Smarty();
$smarty->template_dir = _SMARTY_PATH.'templates';
$smarty->compile_dir  = _SMARTY_PATH.'templates_c';

$smarty->display(_TEMPLATES_JPN_PATH.'header.tpl');


