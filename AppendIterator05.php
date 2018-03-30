<?php
$arr_a = new ArrayIterator(array('a', 'b', 'c'));
$arr_b = new ArrayIterator(array('d', 'e', 'f'));
$it = new AppendIterator();
// 通过append方法把迭代器对象添加到AppendIterator对象中
$it->append($arr_a);
$it->append($arr_b);
foreach($it as $key => $value){
	echo $key.' : '.$value."\r\n";
}