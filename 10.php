<html>
	<body>
		<h2>Enter 3 Number</h2>
		<form method="post">
		Number1:
		<input type="number" name="num1" required><br><br>
		Number2:
		<input type="number" name="num2" required><br><br>
		Number3:
		<input type="number" name="num3" required><br><br>
		<input type="submit" value="CHECK">
	
	
	</body>



</html>
<?php
	function isPrime($n)
	{
		if($n<=1)
			return false;
		if($n==2)
			return true;
		if($n%2==0)
			return false;
		
		for($i=3;$i<=sqrt($n);$i+=2)
		{
			if($n%$i==0)
				return false;
		}
		return true;
	}
	
	if($_POST)
	{
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$num3 = $_POST["num3"];
		$sum = $num1 + $num2 + $num3;
		
		echo "<h3> Sum of $num1+$num2+$num3=$sum </h3>";
		
		if(isPrime($sum))
		{
			echo "The sum is prime number";
		}
		else
		{
			echo "The sum is not a prime number";
		}
	}


?>