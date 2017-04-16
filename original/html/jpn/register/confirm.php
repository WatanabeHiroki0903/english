<?php

require_once('../requireTop.php');
require_once(_CLASS_PATH.'userBasicInfoClass.php');
require_once(_CLASS_PATH.'checkParamsClass.php');
require_once(_CLASS_PATH.'smartyParamsClass.php');

$userForm     = new UserBasicInfoClass();
$checkParams  = new CheckParamsClass();
$SPObject     = new SmartyParamsClass($smarty);

try{

    if(!isset($_POST)) throw new Exception('不正なページ移動です。');

    $SPObject->params['firstName']        = $_POST['firstName'];
    $SPObject->params['lastName']         = $_POST['lastName'];
    $SPObject->params['sex']              = $_POST['sex'];
    $SPObject->params['year']             = $_POST['year'];
    $SPObject->params['month']            = $_POST['month'];
    $SPObject->params['day']              = $_POST['day'];
    $SPObject->params['mailAddress']      = $_POST['mailAddress'];
    $SPObject->params['mailAddressAgain'] = $_POST['mailAddress2'];
    $SPObject->params['uid']              = $_POST['uid'];
    $SPObject->params['password']         = $_POST['password'];
    $SPObject->params['passwordAgain']    = $_POST['password2'];
    $SPObject->params['course']           = $_POST['course'];
    $SPObject->params['howToPay']         = $_POST['howToPay'];

    $checkParams->doFunc('firstName',        UserBasicInfoClass::FIRST_NAME,         $SPObject->params['firstName'],        array());
    $checkParams->doFunc('lastName',         UserBasicInfoClass::LAST_NAME,          $SPObject->params['lastName'],         array());
    $checkParams->doFunc('sex',              UserBasicInfoClass::SEX,                $SPObject->params['sex'],              array());

    $checkParams->doFunc('mailAddress',      UserBasicInfoClass::MAIL_ADDRESS,       $SPObject->params['mailAddress'],      array());
    $checkParams->doFunc('mailAddressAgain', UserBasicInfoClass::MAIL_ADDRESS_AGAIN, $SPObject->params['mailAddressAgain'], array());
    $checkParams->doFunc('uid',              UserBasicInfoClass::USER_ID,            $SPObject->params['uid'],              array());
    $checkParams->doFunc('password',         UserBasicInfoClass::PASSWORD,           $SPObject->params['password'],         array());
    $checkParams->doFunc('passwordAgain',    UserBasicInfoClass::PASSWORD_AGAIN,     $SPObject->params['passwordAgain'],    array());
    $checkParams->doFunc('course',           UserBasicInfoClass::MEMBER_COURSE,      $SPObject->params['course'],           array());
    $checkParams->doFunc('howToPay',         UserBasicInfoClass::HOW_TO_PAY,         $SPObject->params['howToPay'],         array());


}catch(Exception $e){

}





$myPath = __FILE__;
require_once('../requireLast.php');