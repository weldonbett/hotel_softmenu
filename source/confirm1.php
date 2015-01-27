







<html><head></head><body>

<?php
$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("softmenu",$db);
$result=mysql_query("SELECT * FROM owner");

$ussername = mysql_real_escape_string($_POST['ussername']);
$password = $_POST['password'];
 
$result = mysql_query("SELECT * FROM owner WHERE ussername = '$ussername' AND password = '$password'");

if(mysql_num_rows($result))
{
  if($row= mysql_fetch_array($result))
  {
 	
  	 $username= $row['ussername'];
	 $password= $row['password'];

  	// Login
  	
	//Check if admin or student
	
	
  		header('Location: owner.php');
		exit;
  	}

	
	
	
  
  }
  
  

else
{
  // Invalid username/password
 echo "<p><strong>Error:</strong> Invalid username or password.</p>";
 
 header('Location: login1.php');
exit;
}
?>
