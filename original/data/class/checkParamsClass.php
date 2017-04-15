<?php

class CheckParamsClass{

    public $_errors = array();



    public function doFunc($value, $funcArray){

        $errors = array();

        if(!is_array($funcArray)) array($funcArray);

        foreach($funcArray as $func){
            $errors[] = $this->$func($value);
        }



    }

    public function checkMailAddress($mailAddress){

    }

    public function existCheck($value){

        $value = trim($value);


    }

}