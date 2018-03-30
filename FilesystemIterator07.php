<?php
// FilesystemIterator能遍历文件系统
date_default_timezone_set('PRC');
$it = new FilesystemIterator('.');
foreach ($it as $finfo) {
	// echo date("Y-m-d H:i:s", $finfo->getMTime())."\r\n";
	printf("%s\t%s\t%8s\t%s\r\n", 
		date("Y-m-d H:i:s", $finfo->getMTime()),
		$finfo->isDir()?'<DIR>':'<FILE>',
		number_format($finfo->getSize()),
		$finfo->getFileName()
	);
}