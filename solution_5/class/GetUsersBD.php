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
}