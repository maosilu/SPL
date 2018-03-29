<?php
// 实例化双向链表类
$dlist = new SplDoublyLinkedList();
// push把新的节点数据添加到链表的顶部（top）
$dlist->push(1); 
$dlist->push(2);
$dlist->push(3);
// unshift把新的节点数据添加到链表的底部（bottom）
$dlist->unshift(10);
print_r($dlist);

// rewind操作用于把节点指针指向bottom所在的节点
$dlist->rewind();
// current指向当前节点，要与rewind搭配
echo "当前节点current: ".$dlist->current()."\r\n";

// 使指针指向下一个节点（靠近top方向）
$dlist->next();
echo 'next node: '.$dlist->current()."\r\n";

// 使指针指向上一个节点（靠近bottom方向）
$dlist->prev();
echo 'prev node: '.$dlist->current()."\r\n";

if($dlist->current()){
	echo "Current node valid\r\n";
}else{
	echo "Current node invalid\r\n";
}

// 如果当前节点是有效节点，valid返回true，否则返回false
if($dlist->valid()){
	echo "valid list\r\n";
}else{
	echo "invalid list\r\n";
}