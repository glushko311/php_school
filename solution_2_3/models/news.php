<?php

/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 09.06.2017
 * Time: 13:50
 */
require_once __DIR__ . '/../classes/sql.php';

class News
{
    public $id;
    public $title;
    public $text;

    public static function getAll(){
        $db = new Sql();
        return $db->sendQuery('SELECT * FROM t_news', 'News');
    }
}