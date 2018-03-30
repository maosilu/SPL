<?php
class OuterImpl extends IteratorIterator{
	public function current(){
		return parent::current().'_tail';
	}
	public function key(){
		return 'pre_'.parent::key();
	}
}
$array = ['value1', 'value2', 'value3', 'value4'];
$outerObj = new OuterImpl(new ArrayIterator($array));
foreach($outerObj as $key => $value){
	echo $key.' : '.$value."\r\n";
}