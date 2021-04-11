<?php
class LList implements IteratorAggregate {
    public function __construct() {
        $this->head = null;
    }
    public function getFirst() {
        return $this->head->data;
    }
    public function getLast() {
        if($this->head) {
            $node = $this->head;
            while($node->next != null) {
                $node = $node->next;
            }
            return $node->data;
        }
    }
    public function add($value) {
        $node = new LLItem($value);
        if ($this->head == null) {
            $this->head = $node;
        }
        else {
            $curnode = $this->head;
            while($curnode->next != null) {
                $curnode = $curnode->next;
            }
            $curnode->next = $node;
        }
    }
    public function addArr($array) {
        $arrList = new LLItem($array[0]);
        if(count($array) > 1) {
            $arrItemNow = $arrList;
            for($i = 1; $i < count($array); $i++) {
                $newNode = new LLItem($array[$i]);
                $arrItemNow->next = $newNode;
                $arrItemNow = $arrItemNow->next;
            }
        }
        if($this->head == null) {
            $this->head = $arrList;
            return;
        }
        $curnode = $this->head;
        while($curnode->next != null) {
            $curnode = $curnode->next;
        }
        $curnode->next = $arrList;
    }
    public function remove($value) {
        if($this->head->data == $value) {
            $this->head = $this->head->next;
            return;
        }
        $node = $this->head->next;
        $prev = $this->head;

        while($node->data != $value) {
            if($node->next == null) {
                return;
            }
            else {
                $prev = $node;
                $node = $node->next;
            }
        }
        $prev->next = $node->next;
    }
    public function removeAll($value) {
        if($value == null) {
            return;
        }
        while($this->head->data == $value) {
            $this->head = $this->head->next;
        }

        $curnode = $this->head;
        while($curnode->next) {
            if($curnode->next->data == $value) {
                $curnode->next = $curnode->next->next;
            }
            else {
                $curnode = $curnode->next;
            }
        }
    }
    public function contains($value) {
        $curnode = $this->head;
        while($curnode) {
            if($curnode->data == $value) {
                return true;
            }
            else {
                $curnode = $curnode->next;
            }
        }
        return false;
    }
    public function clear() {
        $this->head = null;
    }
    public function count() {
        $numOfItems = 0;
        $curnode = $this->head;
        while($curnode != null) {
            $numOfItems++;
            $curnode = $curnode->next;
        }
        return $numOfItems;
    }

    public function toString() {
        $curnode = $this->head;
        $str = "";

        while($curnode != null) {
            if($curnode->next != null) {
                $str = $str . $curnode->data . ", ";
            }
            else {
                $str = $str . $curnode->data;
            }
            $curnode = $curnode->next;
        }
        
        return $str;
    }
    public function getIterator() {
        $curnode = $this->head;
        $arr = [];
        while($curnode) {
            array_push($arr, $curnode->data);
            $curnode = $curnode->next;
        }
        return new ArrayIterator($arr);
    }
}
?>