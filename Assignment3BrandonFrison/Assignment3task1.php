<pre>
<?php
//Brandon Frison
$fname = "c:/wamp/www/guestbook.txt";
$fpointer = fopen($fname,"a+b"); // a+ allows user to view the guestbook as well as create and append it
$username = "Jeffthebest";  //enter username here
$address = "4678 Jeff Street";   //enter address here
if(isset($username,$address)){
	$check = file_get_contents($fname);
	$truth = preg_match("/($username)/",$check,$match);
	if ($truth == 0)
	{
	fwrite($fpointer,"The username is: ".$username." and the address is: ".$address."\r\n");
	}
	else
	{
		echo "<br/>***username is taken***<br/>";
	}
	fclose($fpointer);				
							}


if(file_exists($fname))
{
		$fpointer = fopen($fname,"r");
		
	while(!feof($fpointer)) // read till the end of the file
		{
			echo fgets($fpointer)."<br/>"; //prints each line
		}
		fclose($fpointer); //close file
}
else
	{
		
		echo "ERROR the file has not been created!";
	}

?>
</pre>