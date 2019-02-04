<html><head><title>Empty Fields</title>
<body><div align="center">
<h2>Validating Input</h2>
<?php
	//Brandon Frison
	$errors=array();
	if(isset($_REQUEST['submit'])){
		
		validate_input();
		
		if(count($errors) != 0){ // error was on second right bracket
			
			display_form();
		}
		else{
			echo "<b>OK! Go ahead and Process the form!</b><br />";
		}
	}
	else{
		display_form();
	}
	function validate_input(){
		global $errors;
		if($_POST["name"] == ""){
			$errors['name']="<font color='red'>
			***Your name?***</font>";
		}
	}
	function display_form(){
		global $errors;
		?>
		<b>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			What is your name? <br />
			<input type="text" name="name[]" value="<?php echo $_POST['name']; ?>"/> <!-- needed ' ' around name and [] after name in name -->
			<br />
			<?php echo $errors['name'];	?>
			<br />
			What is your phone number?<br />
			<input type="text" name="phone" value="<?php echo $_POST['phone']; ?>"/> <!-- needed ' ' around phone and [] after phone in name -->
			<br />
			<?php echo $errors['phone']; ?>
			<br />
			<input type="reset">
			<input type="submit" name="submit"/>
			<br />
			</form>
			<?php
			}
			?>
</b>
</div>
</body>
</html> 