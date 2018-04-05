<?php
// 外部文件调用类的第2种方法
function __autoload($class_name){ // 定义 __autoload() 函数，可以在不调用 spl_autoload_register() 函数的情况下完成类的装载
	echo '__autoload class: '.$class_name."\r\n";
	require_once('libs/'.$class_name.'.php'); // 真正装载类的位置
}

// 第三种方式：使用其他自定的方法加载类
function  classLoader($class_name){ // 先定义一个替换__autoload函数的类文件装载函数
	echo 'classLoader() load class: '.$class_name."\r\n";
	require_once('libs/'.$class_name.'.php');
}
spl_autoload_register('classLoader'); // 传入定义好的装载类的函数名称替换 __autoload() 函数

new Test12();