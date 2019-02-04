<?php
//Brandon Frison
	extract ($_REQUEST);
	
	if(	is_numeric($test1))
	{
		if(	is_numeric($test2))
		{
			if(	is_numeric($test3))
			{
		$total = $test1 + $test2 + $test3;
		$average = $total/3;
		if($average >= 90 && $average <= 100)
		{
			print "<h1>$average is your grade which is an A</h1>";
		}
		elseif($average >= 80 && $average <= 89)
		{
			print "<h2>$average is your grade which is a B</h2>";
		}
		elseif($average >= 70 && $average <= 79)
		{
			print "<h3>$average is your grade which is a C</h3>";
		}
		elseif($average >= 60 && $average <= 69)
		{
			print "<h4>$average is your grade which is a D</h4>";
		}
		elseif($average >= 0 && $average <= 59)
		{
			print "<h5><font color='red'>$average is your grade which is a F, you need to concentrate!</font></h5>";
		}
			}
		}
		else
		{
			print "error in computing the value";
		}
	}	
	else
		{
			print "error in computing the value";
		}
?>