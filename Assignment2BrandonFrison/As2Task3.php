<html>
<head></head>
<body>
<pre>
<?php
	//Brandon Frison
	extract($_REQUEST);
	function calc_Stay_Charges($days){
		if (is_numeric($days)){
		$staytotal = 350*$days;
		echo 'your stay total is : '.$staytotal.'<br>';
		return $staytotal;
		}
		else
		{
			echo '<h1>invalid input for days</h1><br>';
		}
	}
	function calc_Misc_Charges($lab,$med,$rehab,$surg){
		if (is_numeric($lab) && is_numeric($med) && is_numeric($rehab) && is_numeric($surg)){
		$misctotal = $lab + $med + $rehab + $surg;
		echo 'your misc total is : '.$misctotal.'<br>';
		return $misctotal;
		}
		else
		{
			echo '<h1>invalid input for misc amounts</h1><br>';
		}
	}
	function calc_Total_Charges($days,$lab,$med,$rehab,$surg){
		if (is_numeric($days) && is_numeric($lab) && is_numeric($med) && is_numeric($rehab) && is_numeric($surg)){
		$total = ($days*350) + $lab + $med + $rehab + $surg;
		echo 'your final total amount is : '.$total.'<br>';
		}
		else
		{
			echo '<h1>invalid input to calculate total</h1><br>';
		}
	}
	calc_Stay_Charges($v_days);
	calc_Misc_Charges($v_lab,$v_med,$v_rehab,$v_surg);
	calc_Total_Charges($v_days,$v_lab,$v_med,$v_rehab,$v_surg);
?>
</pre>
</body>
</html>