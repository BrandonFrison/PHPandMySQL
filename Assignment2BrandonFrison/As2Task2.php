<html>
<head></head>
<body>
<pre>
<?php
//Brandon Frison
	extract($_REQUEST);
	$bigarr = array(
		array("Aquarius","Air","Fixed","Blue, Blue-green, Grey, Black","/Assignment2Images/aquarius.jpg"
		),
		array("Aries","Fire","Cardinal","Red","/Assignment2Images/aries.jpg"
		),
		array("Cancer","Water","Cardinal","Orange, White","/Assignment2Images/cancer.jpg"
		),
		array("Capricorn","Earth","Cardinal","Brown, Grey, Black","/Assignment2Images/capricorn.jpg"
		),
		array("Gemini","Air","Mutable","Green, Yellow","/Assignment2Images/gemini.jpg"
		),
		array("Leo","Fire","Fixed","Gold, Orange, White, Red","/Assignment2Images/leo.jpg"
		),
		array("Libra","Air","Cardinal","Blue, Green","/Assignment2Images/libra.jpg"
		),
		array("Pisces","Water","Mutable","Mauve, Lilac, Purple, Violet, Sea green","/Assignment2Images/pisces.jpg"
		),
		array("Sagittarius","Fire","Mutable","Violet, Purple, Red, Pink","/Assignment2Images/sagittarius.jpg"
		),
		array("Scorpio","Water","Fixed","Scarlet, Red, Rust","/Assignment2Images/scorpio.jpg"
		),
		array("Taurus","Earth","Fixed","Blue, Pink, Green","/Assignment2Images/taurus.jpg"
		),
		array("Virgo","Earth","Mutable","White, Yellow, Beige, Forest Green","/Assignment2Images/virgo.jpg"
		)
	);
	
	if ($v_month == "january"){
		if ($v_date >= "20"){
			$i = 0;
		}
		elseif ($v_date <= "19"){
			$i = 3;
		}
	}
	elseif ($v_month == "february"){
		if ($v_date >= "19"){
			$i = 7;
		}
		elseif ($v_date <= "18"){
			$i = 0;
		}
	}
		elseif ($v_month == "march"){
		if ($v_date >= "21"){
			$i = 1;
		}
		elseif ($v_date <= "20"){
			$i = 7;
		}
	}
		elseif ($v_month == "april"){
		if ($v_date >= "20"){
			$i = 10;
		}
		elseif ($v_date <= "19"){
			$i = 1;
		}
	}
		elseif ($v_month == "may"){
		if ($v_date >= "21"){
			$i = 4;
		}
		elseif ($v_date <= "20"){
			$i = 10;
		}
	}
		elseif ($v_month == "june"){
		if ($v_date >= "21"){
			$i = 2;
		}
		elseif ($v_date <= "20"){
			$i = 4;
		}
	}
		elseif ($v_month == "july"){
		if ($v_date >= "23"){
			$i = 5;
		}
		elseif ($v_date <= "22"){
			$i = 2;
		}
	}
		elseif ($v_month == "august"){
		if ($v_date >= "23"){
			$i = 11;
		}
		elseif ($v_date <= "22"){
			$i = 5;
		}
	}
		elseif ($v_month == "september"){
		if ($v_date >= "23"){
			$i = 6;
		}
		elseif ($v_date <= "22"){
			$i = 11;
		}
	}
		elseif ($v_month == "october"){
		if ($v_date >= "23"){
			$i = 9;
		}
		elseif ($v_date <= "22"){
			$i = 6;
		}
	}
		elseif ($v_month == "november"){
		if ($v_date >= "22"){
			$i = 8;
		}
		elseif ($v_date <= "21"){
			$i = 9;
		}
	}
		elseif ($v_month == "december"){
		if ($v_date >= "22"){
			$i = 3;
		}
		elseif ($v_date <= "21"){
			$i = 8;
		}
	}
	else {
		echo "you have entered a non valid Date or Month of birth";
	}
	
	echo 'you were born under the sign of '.$bigarr[$i][0].'<br><img src="'.$bigarr[$i][4].'"> <br>More information about your astrology sign here<br>Element: '.$bigarr[$i][1].'<br>Quality: '.$bigarr[$i][2].'<br>Color: '.$bigarr[$i][3];
?>
</pre>
</body>
</html>