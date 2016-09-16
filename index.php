<?php

/* 
 * 1 加载thinkphp.php
 * 
 * 2 加载核心文件 ./ThinkPHP/LIB/core
 * 
 * 3 加载项目的文件 分析url 调用相关控制机器 
 * m model 模块 控制器
 * a action  方法
 *  */

        $model = isset($_GET['m'])?$_GET['m']:'index';
        $action = isset($_GET['c'])?$_GET['c']:'index';
        class index{
            function __construct(){
                echo 'index的控制器';
            }
            function index() {
                echo 'index控制器的index 方法';
            }
            function test() {
                echo 'index控制器的test方法';
            }
        }
    define('APP_DEBUG', true);
    define('APP_NAME','App/');
    define('APP_PATH','./App/');
    require ('./ThinkPHP/ThinkPHP.php');