<?php
	setcookie("username","welcome",time()+3600);
	if(isset($_COOKIE["username"]))
	{
		echo "The value of cookie is:" . $_COOKIE["username"];
	}
	else
	{
		echo "The cookie is not set";
	}


?>