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
        $result = $db->query($sql, [':id'=>$id]);
        if(empty($result)){
            $e = new Exception404();
            $e->classError = get_called_class();
            throw $e;
        }
        return $result[0];
    }

    public static function findByColumn($column, $value){
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE '.$column.'=:'.$column;
        $db= new DB();
        $db->setClassName($class);
        return $db->query($sql, [':'.$column => $value]);
    }

    protected function insert(){
        $cols = array_keys($this->data);
        foreach($cols as $col){
            $data[':' . $col] = $this->data[$col];
        }

        $sql = 'INSERT INTO ' . static::$table . ' (' . implode(', ', $cols) . ') VALUES (' . implode(', ', array_keys($data)) . ')';

        $db = new DB();
        $success = $db->execute($sql,$data);

        if($success){
            $sql = 'SELECT id FROM ' . static::$table . ' ORDER BY id DESC';
        }
        $this->data['id'] = (int)$db->query($sql)[0]->id;
        return $success;
    }

    protected function  update(){
        $cols = array_keys($this->data);
        $upd = [];
        foreach($cols as $col){
            $data[':'.$col] = $this->data[$col];
            if($col!='id'){
                $upd[] = $col . '=:'.$col;
            }
        }

        $sql = 'UPDATE '.static::$table.' SET '.implode(', ', $upd).' WHERE id=:id';
        $db = new DB();
        return $db->execute($sql, $data);
    }

    public function save(){
        $sql = 'SELECT id FROM '. static::$table . ' WHERE id=:id';

        $db = new DB();
        if (!empty($this->id) && $db->query($sql,[':id'=>$this->id])){
            return $this->update();
        }else{
           return $this->insert();
        }

    }
    public function delete(){
        $sql = 'DELETE FROM ' . static::$table . ' WHERE id=:id';

        $db = new DB();
        $db->execute($sql,[':id'=>$this->id]);


    }

}