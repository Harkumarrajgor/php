<html>
	<body>
		<form method="POST">
		Enter a number:
		<input type="text" name="num1"><br><br>
		<input type="submit" value="click" name="radius">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['radius']))
	{
		$n=$_POST["num1"];
		$area=3.14*$n*$n;
		
		echo "$n";
	}
?>