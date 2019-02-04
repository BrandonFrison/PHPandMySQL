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
	
$drink = $_POST['drink'];
$fcola = "c:/wamp/www/colastock.txt";
$froot = "c:/wamp/www/rootstock.txt";
$flemon = "c:/wamp/www/lemonstock.txt";
$fgrape = "c:/wamp/www/grapestock.txt";
$fcream = "c:/wamp/www/creamstock.txt";
$fsales = "c:/wamp/www/salesdrinks.txt";


if(!file_exists($fcola)){
	$colapoint = fopen($fcola,"w+b");
	fwrite($colapoint, "20");
}
if(!file_exists($froot)){
	$rootpoint = fopen($froot,"w+b");
	fwrite($rootpoint, "20");
}
if(!file_exists($flemon)){
	$lemonpoint = fopen($flemon,"w+b");
	fwrite($lemonpoint, "20");
}
if(!file_exists($fgrape)){
	$grapepoint = fopen($fgrape,"w+b");
	fwrite($grapepoint, "20");
}
if(!file_exists($fcream)){
	$creampoint = fopen($fcream,"w+b");
	fwrite($creampoint, "20");
}
if(!file_exists($fsales)){
	$salespoint = fopen($fsales,"w+b");
}
$salescurr = file_get_contents($fsales);

switch($drink)
{
	case "cola":
	$colastock = file_get_contents($fcola);
	$colapoint = fopen($fcola,"w+b");
	if ($colastock > 1)
	{
		$colastock--;
		fwrite($colapoint, $colastock);
		echo "the current stock left is ".$colastock;
		$Bcolastock = 20 - $colastock;
		$colaM = 2;
		$Tcola = $colaM * $Bcolastock;
		
		if (isset($salescurr) == TRUE)
		{
			$salescurr = file_get_contents($fsales);
			$salespoint = fopen($fsales, "w+b");
			$salesnew = $salescurr + $colaM;
			fwrite($salespoint,$salesnew);
			fclose($salespoint);
		}
		else
		{
			$salespoint = fopen($fsales, "w+b");
			fwrite($salespoint,$Tcola);
			fclose($salespoint);
		}
		
		fclose($colapoint);
	}
	else
	{
		echo "sorry but that drink is out of stock";
	}
	break;
	case "root":
	$rootstock = file_get_contents($froot);
	$rootpoint = fopen($froot,"w+b");
	if ($rootstock > 1)
	{
		$rootstock--;
		fwrite($rootpoint, $rootstock);
		echo "the current stock left is ".$rootstock;
		$Brootstock = 20 - $rootstock;
		$rootM = 2;
		$Troot = $rootM * $Brootstock;
		
		if (isset($salescurr) == TRUE)
		{
			$salescurr = file_get_contents($fsales);
			$salespoint = fopen($fsales, "w+b");
			$salesnew = $salescurr + $rootM;
			fwrite($salespoint,$salesnew);
			fclose($salespoint);
		}
		else
		{
			$salespoint = fopen($fsales, "w+b");
			fwrite($salespoint,$Troot);
			fclose($salespoint);
		}
		fclose($rootpoint);
	}
	else
	{
		echo "sorry but that drink is out of stock";
	}
	break;
	case "lemon":
	$lemonstock = file_get_contents($flemon);
	$lemonpoint = fopen($flemon,"w+b");
	if ($lemonstock > 1)
	{
		$lemonstock--;
		fwrite($lemonpoint, $lemonstock);
		echo "the current stock left is ".$lemonstock;
		$Blemonstock = 20 - $lemonstock;
		$lemonM = 1;
		$Tlemon = $lemonM * $Blemonstock;
		
		if (isset($salescurr) == TRUE)
		{
			$salescurr = file_get_contents($fsales);
			$salespoint = fopen($fsales, "w+b");
			$salesnew = $salescurr + $lemonM;
			fwrite($salespoint,$salesnew);
			fclose($salespoint);
		}
		else
		{
			$salespoint = fopen($fsales, "w+b");
			fwrite($salespoint,$Tlemon);
			fclose($salespoint);
		}	
		fclose($lemonpoint);
	}
	else
	{
		echo "sorry but that drink is out of stock";
	}
	break;
	case "grape":
	$grapestock = file_get_contents($fgrape);
	$grapepoint = fopen($fgrape,"w+b");
	if ($grapestock > 1)
	{
		$grapestock--;
		fwrite($grapepoint, $grapestock);
		echo "the current stock left is ".$grapestock;
		$Bgrapestock = 20 - $grapestock;
		$grapeM = 1.5;
		$Tgrape = $grapeM * $Bgrapestock;
		
		if (isset($salescurr) == TRUE)
		{
			$salescurr = file_get_contents($fsales);
			$salespoint = fopen($fsales, "w+b");
			$salesnew = $salescurr + $grapeM;
			fwrite($salespoint,$salesnew);
			fclose($salespoint);
		}
		else
		{
			$salespoint = fopen($fsales, "w+b");
			fwrite($salespoint,$Tgrape);
			fclose($salespoint);
		}
		fclose($grapepoint);
	}
	else
	{
		echo "sorry but that drink is out of stock";
	}
	break;
	case "cream":
	$creamstock = file_get_contents($fcream);
	$creampoint = fopen($fcream,"w+b");
	if ($creamstock > 1)
	{
		$creamstock--;
		fwrite($creampoint, $creamstock);
		echo "the current stock left is ".$creamstock;
		$Bcreamstock = 20 - $creamstock;
		$creamM = 1.5;
		$Tcream = $creamM * $Bcreamstock;
		
	if (isset($salescurr) == TRUE)
		{
			$salescurr = file_get_contents($fsales);
			$salespoint = fopen($fsales, "w+b");
			$salesnew = $salescurr + $creamM;
			fwrite($salespoint,$salesnew);
			fclose($salespoint);
		}
		else
		{
			$salespoint = fopen($fsales, "w+b");
			fwrite($salespoint,$Tcream);
			fclose($salespoint);
		}
		fclose($creampoint);
	}
	else
	{
		echo "sorry but that drink is out of stock";
	}
	break;
	
	
}

	$total = file_get_contents($fsales);
	
	echo "<br>current total sales is $".$total;
	
	//comments on task 3:
	//I couldn't figure out how to make the variable save in between sessions of the form so I created files to save the values of the sales total as well as the stock of the
	//drinks that are chosen. I had it wipe the file using a w+ after every use so that it would only display the one value. I used a switch case to determine which radio
	//button was selected.
}


function showtheform(){
	print<<<doc
<form method="post" action="$_SERVER[PHP_SELF]" >
Select a radio button (vending machine button) for your drink<br>
<input type="submit" name="submit" value="Pay for your drink" />
<br>
Cola ($2.00 each) 
<input type="radio" name="drink" value="cola" /><br/>
<input type="image" src="cola.ico" alt="pic of cola" width="100" height="100">
Root beer ($2.00 each)
<input type="radio" name="drink" value="root"  /><br/>
<input type="image" src="root.jpg" alt="pic of root beer" width="100" height="100">
Lemon lime soda( $1.00 each)
<input type="radio" name="drink" value="lemon"  /><br/>
<input type="image" src="lime.jpg" alt="pic of lemon lime" width="100" height="100">
Grape Soda ($1.50 each)
<input type="radio" name="drink" value="grape"  /><br/>
<input type="image" src="grap.jpg" alt="pic of grape soda" width="100" height="100">
Cream Soda ($1.50 each)
<input type="radio" name="drink" value="cream"  /><br/>
<input type="image" src="cream.jpg" alt="pic of cream soda" width="100" height="100">
</form>
doc;
	}
?> 
</pre>