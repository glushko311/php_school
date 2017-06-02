<?php

function sendSql_query($query){
    $connect = mysqli_connect('localhost','root','','images');
    mysqli_set_charset($connect, "utf8");

    if(strtoupper(explode(' ',$query)[0]) == 'SELECT'){
        $queryResult = mysqli_query($connect, $query);
        $res = [];

        while($row = mysqli_fetch_assoc($queryResult)){
            $res[] = $row;
        }
        return $res;
    }else{
        return mysqli_query($connect, $query);
    }

}