<?php
/**
 * Created by PhpStorm.
 * User: дом
 * Date: 05.06.2017
 * Time: 1:01
 */
require_once __DIR__.'/class/sql.php';
require_once __DIR__.'/class/article.php';
require_once  __DIR__.'/class/news.php';

if(empty($_POST['title'])){
    require_once __DIR__.'/views/add_news.php';
}elseif(!empty($_POST['title']) && !empty($_POST['news_text'])){
    $title = htmlspecialchars($_POST['title']);
    $text = htmlspecialchars($_POST['news_text']);
    News::add_news($title, $text);
    header('Location: /php_school/solution_2_2/index.php');
    die;
}else{
    header('Location: /php_school/solution_2_2/index.php');
    die;
}
