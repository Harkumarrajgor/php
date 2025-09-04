<?php
	function myfun1()
	{
		$first="hello";
		$second="world";
		$result=$first." ".$second;
		echo "non-paramterized".$result."<br>";
	}
	
	function myfun2($a,$b)
	{
		$result=$a." ".$b;
		echo "paramterized".$result."<br>";
	}
	
	myfun1();
	myfun2("Good","Morning");
?>