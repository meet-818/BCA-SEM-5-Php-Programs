<html>
	<body>
		<form method="post">
			Enter Number:
			<input type="number" name="num">
			<input type="submit" name="submit" value="CALCULATE">
		
		
		</form>
	
	</body>
	<?php
		if($_POST)
		{
			$num = $_POST['num'];
			$square = $num*$num;
			$cube = $num * $num * $num;
			echo "The square of $num is $square <br>";
			echo "The cube of $num is $cube";
		}
	
	
	?>





</html>