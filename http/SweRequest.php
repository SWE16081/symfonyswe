<?php
/**
 * Created by PhpStorm.
 * User: SWESWE
 * Date: 2021/1/27
 * Time: 11:28
 */

namespace http;

use Symfony\Component\HttpFoundation\Request;

class SweRequest
{
    protected $request;
    public function __construct()
    {
        $this->request = Request::createFromGlobals();
    }

    /**
     * 获取请求传递的参数
     * get post方法
     * @param $name
     * @return mixed
     * @author xichao<952002423@qq.com>
     */
    public function myGet($name){
        return $this->request->query->get($name)?:$this->request->request->get($name);
    }

    /**
     * 获取全部参数
     * get post方法
     * @return mixed
     * @author xichao<952002423@qq.com>
     */
    public function myAll(){
        return $this->request->query->all()?:$this->request->request->all();
    }
}