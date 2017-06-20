<?php

/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 16.06.2017
 * Time: 12:17
 */
class Log
{
    protected $path = __DIR__ . '/../log.txt';
    protected $message = 'тестовое сообщение'.PHP_EOL;

    public function createMessage($code, $className = ''){
       $this->message = 'Дата/время: ' . date("Y-m-d H:i:s", time()) . ';' .
                        ' Код ошибки: '. $code . ';' .
                        ' Класс где произошла ошибка: ' . $className . ';' .
                        PHP_EOL;
    }

    public function addError(){
        return file_put_contents($this->path, $this->message, FILE_APPEND|LOCK_EX);
    }
    public function readLog(){
        return (file($this->path));
    }

}