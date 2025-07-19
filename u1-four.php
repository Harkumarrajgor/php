<html>
	<body>
		<form method="POST">
			Enter a string:
			<input type="text" name="num1"><br><br>
			<input type="submit" value="click" name="add">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['add']))
	{
		$n=$_POST["num1"];
		$rev=strrev($n);
		
		if($n==$rev)
		{
			echo "string is palindrome";
		}
		else
		{
			echo "string is not palindrome";
		}
	}
?>