<?php
//Brandon Frison
//<body bgcolor = #$hexadecimal_color >
	function random_bg()
	{
		$n = rand( 0, 16);
		switch ($n)
		{
		case 0:
		$hexadecimal_color = '#32CD32';
		break;	
		case 1:
		$hexadecimal_color = '#191970';
		break;	
		case 2:
		$hexadecimal_color = '#BDB76B';
		break;	
		case 3:
		$hexadecimal_color = '#FFDEAD';
		break;	
		case 4:
		$hexadecimal_color = '#FF1493';
		break;		
		case 5:
		$hexadecimal_color = '#9ACD32';
		break;
		case 6:
		$hexadecimal_color = '#8B0000';
		break;	
		case 7:
		$hexadecimal_color = '#556B2F';
		break;	
		case 8:
		$hexadecimal_color = '#6495ED';
		break;	
		case 9:
		$hexadecimal_color = '#663399';
		break;	
		case 10:
		$hexadecimal_color = '#66CDAA';
		break;			
		case 11:
		$hexadecimal_color = '#660033';
		break;	
		case 12:
		$hexadecimal_color = '#ccccff';
		break;	
		case 13:
		$hexadecimal_color = '#333300';
		break;	
		case 14:
		$hexadecimal_color = '#996633';
		break;	
		case 15:
		$hexadecimal_color = '#cc6600';
		break;	
		case 16:
		$hexadecimal_color = '#391313';
		break;	
		default:
		$hexadecimal_color = '#999966';
		
		}	
		echo "<body bgcolor = #$hexadecimal_color >";	
	}
?>
<html>
<head>
<title>
</title>
</head>
<body>
<pre>
<?php
	random_bg();
?>		
</pre>
</body>
</html>