<?php
//Brandon Frison

	echo "<pre>";
	if(isset($_POST['image']) && $_POST['process'] == "ProcessInfo")
		{
			inputform();
		}
	else{
			show_form();
		}
	function inputform(){
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$choices = $_POST['fruit'];
			print_r($choices);
			foreach($choices as $value){
				if($value == "Lemon")
				{
					echo '<img src="lemon.png">';	
				}
				if($value == "Apple")
				{
					echo '<img src="apple.png">';	
				}
				if($value == "Banana")
				{
					echo '<img src="banana.png">';	
				}
				if($value == "Orange")
				{
					echo '<img src="orange.png">';	
				}
				if($value == "Grape")
				{
					echo '<img src="grape.png">';	
				}
			}
		}
	}
	
	function show_form(){
		print<<<doc
		<form method="POST" action="$_SERVER[PHP_SELF]" enctype ="multipart/form-data">

		<select name="fruit[]" multiple="multiple">
		<option>Lemon</option>
			<option>Apple</option>
			<option>Banana</option>
			<option>Orange</option>
			<option>Grape</option>
		</select>

		<input type="image" alt="submit_image" src="subby.jpeg" height="250" width="242"/><br>
		<input type="hidden" name="process" value="ProcessInfo"/><br>
	</form>
doc;
}	
?>