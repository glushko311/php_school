<?php
/**
 * Created by PhpStorm.
 * User: дом
 * Date: 04.06.2017
 * Time: 22:52
 */
require_once __DIR__.'/classes/sql.php';
require_once __DIR__.'/models/news.php';


$items = News::getAll();

include __DIR__ . '/views/index.php';


