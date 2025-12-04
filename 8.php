<?php 
$sub=array("Android","PHP","Python","Asp.Net","Sql");
$Search="Android";
$Cnt=0;
if(in_array($Search,$sub))
{
	echo"$Search exists in the Array.";
	$Cnt++;
}
else
{
	echo"$Search Does Not Exists in The Array.";
}
?>
