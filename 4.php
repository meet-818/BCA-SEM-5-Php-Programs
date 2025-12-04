<html>
	<body>
		<form method="post">
			Enter String:
			<input type="text" name="str">
			<button type="submit">CHECK</button>
		</form>
	</body>
	<?php
		if($_POST)
		{
			$str = $_POST['str'];
			$reverse = strrev($str);
			if($str == $reverse)
			{
				echo "The string $str is palindrome";
			}
			else
			{
				echo "The String $str is not palindrome";
			}
		}	
	?>
</html>