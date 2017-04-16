<?php

require_once('../requireTop.php');
require_once(_CLASS_PATH.'userBasicInfoClass.php');
require_once(_CLASS_PATH.'checkParamsClass.php');
require_once(_CLASS_PATH.'smartyParamsClass.php');

$userForm     = new UserBasicInfoClass();
$checkParams  = new CheckParamsClass();
$SPObject     = new SmartyParamsClass($smarty);

try{

    if(count($_POST) == 0) throw new Exception('不正なページ移動です。');


//    $checkParams->doFunc('firstName',        UserBasicInfoClass::FIRST_NAME,         $_POST['firstName'],        array());
//    $checkParams->doFunc('lastName',         UserBasicInfoClass::LAST_NAME,          $_POST['lastName'],         array());
//    $checkParams->doFunc('sex',              UserBasicInfoClass::SEX,                $_POST['sex'],              array());
//
//    $checkParams->doFunc('mailAddress',      UserBasicInfoClass::MAIL_ADDRESS,       $_POST['mailAddress'],      array());
//    $checkParams->doFunc('mailAddressAgain', UserBasicInfoClass::MAIL_ADDRESS_AGAIN, $_POST['mailAddressAgain'], array());
//    $checkParams->doFunc('uid',              UserBasicInfoClass::USER_ID,            $_POST['uid'],              array());
//    $checkParams->doFunc('password',         UserBasicInfoClass::PASSWORD,           $_POST['password'],         array());
//    $checkParams->doFunc('passwordAgain',    UserBasicInfoClass::PASSWORD_AGAIN,     $_POST['passwordAgain'],    array());
//    $checkParams->doFunc('course',           UserBasicInfoClass::MEMBER_COURSE,      $_POST['course'],           array());
//    $checkParams->doFunc('howToPay',         UserBasicInfoClass::HOW_TO_PAY,         $_POST['howToPay'],         array());

    $SPObject->params['firstName']        = $_POST['firstName'];
    $SPObject->params['lastName']         = $_POST['lastName'];
    $SPObject->params['sex']              = $_POST['sex'];
    $SPObject->params['year']             = $_POST['year'];
    $SPObject->params['month']            = $_POST['month'];
    $SPObject->params['day']              = $_POST['day'];
    $SPObject->params['birthday']         = 'ff';
    $SPObject->params['mailAddress']      = $_POST['mailAddress'];
    $SPObject->params['mailAddressAgain'] = $_POST['mailAddressAgain'];
    $SPObject->params['uid']              = $_POST['uid'];
    $SPObject->params['password']         = $_POST['password'];
    $SPObject->params['passwordAgain']    = $_POST['passwordAgain'];
    $SPObject->params['course']           = $_POST['course'];
    $SPObject->params['howToPay']         = $_POST['howToPay'];

    $SPObject->params['sexList']          = UserBasicInfoClass::getSexList();
    $SPObject->params['memberCourseList'] = UserBasicInfoClass::getMemberCourseList();
    $SPObject->params['payList']          = UserBasicInfoClass::getPayList();

    $SPObject->assignSmarty();

if(count($checkParams->errors)>0){
    throw new Exception();
}
}catch(Exception $e){
    echo $e->getMessage();
    exit;
}





$myPath = __FILE__;
require_once('../requireLast.php');