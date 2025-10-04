<html>
	<head>
		<title>Deleting a number</title>
	</head>
	<body>
		<form method="POST">
			Eneter a pid:
			<input type="text" name="num1"> <br><br>
			<input type="submit" value="click me" name="add">
		</form>
	</body>
</html>

<?php
	$conn=mysqli_connect('localhost','root','','har');
	
	if(isset($_POST['add']))
	{
		$n=$_POST['num1'];
		
		$sql="DELETE from product WHERE pid='$n'";
		
		if(mysqli_query($conn,$sql))
		{
			echo "<p style='color:green;'> Record delete successfully</p>";
		}
		else
		{
			echo "<p style='color:red;'>Error: pid not found</p>";
		}
	}
	mysqli_close($conn);
?>