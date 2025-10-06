<html>
	<head>
		<title>Update product rate</title>
	</head>
	<body>
		<form method="POST">
			Enter a pid:
			<input type="text" name="num1"> <br><br>
			Enter a product price:
			<input type="text" name="num2"> <br><br>
			<input type="submit" value="click me" name="add">
		</form> 
	</body>
</html>

<?php
	$conn=mysqli_connect('localhost','root','','har');
	
	if(isset($_POST['add']))
	{
		$a=$_POST['num1'];
		$b=$_POST['num2'];
		
		$sql="UPDATE product SET price='$b' WHERE pid='$a'";
		
		if(mysqli_query($conn,$sql))
		{
			if(mysqli_affected_rows($conn)>0)
			{
				echo "<p style='color:green;'>Rate update successfully</p>";
			}
			else
			{
				echo "<p stye='color:red;'>Error:pid not found</p>";
			}
		}
	}
	mysqli_close($conn);
?>