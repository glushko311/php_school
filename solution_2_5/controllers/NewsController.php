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
        $news = NewsModel::findAll();

        $view = new View();
        $view->items = $news;
        $view->display('news','all.php');

    }
    public function actionFindOneById(){

       if(isset($_GET['id'])){
           $id = $_GET['id'];
           $id = (int)$id;


           $news[] =  NewsModel::findOne($id);

           $view = new View();
           $view->items = $news;
           $view->display('news','one.php');

       }
    }
    public function actionAddRecord(){

        $article = new NewsModel();
        $article->title = 'Привет Джа!';
        $article->text = 'Джа мы в тебя верим!';

        $article->insert();
    }

}