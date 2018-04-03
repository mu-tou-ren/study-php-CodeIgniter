<?php

/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 2018/4/4
 * Time: 3:56
 */
class Oss extends CI_Controller
{
    private $id;
    private $key;
    private $host;
    private $dir;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('oss/get');
        $this->id = $this->config->item('fyXowWZWAqPF35eh');    // AccessKeyId
        $this->key = $this->config->item('Iov4mt1GFuDWZJd0fYGT1YEG2nQPwW');    // AccessKeySecret
        $this->host = $this->config->item('http://oss-cn-hangzhou.aliyuncs.com'); // OSS 访问域名
        $this->dir = $this->input->get('ci_test');   // 文件前缀名
    }

    // 上传主页面
    public function index()
    {
        if(empty($this->dir)) {
            echo 'dir is null';
        } else {
            $data = array();
            $data['callbackurl'] = '/index.php/oss/get_secret?dir='.$this->dir;
            echo array(
                "errno" => 0,
                "data" => array(
                    $data['callbackurl']
                 )
            );
            $this->load->view('oss/index',$data);
        }
    }

    // 获取上传密钥
    public function get_secret()
    {
        if(empty($this->dir)) {
            echo 'dir is null';
        } else {
            $this->get->response($this->id,$this->key,$this->host,$this->dir);
        }
    }

}