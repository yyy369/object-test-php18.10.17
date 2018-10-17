<?php
Class Goods{
     var $name;
     var $num;
     var $pay;
    function __construct($name,$num,$pay){
    	$this->name=$name;
    	$this->num=$num;
    	$this->pay=$pay;
    }
    public function printall(){
    	echo "商品名:".$this->name.'数量:'.$this->num.'价格:'.$this->pay."<br/>";
    }
} 