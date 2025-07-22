<html>
	<body>
		<form method="POST">
		Enter a number:
		<input type="text" name="num1"><br><br>
		<input type="submit" value="click" name="add">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['add']))
	{
		$n=$_POST["num1"];
		$sqr=$n*$n;
		$rt=$n*$n*$n;
		
		echo "Square is $sqr <br>";
		echo "Cube is $rt";
	}
?>