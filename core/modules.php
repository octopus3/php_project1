<?php
/**
* @desc  模块加载 
* @author : weblinuxgame
* @version : 1.0.0
* @ctime : 2017-07-23
* 
**/

function Modules(&$module_list=array(),&$app=array())
{
	if(empty($module_list)){
		return  'empty_params';
	}
	$modules = array();
    foreach ($module_list as $name => $path ) {
       if(file_exists($path) && preg_match('/\.php$/', $path) ){
       	   $modules[$name] = include_once($path);
       }
       else {
       	  return  "module $name which path  $path loading failed " ;
       }
    }
    if(empty($app)){
    	return $modules ;
    }
    if(isset($app['modules'])){
        $app['modules'] = array_merge($app['modules'],$modules) ; 	
    }
    else{
    	$app['modules'] = $modules;
    }
    return count($module_list) ;
}