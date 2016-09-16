<?php
return array(
	//'配置项'=>'配置值'
	'name'=>'config.php',
    'URL_MODEL'=>2,
    //'LOAD_EXT_CONFIG'=>'zidingyi_config.php'
    'URRL_HTML_SUFFIX'=>'SHTML|HTML|XML',  //URL伪静态后缀设置
    'SHOW_PAGE_TRACE'=>true,
    
    'DB_TYPE'=>'mysql',  // 数据库类型
    'DB_HOST'=>'localhost,localhost1',  //数据库服务地址
    'DB_NAME'=>'info',  //数据库名
    'DB_USER'=>'root',  //用户名
    'DB_PWD'=>'123456',  //密码
    'DB_PORT'=>'3306',  //端口号
    'DB_PREFIX'=>'mk_',  //数据库表前缀
    'DB_RW_SEPARATE'=>true,  //开启主从读写分离
    'DB_MASTER_NUM'=>'1',  //多个主数据库服务器
    
    
);