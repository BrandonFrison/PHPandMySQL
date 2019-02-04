<html>
<head>
	<title>Question 3</title>
	<style>
		body{
			background-color: #ADD8E6;
			font-family: Arial;
			font-size: 20px;
		}
		p {
			padding-left: 300px;
		}
		table {
			font-family: Arial;
			font-size: 20px;
		}
	</style>
</head>
<body>
<?php
	//Brandon Frison
	/*
		January 8th 2016
	*/
	# Question 3 first lab
	/*
		Total = rent + salary + supplies
		Operating income = sales – expense total
		Net income = operating income * 0.06 
	*/
	$rent = 25000;
	$salary = 37500;
	$supplies = 410;
	$sales = 190000;
	$total = $rent + $salary + $supplies;
	$operating = $sales - $total;
	$net = $operating - ($operating * 0.06);  //was shown as Net income = operating income * 0.06  but that doesn't make sense'
	
	
	print "= = = = = = = = = = = = = = = = = = == = = == = = == = = == = = == = == = == = =
					<p>Book store</p>
= = = = = = = = = = = = = = = = = = == = = == = = == = = == = = == = == = == = =
<table>
<tr>
	<td>Sales:</td>
	<td style='padding-left: 30px'>$$sales</td>
</tr>
<tr>
	<td>Expenses:</td>
</tr>
<tr>
	<td style='padding-left: 70px'>Rent:</td>
	<td style='padding-left: 30px'>$$rent</td>
</tr>
<tr>
	<td style='padding-left: 70px'>Salary:</td>
	<td style='padding-left: 30px'>$$salary</td>
</tr>
<tr>
	<td style='padding-left: 70px'>Supplies:</td>
	<td style='padding-left: 30px'>$$supplies</td>
</tr>
<tr>
	<td>Total:</td>
</tr>
<tr>
	<td style='padding-left: 70px'>Operating income:</td>
	<td style='padding-left: 30px'>$$operating</td>
</tr>
<tr>
	<td style='padding-left: 70px'>Income after taxes:</td>
	<td style='padding-left: 30px'>$$net</td>
</tr>
</table>
= = = = = = = = = = = = = = = = = = == = = == = = == = = == = = == = == = == = ="
?>
</body>
</html>