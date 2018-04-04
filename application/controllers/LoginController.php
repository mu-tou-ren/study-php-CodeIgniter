<?php
class LoginController extends CI_Controller
{
    public function __construct()
    {
        $this->need_login = false;//控制是否需要登录
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('login/login');
    }
    public function login(){
        $this -> load -> model('user/User', 'user');
        $username = $this -> input -> post('username');
        $password = $this -> input -> post('password');
        echo json_encode($this -> user -> find_user($username, $password));
    }

    public function logOut(){
        $this -> load -> library('session');
        $this -> session -> set_userdata('user', '');
        $this -> load -> model('common/AjaxResponse', 'ajaxResponse');
        echo json_encode($this -> ajaxResponse -> success());
    }

}