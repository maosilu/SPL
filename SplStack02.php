<?php
// SplStack类通过使用一个双向链表来提供栈的主要功能
$stack = new SplStack();
$stack->push('a');
$stack->push('b');
$stack->push('c');
print_r($stack);

echo "Bottom: ".$stack->bottom()."\r\n";
echo "Top: ".$stack->top()."\r\n";

// 堆栈的offset=0是Top所在的位置，offset=1是top位置节点靠近bottom位置的相邻节点，以此类推
$stack->offsetSet(0, 'C');
print_r($stack);

// 双向链表的rewind和堆栈的rewind相反，堆栈的rewind使得当前指针指向Top所在的位置，而双向链表调用之后指向bottom所在位置
$stack->rewind();
echo "Current: ".$stack->current()."\r\n";

// 堆栈的next操作使指针指向靠近bottom位置的下一个节点，而双向链表是靠近top的下一个节点
$stack->next();
$stack->next();
$stack->next();
echo 'Next code: '.$stack->current()."\r\n";

// 遍历堆栈
$stack->rewind();
while($stack->valid()){
	echo $stack->key().'=>'.$stack->current()."\r\n";
	$stack->next();
}
// 删除堆栈数据