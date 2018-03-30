<?php
$queue = new SplQueue();

// 插入一个节点到队列里面的top位置
$queue->enqueue('a');
$queue->enqueue('b');
$queue->enqueue('c');
print_r($queue);

echo 'Bottom: '.$queue->bottom()."\r\n";
echo 'Top: '.$queue->top()."\r\n";

// 队列里面offset=0时bottom所在的位置，offset=1是top方向的相邻节点，以此类推
$queue->offsetSet(0, 'A');
print_r($queue);

// 队列里面rewind操作使得指针指向bottom所在位置的节点
$queue->rewind();
echo 'Current: '.$queue->current()."\r\n";

echo "\r\n";
while($queue->valid()){
	echo $queue->key().'=>'.$queue->current()."\r\n";
	// next操作使得当前指针指向top方向的下一个节点
	$queue->next();
}

echo "\r\n";
// dequeue操作从队列中提取bottom位置的节点并返回，同时从队列里面删除该元素
echo 'dequeue queue: '.$queue->dequeue()."\r\n";
print_r($queue);