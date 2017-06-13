<?php

/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 09.06.2017
 * Time: 13:50
 */

class News extends AbstractModel
{
    public $id;
    public $title;
    public $text;

    protected static $table = 't_news';
    protected static  $className = 'News';

}