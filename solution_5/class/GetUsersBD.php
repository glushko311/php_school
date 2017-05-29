<?php

/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 29.05.2017
 * Time: 11:56
 */
class GetUsersBD
{
    protected $users = [ ['login'=>'vasya', 'pass'=>'1111'],
                         ['login'=>'petya','pass'=>'7777'],
                         ['login'=>'fedya', 'pass'=>'5555']
    ];
    public function getUser(){
        return $this->users;
    }
    public function findUser(array $user){
        $is_in_DB = true;

            foreach ($this->users as $userData) {
                $is_in_DB = true;

                foreach ($userData as $dataName => $dataValue) {

                    if (empty($user[$dataName]) ||$dataValue != $user[$dataName]) {
                        $is_in_DB = $is_in_DB && false;
                    }
                }

                if ($is_in_DB == true) {
                    break;
                }
            }
            return $is_in_DB;

    }
}