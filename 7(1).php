<html>
	<body>
		<form method="post">
			Enter Number1:
			<input type="number" name="num1">
			Enter Number2:
			<input type="number" name="num2">
			<input type="submit" name="submit" value="CALCULATE">
			
			
		</form>
	
	
	</body>
	<?php
		if($_POST)
		{
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$add = $num1 + $num2;
			$sub = $num1 - $num2;
			$mul = $num1 * $num2;
			$div = $num1 / $num2;
			
			echo "Addition is:$add <br> Subtraction is:$sub <br> Multiplication is:$mul <br> Division is:$div";
		}
	
	
	?>




</html>