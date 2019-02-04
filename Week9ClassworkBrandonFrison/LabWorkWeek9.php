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
		$address = $_POST['address'];
		$postalcode = $_POST['postalcode'];
	$addpattern = "/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/";
	$pcpattern = "/^\d{5}((-|\s)?\d{4})?$/";
			
			if(preg_match($addpattern,$address)){
				if(preg_match($pcpattern,$postalcode)){
					echo "your address is ".$address." and your matching postal code is ".$postalcode;
				}
				else
				{
					echo "bad postal code";
				}
				
			}
			else{
				
		
			echo "bad address";
			}
	}
			
	function showtheform(){
	print<<<doc
	<form method="post" action="$_SERVER[PHP_SELF]" >
		Enter your address for validation here: 
		<input type="text" name="address"  /><br/>
		Enter your postal code for validation here:
		<input type="text" name="postalcode"  /><br/>
		<input type="submit" name="submit" value="VALIDATE!!!" />
	</form>
doc;
	}
?>	
</pre>