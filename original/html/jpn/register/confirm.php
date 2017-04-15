<?php

require_once('../requireTop.php');
require_once(_CLASS_PATH.'userBasicInfoClass.php');
require_once(_CLASS_PATH.'checkParamsClass.php');

$userForm     = new UserBasicInfoClass();
$checkParams  = new CheckParamsClass();

try{

    $errors = array();

    if(!isset($_POST)) throw new Exception('不正なページ移動です。');

    $firstName        = $_POST['firstName'];
    $lastName         = $_POST['lastName'];
    $sex              = $_POST['sex'];
    $year             = $_POST['year'];
    $month            = $_POST['month'];
    $day              = $_POST['day'];
    $mailAddress      = $_POST['mailAddress'];
    $mailAddressAgain = $_POST['mailAddress2'];
    $uid              = $_POST['uid'];
    $password         = $_POST['password'];
    $passwordAgain    = $_POST['password2'];
    $course           = $_POST['course'];
    $howToPay         = $_POST['howToPay'];

    $errors['firstName']        = $checkParams->doFunc($userForm->FIRST_NAME,         $firstName,        array());
    $errors['lastName']         = $checkParams->doFunc($userForm->LAST_NAME,          $lastName,         array());
    $errors['sex']              = $checkParams->doFunc($userForm->SEX,                $sex,              array());

    $errors['mailAddress']      = $checkParams->doFunc($userForm->MAIL_ADDRESS,       $mailAddress,      array());
    $errors['mailAddressAgain'] = $checkParams->doFunc($userForm->MAIL_ADDRESS_AGAIN, $mailAddressAgain, array());
    $errors['uid']              = $checkParams->doFunc($userForm->USER_ID,            $uid,              array());
    $errors['password']         = $checkParams->doFunc($userForm->PASSWORD,           $password,         array());
    $errors['passwordAgain']    = $checkParams->doFunc($userForm->PASSWORD_AGAIN,     $passwordAgain,    array());
    $errors['course']           = $checkParams->doFunc($userForm->MEMBER_COURSE,      $course,           array());
    $errors['howToPay']         = $checkParams->doFunc($userForm->HOW_TO_PAY,         $howToPay,         array());


}catch(Exception $e){

}





$myPath = __FILE__;
require_once('../requireLast.php');