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
        $this -> load ->model('article/Article', 'article');
        $data = array(
            'userdata' => $this -> userdata,
            'articles' => $this -> article -> findArticles(),
        );
        $this->load->view('article/article',$data);
//        echo json_encode($data);
    }

    public function goArticleAdd(){
        $this -> load ->model('article/Article', 'article');
        $this -> load -> view('article/add-article', $this -> article);
    }

    public function goArticleUpdate($id = null){
        $this -> load ->model('article/Article', 'article');
        $this -> load -> view('article/add-article', $id == null ? $this -> article : $this -> article -> find_article_byId($id));
    }

    public function articleSave(){
        $this -> load ->model('article/Article', 'article');
        echo json_encode($this -> article -> articleSave($this -> disposeParam()));
    }

    public function articleUpdate(){
        $this -> load ->model('article/Article', 'article');
        echo json_encode($this -> article -> articleUpdate($this -> disposeParam()));
    }

    private function disposeParam(){
        $this -> article -> id = $this -> input -> post('id') == '' ? null : intval($this -> input -> post('id'));
        $this -> article -> title = $this -> input -> post('title');
        $this -> article -> content = $this -> input -> post('content');
        $this -> article -> author = $this -> input -> post('author');
        $this -> article -> update_time = date('Y-m-d H:i:s');
        $this -> article -> create_time = date('Y-m-d H:i:s');
        $this -> article -> main_img = '';
        return $this -> article;
    }
}