<?php

/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 29.05.2017
 * Time: 13:31
 */
class GetSignInData
{
    protected $userData = [];
    protected $userDataAttr = [
        'login'=>['min_length'=>3, 'max_length'=>10],
        'pass'=>['min_length'=>4, 'max_length'=>15]
    ];
    public function checkUserData(){
        if(!empty($_POST['login']) && !empty($_POST['pass'])){
            $this->userData = ['login'=>$_POST['login'],'pass'=>$_POST['pass'], 'error'=>''];
            $error = '';
            foreach($this->userDataAttr as $attr_key => $attr_arr){

                    if(strlen($this->userData[$attr_key]) < $attr_arr['min_length'] ||
                        strlen($this->userData[$attr_key]) > $attr_arr['max_length']){


                        $error.= $attr_key . ' должен быть не более '
                        . $attr_arr["max_length"] .' и не менее ' . $attr_arr['min_length']. ' символов <br>';
                    }
            }

        }else{
            $this->userData = ['error'=>'не заполнены логин или пароль<br>'];

        }
        if(isset($error)){
            $this->userData['error'].= $error;
        }

        $_SESSION['userData'] = $this->userData;

    }
    public  function signOut(){
        if(!empty($_SESSION['userData']) && isset($_POST['sign_out']) && $_POST['sign_out'] == 'sign_out'){
            unset($_SESSION['userData']);
            return 1;
        }else {
            return 0;}

    }
}