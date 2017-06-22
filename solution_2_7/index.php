<?php
/**
 * Created by PhpStorm.
 * User: дом
 * Date: 04.06.2017
 * Time: 22:52
 */

error_reporting(E_ALL);
require_once __DIR__ . '/autoload.php';

$checker = new CtrlActData();
$controllersActions = $checker->getCtrlActArray();


$path = parse_url(($_SERVER['REQUEST_URI']), PHP_URL_PATH);
$pathParts = explode('/', $path);



if(!empty($pathParts[1] && !empty($pathParts[2]))){
    $ctrl = $pathParts[1];
    $act = $pathParts[2];
}else{
    $ctrl = 'News';
    $act = 'ShowAll';
}

try{
    if(!in_array(strtolower($ctrl), array_keys($controllersActions))){
        $e = new Exception404();
        throw $e;

    }else{
        $controllerClassName = $ctrl . 'Controller';
        require_once __DIR__ . '/controllers/' . $controllerClassName .'.php';
        if(!in_array(strtolower($act), $controllersActions[strtolower($ctrl)])){
            $e = new Exception404();
            throw $e;
        }
    }




    $method = 'action' . $act;
    $controller = new $controllerClassName;
    $controller->$method();

}catch(Exception $e){

    $log = new Log();
    $log->createMessage($e->getCode(), $e->classError);
    $log->addError();

    $view = new View();
    $view->code = $e->getCode();
    $view->className = $e->classError;

    $view->display('news','error.php');
}



