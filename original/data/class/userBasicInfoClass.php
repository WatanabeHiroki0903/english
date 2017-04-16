<?php

class UserBasicInfoClass{

    const SEX_MAN     = 1;
    const SEX_WOMAN   = 2;
    const SEX_OTHER   = 3;

    const MEMBER_COURSE_BASIC     = 1;
    const MEMBER_COURSE_PREMIUM   = 2;

    const PAY_CREDIT   = 1;
    const PAY_PHONE    = 2;

    const FIRST_NAME          = '名';
    const LAST_NAME           = '姓';
    const SEX                 = '性別';
    const BIRTHDAY            = '生年月日';
    const MAIL_ADDRESS        = 'メールアドレス';
    const MAIL_ADDRESS_AGAIN  = 'メールアドレス(確認用)';
    const USER_ID             = 'ユーザーID';
    const PASSWORD            = 'パスワード';
    const PASSWORD_AGAIN      = 'パスワード(確認用)';
    const MEMBER_COURSE       = '登録コース';
    const HOW_TO_PAY          = 'お支払い方法';



    public static function getSexList(){

        $sexList = array(
            self::SEX_MAN     =>  '男性',
            self::SEX_WOMAN   =>  '女性',
            self::SEX_OTHER   =>  'その他'
        );

        return $sexList;
    }

    public static function getMemberCourseList(){

        $memberCourseList = array(
            self::MEMBER_COURSE_BASIC    => 'ベーシック会員(無料)',
            self::MEMBER_COURSE_PREMIUM  => 'プレミアム会員(月額980円)'
        );

        return $memberCourseList;
    }

    public static function getPayList(){

        $payList = array(
            self::PAY_CREDIT  =>  'クレジットカード',
            self::PAY_PHONE   =>  'ケータイキャリアまとめて支払い'
        );

        return $payList;
    }

    public static function getYearList(){

        $yearList   = array();
        $yearList[] = '----';
        $thisYear = date('Y');

        for($i = $thisYear; $i>1950; $i--){
            $yearList[] = $i;
        }

        return $yearList;
    }

    public static function getMonthList(){

        $monthList   = array();
        $monthList[] = '--';

        for($i=1; $i<13; $i++){
            $monthList[] = $i;
        }

        return $monthList;
    }

    public static function getDayList(){

        $dayList   = array();
        $dayList[] = '--';

        for($i=1; $i<32; $i++){
            $dayList[] = $i;
        }

        return $dayList;
    }
    public static function is_selected($optVal, $postVal){
        if($optVal == $postVal){
            echo 'selected';
        }
    }

    public static function is_checked($optVal, $postVal){
        if ($optVal == $postVal) {
            echo 'checked';
        }
    }
}