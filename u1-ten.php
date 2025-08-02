<html>
	<body>
		<form method="POST">
		Enter a number1:
		<input type="text" name="num1"><br><br>
		Enter a number2:
		<input type="text" name="num2"><br><br>
		Enter a number3:
		<input type="text" name="num3"><br><br>
		<input type="submit" value="click" name="add"><br><br>
		
			<?php
				function prime($sum)
				{
					if($sum<2)
					{
						return false;
					}
					for($i=2; $i<$sum; $i++)
					{
						if($sum % $i==0)
						{
							return false;
						}
					}
					return true;
				}
				
				if(isset($_POST['add']))
				{
					$a=$_POST["num1"];
					$b=$_POST["num2"];
					$c=$_POST["num3"];
					
					$sum=$a+$b+$c;
					
					if(prime($sum))
					{
						echo "$sum is a prime number";
					}
					else
					{
						echo "$sum is not a prime number";
					}
				}
			?>
		
		</form>
	</body>
</html>