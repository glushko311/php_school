<?php
/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 29.05.2017
 * Time: 11:54
 */
session_start();

include_once 'class/GetUsersBD.php';
include_once 'class/GetSignInData.php';



$getUsers = new GetUsersBD;
$usersArray = $getUsers->getUser(); //массив всех пользователей вид [ ['login'=>'username', 'pass'=>'password'] ]

$getSignInData = new GetSignInData;

$getSignInData->checkUserData();

//$getSignInData->signOut();

if($getUsers->findUser($_SESSION['userData'])){
    include 'views/user_page.php';
}else{
    include 'views/guest_page.php';
}






