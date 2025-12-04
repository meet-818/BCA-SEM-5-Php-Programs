<html>
	<body>
		<form method="post">
			Enter Number:
			<input type="number" name="num">
			<button type="submit">SUBMIT</button>
		</form>
	</body>
	<?php
		if($_POST)
		{
			$num = $_POST['num'];
			$sum = 0;
			for($i=0;$i<=$num;$i++)
			{
				$sum = $sum + $i;
			}
			echo "Sum of first $num number is $sum";
		}
	?>
</html>
