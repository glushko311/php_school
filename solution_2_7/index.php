<?php
/**
 * Created by PhpStorm.
 * User: дом
 * Date: 04.06.2017
 * Time: 22:52
 */

error_reporting(E_ALL);

require_once __DIR__ . '/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'ShowAll';

try{
    $controllerClassName = $ctrl . 'Controller';
    require_once __DIR__ . '/controllers/' . $controllerClassName .'.php';

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


