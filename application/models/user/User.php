<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-4-3
 * Time: 18:28
 */
class User extends CI_Model
{

    public $id;
    public $username;
    public $pass_word;
    public $update_time;
    public $create_time;

    public function find_user($username, $password)
    {
        $this -> load ->model('user/User');
        $this -> load ->model('common/AjaxResponse', 'AjaxResponse');
        $this -> load -> database();
        $query = $this -> db -> query('SELECT * FROM user WHERE username=\''. $username . '\' AND pass_word=\'' . $password . '\'');
        $user = $query -> row(0, 'User');
        if(isset($user))
        {
            $this -> load -> library('session');
            $this -> session -> set_userdata('user', serialize($user));
            return $this -> AjaxResponse -> success();
        }
        else
        {
            return $this -> AjaxResponse -> fail('用户名或密码错误');
        }
    }

}