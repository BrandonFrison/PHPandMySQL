<?php
//Brandon Frison

	echo "<pre>";
	if(isset($_POST['submit']) && $_POST['process'] == "ProcessInfo")
		{
			inputform();
		}
	else{
			show_form();
		}
	function inputform(){
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_POST['name'];
			$add = $_POST['address'];
			$phone = $_POST['phone'];
			$birth = $_POST['birthday'];
			$sal = $_POST['salary'];
			print "Your name is ";
			print_r($name);
			print "Your home address is ";
			print_r($add);
			print "Your phone number is ";
			print_r($phone);
			print "Your birthday is ";
			print_r($birth);
			print "Your salary is ";
			print_r($sal);
		}
	}
	
	function show_form(){
		print<<<doc
		<form method="POST" action="$_SERVER[PHP_SELF]" enctype ="multipart/form-data">

		Enter your name:<input type="text" name="name[]" value=""/><br>
		Enter your phone:<input type="text" name="phone[]" value=""/><br>
		Enter your address:<input type="text" name="address[]" value=""/><br>
		Enter your birthday:<input type="text" name="birthday[]" value=""/><br>
		Enter your salary:<input type="text" name="salary[]" value=""/><br>

		<input type="hidden" name="process" value="ProcessInfo"/><br>
		<input type="submit" name="submit" value="Submit Info"/><br>
	</form>
doc;
}	
?>