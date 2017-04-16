<?php

class CheckParamsClass{

    public $errors = array();


    public function doFunc($keyname, $name, &$value, $funcArray){

        $value = trim($value);

        if(!is_array($funcArray)) array($funcArray);

        foreach($funcArray as $func){
            if(count($this->errors[$keyname]) > 0) break;
            $this->errors[$keyname] = $this->$func($name, $value);
        }
    }

    public function checkMailAddress($name, $mailAddress){

    }

    public function existCheck($name, $value){
        if (is_null($value) || $value = "") {
            return "{$name}を入力してください。";
        }
        return null;
    }

    public function lengthCheck($name, $value){

    }

}