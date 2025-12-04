<?php 
$sub=array("Asp.net","php","Html","Python");
echo"Using for loop:<br>";
for($i=0;$i<count($sub);$i++)
{
	echo $sub[$i]."<br>";
}
echo"<br>";
echo"Using Foreach Loop:<br>";
foreach($sub as $val)
{
	echo $val."<br>";
}
?>