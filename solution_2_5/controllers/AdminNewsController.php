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
        //$view->setData('');
        $view->display('/../views/news/','add_form.php');
    }
    public static function actionAddNews(){
       if(!empty($_POST['title']) && !empty($_POST['text'])){

           $title = htmlspecialchars( $_POST['title']);
           $text = htmlspecialchars($_POST['text']);

           $article = new NewsModel();
           $article->title = $title;
           $article->text = $text;

           $article->save();

           $message = 'Новость была успешно загружена';

           $view = new View();
           $view->message = $message;
           $view->display('news','message.php');

       }else{
           $error = "Неверно введенные либо пустые данные";

           $view = new View();
           $view->message = $error;
           $view->display('news','message.php');
       }
    }
}