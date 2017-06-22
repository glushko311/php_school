<?php

/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 22.06.2017
 * Time: 16:04
 */
class CtrlActData
{

    protected function getControllerName($item){
        return str_replace('Controller', '', explode('.', $item)[0]);
    }
    protected function getActionName($act){
        return strtolower(str_replace('action', '', $act));
    }

    public function getCtrlActArray(){
        $controllers = array_diff(scandir(__DIR__ . '/../controllers'), ['.','..']);
        $controllers = array_map(array($this, 'getControllerName'), $controllers);
        foreach($controllers as $controller){
            $controllersActions[strtolower($controller)] = array_map(array($this, 'getActionName'), get_class_methods($controller.'Controller'));
    }
    return $controllersActions;

}


}