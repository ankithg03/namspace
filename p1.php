<?php
require_once("p2.php");
require_once("Name/p2.php");
$obj=new ankith\p2;
$getter=$obj->query("SELECT * FROM users");
var_dump($getter);
$obj1=new anotherClass\p2;
$obj1->anotherClassFunc();

?>