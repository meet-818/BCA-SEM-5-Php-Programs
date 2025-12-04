<?php 
$num=array(32,18,5,23,1);
sort($num);
echo"Array Sorted In Ascending Order:"."<br>";
foreach($num as $val)
{
	echo $val."<br>";
}
rsort($num);
echo"array Sorted In Descending Order:"."<br>";
foreach($num as $val)
{
	echo $val."<br>";
}
?>