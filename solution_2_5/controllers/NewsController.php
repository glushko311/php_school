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

        $db = new DB();
        $res = $db->query('SELECT * FROM t_news WHERE id=:id',[':id'=>1]);
        var_dump($res);
        die;
//        $news = News::getAll();
//
//        $view = new View();
//        $view->items = $news;
//        $view->display('news','all.php');

    }
    public function actionShowOne(){

//       if(isset($_GET['id'])){
//           $id = $_GET['id'];
//           $id = (int)$id;
//           $news[] =  News::getOne($id);
//
//
//
//           $view = new View();
//           $view->items = $news;
//           $view->display('news','one.php');
//
//       }
    }
}