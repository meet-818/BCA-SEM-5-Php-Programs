<?php
	$count=0;
	if(isset($_COOKIE['visited']))
	{
		$count = $_COOKIE['visited']+1;
		setcookie('visited',$count,time()+(365*24*60*60),'/');
	}
	else
	{
		setcookie('visited',1,time()+(365*24*60*60),'/');
		$count = 1;
		$_COOKIE['visited']=$count;
	}
	echo "Total Visitor of the page:" . $_COOKIE['visited'];

?>