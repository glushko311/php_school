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
        include __DIR__ . '/../views/news/all.php';
    }
    public function actionShowOne(){


       if(isset($_GET['id'])){
           $id = $_GET['id'];
           $id = (int)$id;

           $item = News::getOne($id);
           include __DIR__ . '/../views/news/OneView.php';
       }
    }
}