<?php
 $a = ['arr'=>1, '12'=>12];
 $b = ['1'=>0,'he'=>'1234'];
 // 数组合并
 var_dump(array_merge($a,$b));

 $f = include_once('E:\workpace\www\EPG\lesson3\config\..\modules\io.php');

$ret =  empty($f) ;

 var_dump($f);
 var_dump($ret);
 var_dump(is_array($f)); 