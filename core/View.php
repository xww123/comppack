<?php
namespace core;

class View{
    // 模板文件
    protected $file;
    // 模板变量
    protected $vars = [];   // 5.4以上
    public function make($file){
        $this->file = 'view/'.$file.'.html';
        return $this;
    }
    public function with($name,$value)
    {
        $this->vars[$name] = $value;
        return $this;
    }
    public function __toString()
    {
        extract($this->vars);   // 分解关联数组到内存name=value
        include $this->file;
        return '';
    }
}