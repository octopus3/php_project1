<?php
/**
* @author: weblinuxgame
* @ctime: 2017-07-22
* @version: 1.0.0
* @email: weblinuxgame@126.com
*
**/
defined('DS') or define('DS',DIRECTORY_SEPARATOR);
//-----------------------[start 定义警告等级 定义 ]--------------------
// W -> waring 
// 空参数 警告提示 级别
defined('W_EMPTY') or define('W_EMPTY',0);
// 不存在 警告提示 级别
defined('W_NO_EXIST') or define('W_NO_FOUND',1);
// 类似不匹配 警告提示 级别
defined('W_TYPE_NO_MATCH') or define('W_TYPE_NO_MATCH',2);

//-----------------------[end 定义警告等级定义]---------------------------

//-----------------------[start 定义错误等级 定义 ]--------------------
// E-> error 
// 空参数 错误 级别
defined('E_NULL_ERROR') or define('E_NULL_ERROR',-1);
// 不存在 错误 级别
defined('E_NO_EXIST_ERROR') or define('E_NO_EXIST_ERROR',-2);
// 类似不匹配 错误 级别
defined('E_TYPE_ERROR') or define('E_TYPE_ERROR',-3);
// 运行时出错 错误 级别
defined('E_RT_ERROR') or define('E_RT_ERROR', -4);

//-----------------------[end 定义错误等级定义]---------------------------

return  array(
	    'core_modules' =>
	     array(
		   'args' => __DIR__.DS.'..'.DS.'modules'.DS.'args.php',
		   'io'   => __DIR__.DS.'..'.DS.'modules'.DS.'io.php'
		 )
	);