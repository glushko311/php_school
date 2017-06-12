<?php

/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 09.06.2017
 * Time: 14:29
 */
class NewsController
{
    public function actionShowAll(){

        $items = News::getAll();

        $view = new View();
        $view->setData('items', $items);
        $view->display('news','all.php');

    }
    public function actionShowOne(){

       if(isset($_GET['id'])){
           $id = $_GET['id'];
           $id = (int)$id;
           $items[] =  News::getOne($id);

           $view = new View();
           $view->setData('items', $items);
           $view->display('news','one.php');

       }
    }
}