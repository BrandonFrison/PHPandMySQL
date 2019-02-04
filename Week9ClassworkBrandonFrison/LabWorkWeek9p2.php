<pre>
<?php
//Brandon Frison
$fname = "c:/wamp/www/datebook";
$fpointer = fopen($fname,"r");
$fcontents = file_get_contents($fname);
//2a
$search = "Street";
if ($fpointer)
{
    while (!feof($fpointer))
    {
        $buffer = fgets($fpointer);
        if(strpos($buffer, $search) !== FALSE)
            $matches[] = $buffer;
    }
    fclose($fpointer);
}
print_r($matches);

//2b
$pattern = "/(?<!\w)B\w+/";
	if(preg_match_all($pattern,$fcontents, $matches2)){
		print_r($matches2);
	}
	
//2c
$pattern = "/(?<!\w)Ker\w+/";
	if(preg_match_all($pattern,$fcontents, $matches3)){
		print_r($matches3);
	}

//2d
$pattern = "/(?<!\d)408-.*-\d+/";
	if(preg_match_all($pattern,$fcontents, $matches4)){
		print_r($matches4);
	}

//2e
$pattern = "/Lori Gortz/";
	if(preg_match_all($pattern,$fcontents, $matches4)){
		print_r($matches4);
	}
	$pattern = "/Mirlo Street, Peabody, MA 34756/";
	if(preg_match_all($pattern,$fcontents, $matches4)){
		print_r($matches4);
	}
	
//2f
$pattern = "/Ephram/";
	if(preg_match_all($pattern,$fcontents, $matches4)){
		
		
	}
	
//2g
$pattern = "/^((?!4).)*$/";
	if(preg_match_all($pattern,$fcontents, $matches5)){
		print_r($matches5);
	}
	
//2h
$pattern = "/William/";
	if(preg_match_all($pattern,$fcontents, $matches6)){
		$test1 = serialize($matches6);
	}
$ns = preg_replace("/William/","Siegfried",$test1);
echo $ns;

//2i

$pattern = "/5.19.66.34200/";
	if(preg_match_all($pattern,$fcontents, $matches7)){
		print_r($matches7);
	}
	
//2j
$pattern = "/[0-9]{5}/";
	if(preg_match_all($pattern,$fcontents, $matches8)){
		print_r($matches8);
	}
	
//2k



//3a

$pattern = "/Pine Street, Dearborn, MI/";
	if(preg_match_all($pattern,$fcontents, $matches9)){
		print_r($matches9);
	}
	
//3d
echo "Betty Boop:245-836-8357:635 Cutesy Lane, Hollywood, CA 91464:6/23/23:14500
Igor Chevsky:385-375-8395:3567 Populus Place, Caldwell, NJ 23875:6/18/68:23400
Norma Corder:397-857-2735:74 Pine Street, Dearborn, MI 23874:3/28/45:245700
Jennifer Cowan:548-834-2348:583 Laurel Ave., Kingsville, TX 83745:10/1/35:58900
Jon DeLoach:408-253-3122:123 Park St., San Jose, CA 04086:7/25/53:85100";

//3k

$pattern = "/^((?!hede).)*$/";
if(preg_match_all($pattern,$fcontents, $matches10)){
		print_r($matches10);
	}














?>
</pre>