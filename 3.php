<?php
	session_start();
	if(isset($_POST['loginid']))
	{
		$_SESSION['loginid']=$_POST['loginid'];
		if(isset($_SESSION['loginid']))
		{
			$loginid = $_SESSION['loginid'];
			echo "The login id is:" . $loginid;
		}
		else
		{
			echo "The login id variable not found";
		}
	}



?>