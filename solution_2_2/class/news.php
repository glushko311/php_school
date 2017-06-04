<?php

/**
 * Created by PhpStorm.
 * User: дом
 * Date: 04.06.2017
 * Time: 23:19
 */
require_once __DIR__.'/article.php';


class News extends Article
{

    static public function add_news($title, $text, $img = NULL){
        $sql = new Sql();
        if(!$img){
            $img = 'NULL';
        }
        $query = 'INSERT INTO t_article (title, img, text, vote) VALUES ( \''.$title.'\' , '.$img.', \''.$text.'\', 0);';
        echo $query;
        $sql->sendQuery($query);
        unset($sql);
    }
    static public function get_all_news(){
        $sql = new Sql();
        $query = 'SELECT title,img,text,vote FROM t_article';
        $all_news = ($sql->sendQuery($query));
        foreach($all_news as $news){
            $title = $news['title'];
            $image = $news['img'];
            $text = $news['text'];
            $vote = $news['vote'];
            require __DIR__.'/../views/single_news.php';
        };
        unset($sql);
    }

    public function __construct($title, $text, $vote, $img = NULL)
    {
        $this->title = $title;
        $this->text = $text;
        $this->img = $img;
        $this->vote = $vote;

    }
    public function printNews(){
        $title = $this->title;
        $image = $this->img;
        $text = $this->text;
        $vote = $this->vote;

        require __DIR__.'../views/single_news.php';

    }
}