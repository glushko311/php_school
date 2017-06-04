<?php
/**
 * Created by PhpStorm.
 * User: дом
 * Date: 04.06.2017
 * Time: 22:52
 */
require_once __DIR__.'/class/sql.php';
require_once __DIR__.'/class/article.php';
require_once  __DIR__.'/class/news.php';

require_once __DIR__.'/add_news.php';

News::get_all_news();


