(page 3)
##### begin #####
##### protected.php #####
<?php
	session_start();
?>
<html><head><title>Protected page</title></head>
<body>
	<?php
	if (isset($_SESSION["Authenticated"]) && ($_SESSION["Autenticated"] == 1)){	
	?>	
	<h2>Protected Content</h2>
	<p>Hello. Since you are logged in, you can view protected content</p>
	<p>You can also <a href="BrandonFrison16.26.php?logout">Log out</a></p>
	<?php
	}
	else{
	?>
	<h2>You are not logged in</h2>
	<p>Hello. Since you are not logged in, you cannot view protected content</p>
	<p>But you can <a href="BrandonFrison16.25.html">log in</a></p>
	<?php
	}
	?>
</body>
</html>
##### protected.php #####
##### end #####