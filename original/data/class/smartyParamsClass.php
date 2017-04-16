<?php

class SmartyParamsClass{

    public $smartyObj   = null;
    public $params      = array();



    public function __construct($smarty){
        $this->smartyObj = $smarty;
    }

    public function setParam($name,$val){
        $this->params[$name] = $val;
    }

    public function getParam($keyname){
        return $this->params[$keyname];
    }

    public function assignSmarty(){
        $this->smartyObj->assign('smartyParams', $this->params);
    }

}