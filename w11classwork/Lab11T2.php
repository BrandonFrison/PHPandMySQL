<pre>
<?php
//Brandon Frison

if(isset($_REQUEST['submit']))
				{
					calculationofform();
				}
				else
				{
					showtheform();
				}
	
	function calculationofform()
	{
		$lnk = mysqli_connect('localhost','root','');
		if($lnk)
		{
		$db = mysqli_select_db($lnk,'school');
		if($db)
			{
			$b_firstname = $_POST['fname'];
			$b_lastname = $_POST['lname'];
			$b_email = $_POST['email'];
			$b_cell = $_POST['cell'];
			$b_maj = $_POST['maj'];
			$b_gpa = $_POST['gpa'];
			$b_sdate = $_POST['sdate'];
			$b_sid = $_POST['sid'];
		
		if (isset($b_firstname, $b_lastname, $b_cell, $b_email, $b_gpa, $b_maj, $b_sid, $b_sdate))
		{
			$truth = preg_match("/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/",$b_email,$match);
			if ($truth == 1)
			{
				$query = "INSERT INTO student(FirstName,LastName,Email,CellPhone,Major,GPA,StartDate,StudentId) values('$b_firstname','$b_lastname','$b_email','$b_cell','$b_maj',$b_gpa,'$b_sdate',$b_sid)";
				$test= mysqli_query($lnk,$query);
			}
			else
			{
				echo "<br/>***EMAIL NOT VALIDATED***<br/>";
			}
		}
		else
		{
			echo "<br>missing fields, cannot insert into table<br>";	
		}
			}
		}
		
	}


$lnk = mysqli_connect('localhost','root','');
	if($lnk)
	{
		$db = mysqli_select_db($lnk,'school');
		if($db)
		{
			echo "<br>*****CONNECTED TO THE DATABASE*****<br>";
			echo "<br>";
				
			
			$query = "select FirstName, LastName, Major from student";
			$test= mysqli_query($lnk,$query);
			
			if($test)
			{
				for($i=0;$i<mysqli_num_rows($test);$i++)
				{
					$r = mysqli_fetch_assoc($test);
					foreach($r as $val)
					{
						echo $val."  ";					
					}
				}
			}
			else
			{
				$error = mysqli_error($lnk);
				echo $error;
			}
			echo "<br>";
			echo "<br>";
			$query = "SELECT * FROM student WHERE gpa > 3.0";
			$test= mysqli_query($lnk,$query);
			
			if($test)
			{
				echo "number of rows where gpa > 3 is -->   ";
				echo mysqli_num_rows($test);
				echo "<br>";
			}
			else
			{
				$error = mysqli_error($lnk);
				echo $error;
			}
		

			
			
			echo "<br>";
			
			#testing 
			echo "***TABLE DATA BELOW HERE***(SORTED BY LAST NAME)<br><br>";
			
			
			$query = "SELECT * FROM student ORDER BY LastName ASC";
			$test= mysqli_query($lnk,$query);

			if ($test->num_rows > 0) 
				{
	
    			while($row = $test->fetch_assoc())
    				{
      					echo $row["FirstName"]."   ".$row["LastName"]."   ".$row["Email"]."   ".$row["CellPhone"]."   ".$row["Major"]."   ".$row["GPA"]."   ".$row["StartDate"]."   ".$row["StudentId"]."<br><br>";
    				}
				}			
			else
			{
				$error = mysqli_error($lnk);
				echo $error;
			}
			
	}
	else
	{
		echo "<br>SOMETHING IS WRONG<br>";
	}
	
	}
	
	function showtheform()
	{
	print<<<doc
	<form method="post" action="$_SERVER[PHP_SELF]" >
		FIRST NAME
		<input type="text" name="fname"  /><br/>
		LAST NAME
		<input type="text" name="lname"  /><br/>
		EMAIL:
		<input type="text" name="email"  /><br/>
		CELLPHONE:
		<input type="text" name="cell"  /><br/>
		MAJOR:
		<input type="text" name="maj"  /><br/>
		GPA:
		<input type="text" name="gpa"  /><br/>
		START DATE:
		<input type="text" name="sdate"  /><br/>
		STUDENT ID:
		<input type="text" name="sid"  /><br/>
		<input type="submit" name="submit" value="Add new record to table" />
	</form>
doc;
}
mysqli_close($lnk);
?>
</pre>