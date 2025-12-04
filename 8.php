<html>
	<body>
		<form method="post">
			Enter Radius:
			<input type="number" name="num">
		</form>
	</body>
</html>
<?php
	if($_POST)
	{
		$radius = $_POST['num'];
		$area = (3.14 * $radius * $radius);
		echo "The area of circle with radius $radius is $area";
	}
?>