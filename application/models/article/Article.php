<?php

/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 2018/4/4
 * Time: 1:30
 */
class Article extends CI_Model
{
    public $id;
    public $update_time;
    public $create_time;
    public $title;
    public $content;
    public $author;
    public $main_img;

    public function find_article_byId($id){
        $this -> load -> database();
        $query = $this -> db -> query('SELECT * FROM article WHERE id='. $id);
        $article = $query -> row(0, 'Article');
        return $article;
    }

    public function articleSave($article){
        $this -> load -> database();
        $bool = $this -> db -> insert('article', $article);
        return $bool;
    }

    public function articleUpdate($article){
        $this -> load -> database();
        $bool = $this -> db -> update('article', $article, array('id' => $article -> id));
        return $bool;
    }

    public function articleDelete($id){
        $this -> load -> database();
        $bool = $this -> db -> delete('article',array('id'=>$id));
        return $bool;
    }

    public function findArticles(){
        $this -> load -> database();
        $query = $this -> db -> query('SELECT * FROM article');
        $articleArray = array();
        for($x = 0; $x < count($query -> result_array()); $x++){
            $articleArray[$x] = array(
                'id' => $query -> result_array()[$x]['id'],
                'title' => $query -> result_array()[$x]['title'],
                'content' => $query -> result_array()[$x]['content'],
                'author' => $query -> result_array()[$x]['author']
            );
        }
        return $articleArray;
    }
}