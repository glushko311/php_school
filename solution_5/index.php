<?php
/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 29.05.2017
 * Time: 11:54
 */
include_once 'class/GetUsersBD.php';

$getUsers = new GetUsersBD;
$usersArray = $getUsers->getUser();

var_dump($usersArray);