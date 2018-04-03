<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-4-3
 * Time: 15:12
 */
class User extends CI_Controller
{

    private $id;

    private $username;

    private $password;

    public function __construct($username, $passWord)
    {
        $this -> username = $username;
        $this -> password = $passWord;
    }



}