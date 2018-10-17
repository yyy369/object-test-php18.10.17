<?php
header("Content-type: text/html; charset=utf-8");
Class student{
      var $name;
      var $id;
      var $scort;
      function __construct($name,$id,$scort){
      	$this->name=$name;
      	$this->id=$id;
      	$this->scort=$scort;
      }
      function __destruct(){
      	 echo "对象已销毁";
      }
     public function jieshao(){
     	echo "我的名字是,".$this->name."<br/>";
     }

     public function printscore(){
     	echo "我的ID,".$this->id."<br/>";
     	echo "我的成绩是,".$this->scort."<br/>";
     }
}
   $student1=new student('杨博','001',100);
   $student1->jieshao();
   $student1->printscore();
   $student1=null;


?>