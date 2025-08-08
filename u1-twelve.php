<html>
	<body style="background-color:
		<?php
			if(isset($_POST["add"]))
			{
				switch($_POST['c'])
				{
					case 'red':
						$color='red';
						break;
						
					case 'green':
						$color='green';
						break;
						
					case 'blue':
						$color='blue';
						break;
						
					default:
						$color='white';
				}
			}
			echo $color;
		?>
	">
	<form method="POST">
		<select name='c'>
			<option value="red">RED</option>
			<option value="green">GREEN</option>
			<option value="blue">BLUE</option>
		</select>
		<input type="submit" value="click me" name="add">
	</form>
</body>
</html>