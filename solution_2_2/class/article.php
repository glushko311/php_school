<?php

/**
 * Created by PhpStorm.
 * User: дом
 * Date: 04.06.2017
 * Time: 23:02
 */
abstract class Article
{

    protected $title;
    protected $img;
    protected $text;
    protected $vote;



    abstract public function __construct($title, $text, $vote, $img = NULL);

}