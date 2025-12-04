<html>
	<body>
		<form method="post">
		Enter Number:
		<input type="number" name="num"><br>
		<input type="submit" name="submit">
	
	
	</body>



</html>
<?php
	function sumofdigit()
	{
		if($_POST)
		{
			$num = $_POST['num'];
			$sum=0;
			while($num>0)
			{
				$sum = $sum + $num %10;
				$num = $num/10;
			}
			echo "sum of digit is: $sum";
		}
	}
	sumofdigit();
	


?>