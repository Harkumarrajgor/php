<html>
	<body>
		<form method="POST">
			<input type="text" name="num1" placeholder="Enter a number"><br><br>
			<input type="submit" value="click me" name="add"><br><br>
		</form>
	</body>
</html>

<?php
	function sum($num)
	{
		$sum=0;
		while($num>0)
		{
			$sum+=$num%10;
			$num=(int)($num/10);
		}
		echo "sum of digit is:$sum";
	}
	
	if(isset($_POST["add"]))
	{
		$sum=$_POST["num1"];
		sum($sum);
	}
?>