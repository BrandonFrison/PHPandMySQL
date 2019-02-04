<html>
<head></head>
<body>
<pre>
<?php
//Brandon Frison
	$a_imgarr = array("aquarius.html" => "/Assignment2Images/aquarius.jpg", 
	"aries.html" => "/Assignment2Images/aries.jpg",
	"cancer.html" => "/Assignment2Images/cancer.jpg",
	"capricorn.html" => "/Assignment2Images/capricorn.jpg",
	"gemini.html" => "/Assignment2Images/gemini.jpg",
	"leo.html" => "/Assignment2Images/leo.jpg",
	"libra.html" => "/Assignment2Images/libra.jpg",
	"pisces.html" => "/Assignment2Images/pisces.jpg",
	"sagittarius.html" => "/Assignment2Images/sagittarius.jpg",
	"scorpio.html" => "/Assignment2Images/scorpio.jpg",
	"taurus.html" => "/Assignment2Images/taurus.jpg",
	"virgo.html" => "/Assignment2Images/virgo.jpg");
	
	foreach($a_imgarr as $key => $imgname) 
  { 
  echo '<a href="'.$key.'">
  <img src="'.$imgname.'" height=75 width=100> 
  </a>';
  }  


	
?>
</pre>
</body>
</html>