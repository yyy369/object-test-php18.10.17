<?php
header("Content-type: text/html; charset=utf-8");
require_once('person.class.php');
$people1= new person('张三',20,'男');
$people1->walk();
$people1->talk();
$people1->printall();
$people2= new person('李四',20,'女');
$people2->walk();
$people2->talk();
$people2->printall();
?>