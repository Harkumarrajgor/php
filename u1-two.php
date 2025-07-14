<html>
	<body>
			<form method="POST">
		Enter a number1:
		<input type="text" name="num1"><br><br>
		
		Enter a number2:
		<input type="text" name="num2"><br><br>
		<input type="submit" value="click" name="add">
		</form>
	</body>
</html>

<?php
	
	if(isset($_POST['add']))
	{
		$a=$_POST["num1"];
		$b=$_POST["num2"];
		
		if($a<$b)
		{
			echo "A is smaller number";
		}
		else
		{
			echo "B is smaller number";	
		}
	}
?>