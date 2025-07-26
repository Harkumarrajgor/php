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
		
		$max=$a+$b;
		echo "addition is $max<br>";
		
		$min=$a-$b;
		echo "subraction is $min<br>";
		
		$mul=$a*$b;
		echo "multiplication is $mul";
	}
?>