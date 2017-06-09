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

        $view->setData($items);
        $view->display('/../views/news/','all.php');

    }
    public function actionShowOne(){


       if(isset($_GET['id'])){
           $id = $_GET['id'];
           $id = (int)$id;

           $item = News::getOne($id);

           $view = new View();
           $view->setData($item);
           $view->display('/../views/news/','one.php');

       }
    }
}