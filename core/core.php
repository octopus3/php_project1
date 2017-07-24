<?php
/**
* @author: weblinuxgame
* @ctime: 2017-07-22
* @version: 1.0.0
* @email: weblinuxgame@126.com
*
**/
defined('DS') or define('DS',DIRECTORY_SEPARATOR);
defined('CORE_CONFIG') or define('CORE_CONFIG',__DIR__.DS.'..'.DS.'config'.DS.'config.php');
include(__DIR__.DS.'modules.php'); // 引入模块加载
 
/**
* @func : main   主函数
* @desc ： 
* @param  array  {$ags = array() }  参数
* @return :
**/

function main($args=array()){


  return 0;
}

/**
* @desc args ： 参数处理函数
* @param  
* @return :
**/

function args($configs=array()){
   if(empty($configs)){
   	   warn();
   	   return   false;
   }

   if(is_array($configs)){
      error();
      return false; 
   }

	return 0;
}


/**
* @desc init ： 初始化函数
* @params :  
* @return :
**/

function init($obj=array()){


}


/**
* @desc run ： 运行逻辑函数
* @params :  
* @return :
**/
function run($runtime=array()){
  
  if(is_null($runtime)){
    error();
  	return  -1;
  }
  // var_dump($runtime['config']['core_modules']);
  // var_dump($runtime['config']['user_modules']);
  // while($runtime.todo(&$runtime));
  // var_dump($runtime['config']);
  
  if(!isset($runtime['config'])){
    $runtime['config'] = array();
    warn(W_EMPTY);
  }
  
  if(isset($runtime['modules'])){
    $runtime['modules']  = array();
    warn(W_EMPTY);
  }

  // var_dump($modules);
  $modules = array_merge($runtime['config']['core_modules'],$runtime['config']['user_modules']);

  $ret = Modules($modules,$runtime);
   
  if(is_string($ret)){
     echo $ret ;
     error(E_RT_ERROR);
  }
  if(is_array($ret)&&!empty($ret)){
    echo " modules loading success !";
  }
  else if(is_numeric($ret) || is_bool($ret)&&$ret ){
   echo " modules loading success !";
  }else{
    error(E_RT_ERROR);
    return -1;
  }
  
  var_dump($runtime['modules']);

  return 0;
}

/**
* @desc todo ： 运行逻辑函数
* @params :  
* @return :
**/
function todo($runtime=array()){
  
  if(empty($runtime)){
    error();
  	return  -1;
  }
  
  return  0;
}

/**
* @desc warn ： 警告函数
* @params :  
* @return :
**/

function warn($level=0){

}

/**
* @desc error ： 错误报告函数
* @params :  
* @return :
**/
function error($level=0){

}

/**
* @desc logger ： 错误报告日志
* @params :  
* @return :
**/

function logger(){

}

function config($config=array()){
    if(empty($config)){
       warn(W_EMPTY);
       return  false;
    }
    return  $config;
}

/**
* @desc App ： 错误报告函数
* @params :  
* @return  minx| array
**/

function App($arg=[]){
   static  $app  = array();
   if(empty($app)){
      
        $app['cmd_row_opts'] =   $arg ;
        $app['cmds'] = args($arg); 
        $app['config'] = require_once(CORE_CONFIG) ;
        $app['init'] = function(){ return  init() ; };
        $app['version'] = '1.0.0';
        $app['run'] = function(&$obj,$config=array()){
                       if(empty($obj)){
                         error(E_RT_ERROR);
                       }   
                       $obj['config']['user_modules'] = config($config);
                       return   run($obj) ; 
          };

        $app['todo'] = function(){ return  todo() ; };
   } 

   $app['init']();
   //var_dump(  $app['init'] ); 
   return $app;
}


