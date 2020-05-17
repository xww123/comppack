<?php

namespace web\controller;

use core\View;

class Index{
    protected $view;
    public function __construct()
    {
        $this->view=new View();
    }

    public function show(){
//        echo $this->view->make('index');
//        return $this->view->make('index');  // 返回一个view对象，自动调用view对象的魔术方法__toString(),这个方法里加载了模板文件
        return $this->view->make('index')->with('version','版本：1.0 copyright:友赞成'); // with是view对象方法，给模板分配变量
    }

    public function post()
    {
        echo 'post';
    }
}
