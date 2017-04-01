<?php

require_once('pass.php');
require_once(SSMARTY.'/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = SSMARTY.'templates';
$smarty->compile_dir = SSMARTY.'templates_c';

$smarty->assign('CSS', PCSS);
$smarty->assign('JS', PJS);
$smarty->assign('HTML', PHTML);
$smarty->assign('BOOTSTRAP', BOOTSTRAP);

$smarty->display(SSMARTY.'templates/header.tpl');
$smarty->display(SSMARTY.'templates/menu2.tpl');


