<html>
	<body>
		<form method="POST">
		Enter a pid:
		<input type="text" name="num1"><br><br>
		Enter a pname:
		<input type="text" name="num2"><br><br>
		Enter a pqty:
		<input type="text" name="num3"><br><br>
		<input type="submit" value="submit" name="add">
		</form>
	</body>
</html>

<?php
	$conn=mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'pro');
	
	if(isset($_POST['add']))
	{
		$a=$_POST["num1"];
		$b=$_POST["num2"];
		$c=$_POST["num3"];
		
		$sql="insert into product values('$a','$b','$c')";
		
		if(mysqli_query($conn,$sql))
		{
			echo "New record inserted successfully";
		}
		else
		{
			echo "Error";
		}
		mysqli_close($conn);
	}
?>