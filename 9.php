<html>
	<body>
		<form method="post">
			Enter Number:
			<input type="number" name="num">
			<input type="submit" name="submit" value="CLICK">
			
		
		
		</form>
	
	
	</body>


</html>
<?php
	if($_POST)
	{
		$a = $_POST['num'];
		for($i=0;$i<=$a;$i++)
		{
			if($i%2==0)
				echo $i . ",";
		}
	}


?>