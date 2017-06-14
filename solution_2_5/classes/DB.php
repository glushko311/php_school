<?php

/**
 * Created by PhpStorm.
 * User: дом
 * Date: 04.06.2017
 * Time: 22:06
 */

class DB
{
    const  HOST  = 'localhost';
    const  LOGIN = 'root';
    const  PASSWORD = '';
    const  DB_NAME = 'news';
    private $dbh;


    function __construct()
    {

        $this->dbh = new PDO('mysql:dbname='.self::DB_NAME.';host='.self::HOST.';charset=utf8', self::LOGIN, self::PASSWORD);
    }

    public function query($sql, $params=[]){
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_OBJ);
    }

}