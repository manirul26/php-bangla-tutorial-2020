<!DOCTYPE html>
<html>
<body>
<div style=" margin:0 auto; width: 300px;">
<h1 style=" margin:0 auto; text-align:center">PHP Bangla Part - 08 </h1>
<h1 style=" margin:0 auto; text-align:center; font-size: 12px;">PHP Array</h1>
<?php
// indexing array


/* $arrayexample = array("Red","Blue","Green","Yellow");
print_r($arrayexample);

echo "</br>";

echo 'Index 0 : '.$arrayexample[0]; echo "</br>";
echo 'Index 1 : '.$arrayexample[1]; */


// associative arrays
/* $personaldata = array("name" => "Alam", "age" => "35", "address" => "Comilla");
print_r($personaldata);

echo "</br>";
echo "</br>";

echo $personaldata['name'];
echo "</br>";
echo "</br>";
if($personaldata['name'] == "Alam")
{
	echo "Its ALam";
}
else
{
	echo "Alam not found";
} */
/// multi dimensional array
/* $cars = array(
			array("corola",2020,1400000),
			array("BMW",2020,2000000)
			);
print_r($cars); */


//Sorting array

$arraycolor= array("Red","Blue","Green","Yellow","Bed");
sort($arraycolor);
//print_r($t);
$lengthcount = count($arraycolor);

for($x = 0; $x < $lengthcount; $x++)
{
	echo $arraycolor[$x];
	echo "</br>";
}
?>


</div>
</body>
</html>


