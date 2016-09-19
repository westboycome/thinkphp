<?php

namespace Home\Controller;
use Think\Controller;
use Home\Common;
use Home\Model;

class IndexController extends Controller {
    
    public function fangwei(){
        $user = D('user');
        $data = $user
            ->scope('jige,zidingyi')
            ->limit(4)
            ->where('id>3')
            ->select();
    }
    
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
        //$this->assign('num','23');
       //$this->assign('name','me');
       
        //CURD
        //插入
        $dataList = array(
            1=>array(
                'name'=>'xiaoming'
            ),
            2=>array(
                'name'=>'xiaoming'
            ),
            3=>array(
                'name'=>'xiaoming'
            ),
        );
        //M('user')->add($data); 插入一条
        M('user')->addAll($dataList);//插入多条
        
        //查询
        //1直接使用字符串查询
//         $data = M('user')->where('id=1')->select();
        //2使用数组方式查询
//         $where['id']=2;
//         $where['user_name']='xiaoming';
//         $where['_logic']='or';
//         $data = M('user')->where('id=1')->select();
        //3表达式查询
        //where['字段名']=array(表达式，查询条件);
//         $where['id'] = array('lt',3);
//         $where['user_name'] = array('like',array('%ming','xiao%'));
        //4区间查询
//         $where['id'] = array(array('gt',20),array('lt',4));
        //5 混合用法
//         $where['id'] = array('gt',10);
//         $where['_string'] = 'score>60';
//         $data = M('user')->where($where)->select();
        
        //6统计用法
        /* 
         * count
         * max min avg sum
         *  */
//         $data = M('user')->sum('score');
//        $data = M('user')->max('id');
        //更新
//         $update['score'] = 70;
//         $where['id'] = 1;
//         $data = M('user')->where($where)->save($update);
        //删除
//         M('user')->delete(3);
           //order
        M('user')->order('score desc','id asc')->select();
        //filed true是过滤，默认是false
//         $field = 'id,user_name';
//         M('user')->field($field,true)->select();
        //limit
        /* $data = M('user')
        ->order('score desc','id asc')
        ->limit(2,6)
        ->select(); */
        //page
//         $data = M('user')
//         ->order('score desc','id asc')
//         ->page(2,6)
//         ->select();
        //group 分组操作
        M('user')
        ->field('score, count(*) as total')
        ->having('score>=60')
        ->group('score')
        ->select();
        
        //多表查询 table 方法 table(array('表名'=>'别名')) 表名需要加前缀
        M('user')
        ->table(array('mk_user'=>'user','mk_user_info'=>'info'))
        ->where('user.id=info.id')
        ->select();
        
        //join查询 inner join 
        M('user')
        ->join(array('mk_userinfo On mk_user.id=mk_userinfo.id')) //数组只能关联一个
        ->join('right join mk_userinfo On mk_user.id=mk_userinfo.id')
        ->select();
        
        
        //多表查询 union查询 union('string array',true/false);
        $data = M('user')
        ->field('user_name')
        ->union(array('field'=>'user_name','table'=>'mk_user2'),true)
        ->select();
        //过滤查询 
        M('user')
        ->distinct(true)
        ->field('score')
        ->order('score desc')
        ->select();
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        $this->display();
    }
    
    public function user() {
        header('content-type:text/html;charset=utf-8');
        G(run);
//         echo 'id is: '.$_GET['id'].'<br/>';
//         echo 'index模块的user方法';
//          trace('name',C('name'));
//          echo C('name');
//           dump($_SERVER);
//          echo G('run','end');
//         $this->display();

        //实例化基础模型 nodel
        //$user = new Model('user');//表名 表前缀  数据库连接信息 
//         $user = M('user');
//         $data = $user->select();
//         dump($data);
        //实例化用户自定义
       // $user = new \UserModel();
//         $user = D('User');
//         echo  $user->select();
        //实例化公共模型
//         $user = new \CommonModel();
//         echo $user->strmark('qqq');

        $user = D('User');
        echo $user->strmark('sdd'); 
        //实例化空模型
        $sql = '';
        $model = M();
        $model->query($sql);//读取 select
        $model->execute($sql);//写入 更新 update insert
        
        
        
        
        
        
        
        
    }
}