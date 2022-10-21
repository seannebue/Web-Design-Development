<html>
<head><Title>My Looping Statements</title></head>
<?php

//while loop
$fuel = 10;
while($fuel>=1)
{	
	echo "There's enough fuel<br>";
	$fuel=$fuel-1;
}
echo "<br>";
			
//do...while
$count = 1;
do
	echo "$count times 12 is ". $count*12 . "<br>";
	while(++$count <= 12);
echo "<br>";
			
//for loop
for ($count = 1; $count <= 12; ++$count)
{	
	echo "$count times 12 is ". $count*12 . "<br>";
}
echo "<br>";
			
//Foreach loop
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value)
{
	echo "$value <br>";
}
echo "<br>";
			
//break statement
for ($x = 0; $x < 10; $x++)
{
	if ($x == 4)
	{
		break;
	}
	echo "The number is: $x <br>";
}
echo "<br>";
			
//continue statement
for ($x = 0; $x < 10; $x++)
{
	if ($x == 4)
	{
		continue;
	}
		echo "The number is: $x <br>";
}
echo "<br>";

//Application 1
for ($x = 0; $x < 11; $x++) 
{
  if ($x == 11) 
  {
    break;
  }
  echo "Hello $x <br>";
}

echo "<br>";
//Application 2
//Create a PHP program that displays integer lessthan 10 but not less than 3
for ($x = 3; $x < 11; $x++) 
{
  if ($x == 10) 
  {
    break;
  }
  echo "$x <br>";
}

?>

</html>