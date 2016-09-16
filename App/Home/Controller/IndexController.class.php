<?php

namespace Home\Controller;
use Think\Controller;
use Home\Common;

class IndexController extends Controller {
    
    public function index(){
        header('content-type:text/html;charset=utf-8');
       //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        //echo C('name'); 
        
        /* 
         * 0 普通模式
         * /immoc/thinkphp/index.php?m=Home&c=Index&a=user&id=1
         * 1 默认模式 pathinfo模式
         * /immoc/thinkphp/index.php/Home/Index/user/id/1.html
         * 2 重写模式
         * /immoc/thinkphp/Home/Index/user/id/1.html
         * 3 谦容模式
         *  /immoc/thinkphp/index.php?s=/Home/Index/user/id/1.html
         *  
         *  隐藏index.php 
         *  <Ifmodule mod_rewrite.c>
        	RewriteEngine on
        	RewriteConde %{REQUEST_FILENAME}!-d
        	RewriteConde %{REQUEST_FILENAME}!-f
        	RewriteRule ^(.*)$ index.php/$1 [QSA,PT,L]       
        </Ifmodule>
        
        
         *  */
//         echo C('URL_MODEL').'<br/>';
//         echo U('Index/user',array('id'=>1),'html',false,'localhost');

        //show();
//         $name='xiaoheizi';
//         $this->name1=$name;
//         $this->assign('name',$name)->assign('sex','man');

//         $arr['name']='heihei';
//         $arr['sex']='man';
//         $arr['age']='27';
//         $this->assign('arr',$arr);
           /* $arrlist= array(
               1=>array('name'=>'fsdf','age'=>'23'),
               2=>array('name'=>'fddf','age'=>'22'),
               3=>array('name'=>'fcdf','age'=>'65'),
               4=>array('name'=>'fjhdf','age'=>'33'),
               5=>array('name'=>'fsgdf','age'=>'53'),
               6=>array('name'=>'fsdgd','age'=>'63'),
               7=>array('name'=>'fsdg','age'=>'27'),
               8=>array('name'=>'fsdffg','age'=>'33')
           );
           $this->assign('arrlist',$arrlist); */
        $this->assign('num','23');
       //$this->assign('name','me');
        
        $this->display();
    }
    
    public function user() {
        header('content-type:text/html;charset=utf-8');
        G(run);
//         echo 'id is: '.$_GET['id'].'<br/>';
//         echo 'index模块的user方法';
         trace('name',C('name'));
         echo C('name');
          dump($_SERVER);
         echo G('run','end');
        $this->display();
    }
}