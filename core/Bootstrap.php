<?php

namespace core;

class Bootstrap{
    public static function run(){
        self::parseUrl();
    }
    public static function parseUrl(){
//        dd('abc');
        if (isset($_GET['s'])){
            $info = explode('/',$_GET['s']);
            $class = '\web\controller\\'.ucfirst($info[0]);
            $action = $info[1];
        }else{
            $class = "\\web\\controller\\Index";
            $action = "show";
        }
        // 输出控制器的结果
        echo (new $class)->$action();
    }
}