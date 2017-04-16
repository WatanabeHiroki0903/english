<?php

require_once('../requireTop.php');
require_once(_CLASS_PATH.'userBasicInfoClass.php');
require_once(_CLASS_PATH.'smartyParamsClass.php');

$userForm   = new UserBasicInfoClass();
$SPObj      = new SmartyParamsClass($smarty);

$SPObj->params['sexList']            = $userForm->getSexList();
$SPObj->params['memberCourseList']   = $userForm->getMemberCourseList();
$SPObj->params['payList']            = $userForm->getPayList();

$SPObj->params['yearList']    = $userForm->getYearList();
$SPObj->params['monthList']   = $userForm->getMonthList();
$SPObj->params['dayList']     = $userForm->getDayList();

$SPObj->assignSmarty();

$myPath = __FILE__;
require_once('../requireLast.php');
