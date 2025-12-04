<html>
	<body>
		<form method="post">
			Enter number1:
			<input type="text" name="num1"><br><br>
			Enter number2:
			<input type="text" name="num2">
			<input type="submit" value="click" name="submit">
		</form>
	</body>
</html>
<?php
	if($_POST)
	{
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		
		if($num1>$num2)
			echo "$num1 is greater";
		else
			echo "$num2 is greater";
	}
?>