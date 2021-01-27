<?php
//composer为我们的应用自动生成类加载
require_once './vendor/autoload.php';
require_once './http/SweRequest.php';
use http\SweRequest;

$a=new SweRequest();

var_dump($a->myGet('name'));
var_dump($a->myAll());


//require_once './vendor/autoload.php';
//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
//
//$request = Request::createFromGlobals();
//$name=$request->get('name','默认值');
//// 请求的URI (e.g. /about)
//$info=$request->getPathInfo();
//var_dump($info);
//// 分别得到GET参数或POST参数
//$foo=$request->query->get('foo'); // GET
//var_dump($foo);
//$bar=$request->request->get('bar', '默认值'); // POST
//var_dump($bar);