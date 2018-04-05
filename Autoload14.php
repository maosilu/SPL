<?php
spl_autoload_extensions('.class.php'); // 找扩展名是 .class.php 的文件
set_include_path(get_include_path().PATH_SEPARATOR.'libs/'); // 在 libs 文件下寻找
spl_autoload_register(); // 告诉php需要使用autoload这种方法
new Test13();