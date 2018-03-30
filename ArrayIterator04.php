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

// Iterator的好处：跳过某些元素进行打印
echo "\r\n";
$it->rewind();
if($it->valid()){
	$it->seek(1);
	while ($it->valid()) {
		echo $it->key().' : '.$it->current()."\r\n";
		$it->next();
	}
}

echo "\r\n";
echo "***** use ksort *****\r\n";
$it->ksort();
foreach($it as $key=>$value){
	echo $key.' : '.$value."\r\n";
}


echo "\r\n";
echo "***** use asort *****\r\n";
$it->asort();
foreach($it as $key=>$value){
	echo $key.' : '.$value."\r\n";
}
