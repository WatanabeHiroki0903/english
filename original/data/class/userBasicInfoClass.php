<?php

class UserBasicInfoClass{

    const SEX_MAN     = 1;
    const SEX_WOMAN   = 2;
    const SEX_OTHER   = 3;

    const MEMBER_COURSE_BASIC     = 1;
    const MEMBER_COURSE_PREMIUM   = 2;

    const PAY_CREDIT   = 1;
    const PAY_PHONE    = 2;




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
        return 'ff';
    }

    public static function getMonthList(){
        return 'ff';
    }

    public static function getDayList(){
        return 'ff';
    }

}