<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-4-3
 * Time: 18:28
 */
class User extends CI_Model
{

    private $id;
    private $username;
    private $password;
    private $update_time;
    private $create_time;

    public function __construct($username, $password)
    {
        parent:: __construct();
        $this -> username = $username;
        $this -> password = $password;
    }

    public function insert_user()
    {
        $this->username    = $_POST['username']; // please read the below note
        $this->password  = $_POST['password'];
        $this->create_time = time();

        $this->db->insert('entries', $this);
    }
}