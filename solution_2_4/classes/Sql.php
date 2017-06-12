<?php

/**
 * Created by PhpStorm.
 * User: дом
 * Date: 04.06.2017
 * Time: 22:06
 */

class Sql
{
    const  HOST  = 'localhost';
    const  LOGIN = 'root';
    const  PASSWORD = '';
    const  DB_NAME = 'news';
    private $connect;

    function __construct()
    {
        $connect = mysqli_connect(self::HOST, self::LOGIN, self::PASSWORD, self::DB_NAME);
        mysqli_set_charset($connect ,'utf8');
        $this->connect = $connect;
    }

    public function queryAll($query, $class = 'stdClass'){
        $connect = $this->connect;
        if(strtoupper(explode(' ', $query)[0]) == 'SELECT'){
            $resQuery = mysqli_query($connect, $query);
            $res = [];
            var_dump($resQuery);
            if(!empty($resQuery)){

                while( $row = mysqli_fetch_object($resQuery, $class)){

                    $res[] = $row;
                }

                return $res;
            }else{
                return false;
            }

        }else{
           return mysqli_query($connect, $query);
        }
    }

    public function queryOne($sql, $class = 'stdClass'){
        return $this->queryAll($sql, $class)[0];
    }
}