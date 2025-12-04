<html>
	<body>
		<form method="post">
			Enter Number1:
			<input type="number" name="num1">
			Enter Number2:
			<input type="number" name="num2">
			<input type="submit" name="operator" value="ADDITION">
			<input type="submit" name="operator" value="SUBTRACTION">
			<input type="submit" name="operator" value="MULTIPLY">
			<input type="submit" name="operator" value="DIVISION">
		</form>
	</body>
</html>
<?php
	if($_POST)
	{
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operator = $_POST['operator'];
		$result = '';
		
		if(is_numeric($num1)&&is_numeric($num2))
		{
			switch($operator)
			{
				case"ADDITION":
				$result = $num1 + $num2;
				echo "Sum is $result";
				break;
				
				case"SUBTRACTION":
				$result = $num1 - $num2;
				echo "Sum is $result";
				break;
				
				case"MULTIPLY":
				$result = $num1 * $num2;
				echo "Sum is $result";
				break;
				
				case"DIVISION":
				$result = $num1 / $num2;
				echo "Sum is $result";
				break;
			}
		}
	}
?>