<?php
$file_path = __DIR__.DIRECTORY_SEPARATOR.'a.txt' ;
if(file_exists($file_path)){
	// 文件读取
	$ret = file_get_contents(__DIR__.DIRECTORY_SEPARATOR.'a.txt');
  echo $ret ."\n";
}
else{
	// 创建文件
	touch($file_path);
}
// 写文件
$ret = file_put_contents($file_path," function_exists(dfdfff)ssssssssss \n",FILE_APPEND);

if($ret){
	echo "write file $file_path success ! \n ";
}
