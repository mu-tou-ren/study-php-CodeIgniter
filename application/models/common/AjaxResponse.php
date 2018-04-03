<?php

/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 2018/4/4
 * Time: 0:54
 */
class AjaxResponse
{
    public $success;
    public $message;
    public $data;

    public function fail($message = '')
    {
        $AjaxResponse = new AjaxResponse();
        $AjaxResponse -> success = false;
        $AjaxResponse -> message = $message;
        return $AjaxResponse;
    }

    public function success($data = '')
    {
        $AjaxResponse = new AjaxResponse();
        $AjaxResponse -> success = true;
        $AjaxResponse -> data = $data;
        return $AjaxResponse;
    }
}