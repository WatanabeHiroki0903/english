<?php

require_once('../requireTop.php');
require_once(_CLASS_PATH.'userBasicInfoClass.php');

$userForm      = new UserBasicInfoClass();

$sexList            = $userForm->getSexList();
$memberCourseList   = $userForm->getMemberCourseList();
$payList            = $userForm->getPayList();

$yearList    = $userForm->getYearList();
$monthList   = $userForm->getMonthList();
$dayList     = $userForm->getDayList();

$smarty->assign('sexList', $sexList);
$smarty->assign('memberCourseList', $memberCourseList);
$smarty->assign('payList', $payList);

$smarty->assign('yearList', $yearList);
$smarty->assign('monthList', $monthList);
$smarty->assign('dayList', $dayList);

$myPath = __FILE__;
require_once('../requireLast.php');
