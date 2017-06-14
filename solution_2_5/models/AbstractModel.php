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

    protected $data = [];

    public function __set($key, $val){
        $this->data[$key] = $val;
    }
    public function __get($key){
        return $this->data[$key];
    }

    public static function findAll(){

        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table;
        $db = new DB();
        $db->setClassName($class);

        return $db->query($sql);
    }

    public static function findOne($id){

        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $db = new DB();
        $db->setClassName($class);

        return $db->query($sql, [':id'=>$id])[0];
    }

    public function insert(){
        $cols = array_keys($this->data);
        foreach($cols as $col){

            $data[':' . $col] = $this->data[$col];
        }

        echo $sql = 'INSERT INTO ' . static::$table . '
        (' . implode(', ', $cols) . ') VALUES (' . implode(', ', array_keys($data)) . ')';

        $db = new DB();
        $db->execute($sql,$data);
    }

}