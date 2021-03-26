<?php
class Overload{
	public $array = [];
	function __get($id){
		if(array_key_exists($id, $this->array)){
			return $this->array[$id];
		}
		else{
			$str = "NO DATA";
			return $str;
		}
	}
	function __set($id, $value){
		$this->array[$id] = $value;
	}
	function __isset($id){
		if(array_key_exists($id, $this->array)){
			return isset($this->array[$id]);
		}
		else{
			$this->array[$id] = "NOT SET";
			return $this->array[$id];
		}
	}
	function __unset($id){
		if(array_key_exists($id, $this->array)){
			unset($this->array[$id]);
		}
		else{
			$this->array[$id] = NULL;
		}
	}
}
?>