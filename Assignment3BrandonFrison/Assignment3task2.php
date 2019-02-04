<pre>
<?php
//Brandon Frison
	if(isset($_REQUEST['submit'])){
		calculationofform();
	}
	else{
		showtheform();
	}
	function calculationofform(){
		$starting = $_POST['starting'];
		$percentage = $_POST['percentage'];
		$days = $_POST['days'];
		if (is_numeric($starting) && is_numeric($percentage) && is_numeric($days)){
			//calculations
			echo "Day 1: ".$starting."<br>";
			$calcnum = ($percentage + 100)/100;
			$result = $calcnum * $starting;
			echo "Day 2: ".$result."<br>";
			for ($i = 2; $i < $days; $i++)
			{
					$dnum = $i + 1;
					$result = $calcnum * $result;
					echo "Day ".$dnum.": ".number_format($result, 2)."<br>";
					
			}
		}
		else
		{
			echo "you didn't enter some information that we needed";
		}
	}
			
	function showtheform(){
	print<<<doc
	<form method="post" action="$_SERVER[PHP_SELF]" >
		Starting number of organism: 
		<input type="text" name="starting"  /><br/>
		Average daily increase: 
		<input type="text" name="percentage"  /><br/>
		Number of days to multiple:
		<input type="text" name="days"  /><br/>
		<input type="submit" name="submit" value="FIND THE APPROX POPULATION" />
	</form>
doc;
	}
?>	
</pre>