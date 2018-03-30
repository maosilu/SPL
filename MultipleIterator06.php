<?php
// MultipleIterator用于把多个Iterator里面的数据组合成为一个整体来访问

$idIter = new ArrayIterator(array('01', '02', '03'));
$nameIter = new ArrayIterator(array('张三', '里斯', '王武'));
$ageIter = new ArrayIterator(array(22, 23, 25));

$mulIter = new MultipleIterator(MultipleIterator::MIT_KEYS_ASSOC);
$mulIter->attachIterator($idIter, 'ID');
$mulIter->attachIterator($nameIter, 'NAME');
$mulIter->attachIterator($ageIter, 'AGE');
foreach($mulIter as $value){
	print_r($value);
}