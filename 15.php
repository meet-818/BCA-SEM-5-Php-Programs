<?php
function concate1()
{
	$str1="Hello";
	$str2="Word";
	$ans=$str1." ".$str2;
	return $ans;
}
echo concate1()."<br>";
function concate2($string1,$string2)
{
	return $string1." ".$string2;
}
echo concate2("Hello","PHP");
?>