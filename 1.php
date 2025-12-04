<html>
	<body>
		<form method="post">
			Enter number:
			<input type="text" name="num">
			<input type="submit" name="submit" value="click">
		</form>
	</body>
<html>
<?php
	if($_POST)
	{
		$n=$_POST['num'];
		if($n>0)
			echo "Number $n is positive";
		
		else if($n<0)
			echo "Number $n is negative";
		
		else
			echo "Number $n is zero";
	}
?>
