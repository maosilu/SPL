<?php
// 外部文件调用类的第一种方法
spl_autoload_extensions('.class.php, .php'); // 设置autoload寻找php定义的类文件的扩展名，多个扩展名用逗号分隔，前面的扩展名优先被匹配
set_include_path(get_include_path().PATH_SEPARATOR.'libs/'); // 设置autoload寻找php定义的类文件的目录，多个目录用PATH_SEPARATOR进行分隔
spl_autoload_register(); // 提示PHP使用Autoload机制查找类定义
new Test13();
// new Test12();