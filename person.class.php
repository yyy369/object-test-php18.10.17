<?php

Class person{
   var $name;
   var $age;
   var $sex;
 function __construct($name,$age,$sex){
   $this->name=$name;
   $this->age=$age;
   $this->sex=$sex;
 }
 public function walk(){
 	echo "我可以走!";
 }
 public function talk(){
 	echo "我可以说话！";
 }
 public function printall(){
 	echo "姓名:".$this->name.'年龄:'.$this->age.'性别:'.$this->sex."<br/>";
 }


}



?>