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
echo "当前节点current: ".$dlist->current();