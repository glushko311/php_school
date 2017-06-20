<?php


class View
{

    const PATH = __DIR__ . '/../views/';

    protected $displayData = [];

    public function __set($name, $val){
        $this->displayData[$name] = $val;
    }

    public function display($dir, $templateName){

        echo $this->render($dir, $templateName);
    }

    public function render($dir, $templateName){
        foreach($this->displayData as $key=>$value){
            $$key = $value;
        }
        ob_start();
        include_once self::PATH . $dir .'/'. $templateName;
        $content = ob_get_clean();
        return $content;
    }
}