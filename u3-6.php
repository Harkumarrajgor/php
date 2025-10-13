<html>
	<head>
		<title>Searching</title>
	</head>
	<body>
		<form method="POST">
			Enter a pid:
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
		$sql="SELECT * FROM product WHERE pid='$n'";
		
		$result=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				echo "Product Id". $row['pid'] ."<br>";
				echo "Product Name". $row['pname'] ."<br>";
				echo "Product Price". $row['price'] ."<br>";
			}
		}
		else
		{
			echo "NO product found";
		}
		mysqli_close($conn);
	}
?>