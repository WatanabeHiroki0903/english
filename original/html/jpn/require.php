<?php
ini_set('display_errors', 1);

require_once('/vagrant/demo_site/original/html/path.inc');
require_once(_HTML_PATH. 'jpn/path.inc');
require_once(_SMARTY_PATH.'/libs/Smarty.class.php');

$smarty = new Smarty();
$smarty->template_dir = _SMARTY_PATH.'templates';
$smarty->compile_dir  = _SMARTY_PATH.'templates_c';

$smarty->assign('_FT_CSS_PATH',                    _FT_CSS_PATH);
$smarty->assign('_FT_IMAGES_PATH',                 _FT_IMAGES_PATH);
$smarty->assign('_FT_JS_PATH',                     _FT_JS_PATH);
$smarty->assign('_FT_BOOTSTRAP_PATH',              _FT_BOOTSTRAP_PATH);

$smarty->assign('_FT_HTML_JPN_PATH',               _FT_HTML_JPN_PATH);

$smarty->assign('_FT_HTML_JPN_REGISTER_PATH',      _FT_HTML_JPN_REGISTER_PATH);
$smarty->assign('_FT_HTML_JPN_MEMBERPAGE_PATH',    _FT_HTML_JPN_MEMBERPAGE_PATH);
$smarty->assign('_FT_HTML_JPN_FORGOTTEN_PATH',     _FT_HTML_JPN_FORGOTTEN_PATH);
$smarty->assign('_FT_HTML_JPN_ABOUT_PATH',         _FT_HTML_JPN_ABOUT_PATH);

$smarty->display(_TEMPLATES_JPN_PATH.'header.tpl');


