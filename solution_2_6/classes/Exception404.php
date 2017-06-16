<?php

/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 16.06.2017
 * Time: 10:43
 */
class Exception404 extends Exception
{
    protected $code = 404;
    public $classError = 'stdClass';
}