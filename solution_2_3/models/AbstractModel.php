<?php

/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 09.06.2017
 * Time: 16:03
 */
abstract class AbstractModel
{
    protected static $table;
    protected static $className;

    public static function getAll(){
        $db = new Sql();
        return $db->queryAll('SELECT * FROM '.static::$table, static::$className);
    }
}