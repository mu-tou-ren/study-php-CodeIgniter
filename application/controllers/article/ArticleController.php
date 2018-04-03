<?php

/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 2018/4/4
 * Time: 1:31
 */
class ArticleController extends CI_Controller
{
    public function index()
    {
        $this->load->view('article/article',$this -> userdata);
    }

    public function articleAdd($id){
        $aid = $id;
        $this -> load -> view('article/add-article');
    }
}