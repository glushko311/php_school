<?php


class View
{

    protected $displayData;

    public function setData($items = ''){
        $this->displayData = $items;
    }

    public function display($dir, $templateName){
        $items = $this->displayData;
        include_once __DIR__ . $dir . $templateName;
    }
}