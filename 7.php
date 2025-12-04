<?php
	$Num=array(10,20,30,40,10,50,30);
	$Unique=array_unique($Num);
	
	//echo"Array Before Removing Duplicates:  <br>";
	
	echo"Array After Removing Duplicates:";
	
	foreach($Unique as $val)
	{echo $val.",";}
?>