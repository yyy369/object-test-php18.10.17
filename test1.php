<?php
header("Content-type: text/html; charset=utf-8");
require_once('good.class.php');
$shangpin1= new Goods('洗发水',20,20.00);
$shangpin2= new Goods('沐浴露',10,25.00);
$shangpin1->printall();
$shangpin2->printall();



?>