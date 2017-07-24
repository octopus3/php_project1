<?php
 // 文件是否存在
$path = "E:\workpace\www\EPG\lesson3\config\..\modules\args.php" ;

$ret  = file_exists($path) ;
// 正则匹配 字符串 是否以 .php 结尾  
$ret2 = preg_match('/\.php$/', $path);

var_dump($ret,$ret2); 