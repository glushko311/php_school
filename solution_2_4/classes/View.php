<?php


class View
{

    const PATH = __DIR__ . '/../views/';

    protected $displayData = [];

    public function setData($name, $value){
        $this->displayData[$name] = $value;
    }

    public function display($dir, $templateName){

        foreach($this->displayData as $key=>$value){
            $$key = $value;
        }

        include_once self::PATH . $dir .'/'. $templateName;
    }
}