<?php 
$person=array(
	"Name"=>"MeetuBha",
	"Age"=>"20",
	"Email"=>"Meetu123@gmail.com",
	"Contact"=>"9999988888");
	
	foreach($person as $key => $value)
	{
		echo $key.":".$value,"<br>";
	}
?>