<?php
session_start();

require_once('../requireTop.php');
require_once(_CLASS_PATH.'userBasicInfoClass.php');
require_once(_CLASS_PATH.'checkParamsClass.php');
require_once(_CLASS_PATH.'smartyParamsClass.php');
require_once(_CLASS_PATH.'pdoClass.php');

$userForm     = new UserBasicInfoClass();
$checkParams  = new CheckParamsClass();
$SPObj        = new SmartyParamsClass($smarty);

$mode = $checkParams->getMode();

$SPObj->params['sexList']            = $userForm->getSexList();
$SPObj->params['memberCourseList']   = $userForm->getMemberCourseList();
$SPObj->params['payList']            = $userForm->getPayList();

$SPObj->params['yearList']    = $userForm->getYearList();
$SPObj->params['monthList']   = $userForm->getMonthList();
$SPObj->params['dayList']     = $userForm->getDayList();

switch($mode){
    case 'first':
        $tmpName = 'index.tpl';
        break;

    case 'edit':
        $SPObj->setParam($_POST);
        $tmpName = 'index.tpl';

        break;

    case 'confirm':
//        $checkParams->doFunc('firstName',        UserBasicInfoClass::FIRST_NAME,         $_POST['firstName'],        array());
//        $checkParams->doFunc('lastName',         UserBasicInfoClass::LAST_NAME,          $_POST['lastName'],         array());
//        $checkParams->doFunc('sex',              UserBasicInfoClass::SEX,                $_POST['sex'],              array());
//
//        $checkParams->doFunc('mailAddress',      UserBasicInfoClass::MAIL_ADDRESS,       $_POST['mailAddress'],      array());
//        $checkParams->doFunc('mailAddressAgain', UserBasicInfoClass::MAIL_ADDRESS_AGAIN, $_POST['mailAddressAgain'], array());
//        $checkParams->doFunc('uid',              UserBasicInfoClass::USER_ID,            $_POST['uid'],              array());
//        $checkParams->doFunc('password',         UserBasicInfoClass::PASSWORD,           $_POST['password'],         array());
//        $checkParams->doFunc('passwordAgain',    UserBasicInfoClass::PASSWORD_AGAIN,     $_POST['passwordAgain'],    array());
//        $checkParams->doFunc('course',           UserBasicInfoClass::MEMBER_COURSE,      $_POST['course'],           array());
//        $checkParams->doFunc('howToPay',         UserBasicInfoClass::HOW_TO_PAY,         $_POST['howToPay'],         array());

        $SPObj->setParam($_POST);
        $SPObj->params['birthday'] = $_POST['year'].' / '.$_POST['month'].' / '.$_POST['day'];

        if(count($checkParams->errors)>0){
            $tmpName = 'index.tpl';
        }else{
            $tmpName = 'confirm.tpl';
        }
        break;

    case 'complete':
        try{
            $pdo = PdoClass::dbConnection();
            
        }catch(PDOException $e){
            echo $e->getMessage;
            exit;
        }


        $tmpName = 'complete.tpl';

        //データベースに登録
        break;

    case 'error':
        $tmpName = 'error.tpl';
        break;

    default:
        $tmpName = 'error.tpl';
        break;
}

$SPObj->params['token'] = md5(uniqid(rand(), true));
$_SESSION['token']      = $SPObj->params['token'];

$SPObj->assignSmarty();

$smarty->display(_TEMPLATES_JPN_REGISTER_PATH.$tmpName);
$smarty->display(_TEMPLATES_JPN_PATH.'footer.tpl');