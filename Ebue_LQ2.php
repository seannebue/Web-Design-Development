<html>
<head>
<title>Long Quiz</title>
<body bgcolor = "#FB9E4C">
<body align = center>
</head>
<h4>Problem 1</h4>
<?php
	$salary_rate = 600;
	echo "salary rate: $salary_rate<br>";
	
	$salary = $salary_rate*15;
	echo "<br>salary: $salary<br/>";
	
	$taxable_amount = 0.30 * $salary;
	echo "<br>taxable amount: $taxable_amount<br/>";
	
	$net_pay = $salary - $taxable_amount;
	echo "<br>net pay: $net_pay<br/>";
?>

<h4><br>Problem 2</h4>
<?php
	$a = 0;
	for($i = 1;$i<=50;$i++){
		$a += $i;
	}
	echo $a;
?>

</h1>

</body>
</html>