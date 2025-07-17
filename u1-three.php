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
		
		$a=0;
		$b=1;
		
		echo "fibbonacci series up to $n:<br>";
		
		for($i=0; $i<=$n; $i++)
		{
			echo "$a";
			$c=$a+$b;
			$a=$b;
			$b=$c;
			echo "<br>";
			
			if($a>$n)
			{
				break;
			}
		}
	}
?>