<html>
	<body>
		<form method="POST">
			Enter a number:
			<input type="text" name="num1"><br><br>
			<input type="submit" value="Enter" name="add">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['add']))
	{
		$n=$_POST["num1"];
		$sum=0;
		
		for($i=0; $i<=$n; $i++)
		{
			$sum+=$i;
		}
		echo "Sum of number is $sum";
	}
?>