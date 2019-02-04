<?php
//Brandon Frison
	extract ($_REQUEST);
	//$contact = $_POST['contact']
	switch ($height)
	{
		case "5ft.0in":
		$weight = "95-128";
		break;	
		case "5ft.2in":
		$weight = "101-136";
		break;	
		case "5ft.4in":
		$weight = "108-145";
		break;	
		case "5ft.6in":
		$weight = "115-154";
		break;	
		case "5ft.8in":
		$weight = "122-164";
		break;	
		case "5ft.10in":
		$weight = "129-174";
		break;	
		default:
		print "you have chosen no weight";
	}
	print "for your height of: $height , a healthy weight range is $weight";
?>