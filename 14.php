<?php 
$num=array(3,4,3,5,3,7,9,2,3);
$x=3;
$count=0;
$n=count($num);

for($i=0;$i<$n;$i++)
{
	if($num[$i]==$x)
	{
		$count++;
	}
}
echo"The Value $x Appears $count Times in Array";
?>