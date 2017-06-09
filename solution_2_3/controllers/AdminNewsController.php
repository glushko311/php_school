<?php

/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 09.06.2017
 * Time: 17:47
 */
class AdminNewsController
{
    public static function actionShowForm(){

        $view = new View();
        $view->setData('');
        $view->display('/../views/news/','add_form.php');
    }
    public static function actionAddNews(){
       if(!empty($_POST['title']) && !empty($_POST['text'])){

           $title = htmlspecialchars( $_POST['title']);
           $text = htmlspecialchars($_POST['text']);

           $sql = new Sql();
           $query = 'INSERT INTO t_news (title, text) VALUES ( \''.$title.'\', \''.$text.'\')';
           $sql->queryAll($query);
           $message = 'Новость была успешно загружена';

           $view = new View();
           $view->setData($message);
           $view->display('/../views/news/','message.php');

       }else{
           $error = "Неверно введенные либо пустые данные";

           $view = new View();
           $view->setData($error);
           $view->display('/../views/news/','message.php');
       }
    }
}