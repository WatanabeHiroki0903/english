<?php

$myPath = str_replace(SHTML, SSMARTY.'templates\\', $myPath);
$myPath = str_replace('.php', '.tpl', $myPath);
$smarty->display($myPath);

$smarty->display(SSMARTY.'templates/footer.tpl');