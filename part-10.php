<!DOCTYPE html>
<html>
<body>
<div style=" margin:0 auto; width: 300px;">
<h1 style=" margin:0 auto; text-align:center">PHP Bangla Part - 10 </h1>
<h1 style=" margin:0 auto; text-align:center; font-size: 14px; margin-top: 5px;">Writting PHP function</h1>
<?php

	function myfirstfunction()
	{
		echo "this is my first programming function";
	}
	function addsumval($number1,$number2)
	{
		echo "</br>";
		//echo 'sum total value'.$sum = $number1 + $number2;
		return $sum = $number1 + $number2;
	}
	// calling php function
    myfirstfunction();
	
	$returnvalue = addsumval(20,30);
	echo "Return value is : ".$returnvalue;

?>


</div>
</body>
</html>


