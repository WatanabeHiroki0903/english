<?php

class SmartyParamsClass{
    public $smartyParams = array();

    public function __construct($smarty){
        $this->smartyObj = $smarty;
    }

    public function setParam($name,$val){
        $this->smartyParams[$name] = $val;
    }

    public function assignSmarty(){
        $this->smartyObj->assign('smartyParams', $this->smartyParams);
    }

}