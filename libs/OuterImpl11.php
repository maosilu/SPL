<?php
class OuterImpl extends IteratorIterator{
	public function current(){
		return parent::current().'_tail';
	}
	public function key(){
		return 'prev_'.parent::key();
	}
}