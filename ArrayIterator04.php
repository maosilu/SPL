<?php
$fruits = array(
	'apple' => 'apple value',
	'orange' => 'orange value',
	'grape' => 'grape value',
	'plum' => 'plum value'
);

// 使用Iterator遍历数组
$obj = new ArrayObject($fruits);
$it = $obj->getIterator();
echo "***** use ArrayIterator in for *****\r\n";
foreach ($it as $key => $value) {
	echo $key." : ".$value."\r\n";
}

echo "\r\n";
echo "***** use ArrayIterator in while *****\r\n";
$it->rewind(); // 调用current之前一定要调用rewind
while ($it->valid()) {
	echo $it->key()." : ".$it->current()."\r\n";
	$it->next(); // 这句千万不能少
}
