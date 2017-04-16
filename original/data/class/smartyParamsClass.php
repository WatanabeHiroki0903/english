<?php

class SmartyParamsClass{

    public $smartyObj   = null;
    public $params      = array();



    public function __construct($smarty){
        $this->smartyObj = $smarty;
    }

    public function setParam($arr){
        foreach($arr as $key => $val){
            $this->params[$key] = $val;
        }
    }

    public function getParam($keyname){
        return $this->params[$keyname];
    }

    public function assignSmarty(){
        $this->smartyObj->assign('smartyParams', $this->params);
    }

}