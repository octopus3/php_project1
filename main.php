<?php
defined('DS') or define('DS',DIRECTORY_SEPARATOR);
defined('USER_CONFIG') or define('USER_CONFIG',__DIR__.DS.'config'.DS.'user.ini.php');  // 引入 开发|用户 配置信息
include(__DIR__.DS.'core'.DS.'core.php');	   // 引入功能函数集合

/***
 1. 命令行运行php 脚本 
    ....> install_path\php.exe project_path\main.php  [opts]
 2. 首先运行 args() 函数 ,处理 命令行 opts 
 3. 提交处理过后的参数 给 main函数, main 处理    
 4. 循环运行 while

***/
// var_dump($argc);
// var_dump($argv);
// 应用构建 , 如果构建成功 运行 , 不成功 报错 响应提示 
($app = App($argv)) ? $app['run']($app,require_once(USER_CONFIG)) : error(E_RT_ERROR) ;

// $app = App($argv);
// var_dump($app);
// $app['run']($app);