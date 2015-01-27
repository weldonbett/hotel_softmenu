<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>




<link rel="stylesheet" type="text/css" href="css/realadmin.css" />



?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>adding/remove admin a/cs
</title>
</head>

</head><body bgcolor="white">
 <div id="header" align="">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<embed src="images/ss.svg" type="image/svg+xml" />


<br /><br />




<br ><br />
</div>
 
<div id="container">
<div id="leftpane"> 
 
 <br /><br /><br /><br />
 
  <br /><br /><br /><br ><br />
  
  
  </div><div id="rightpane" align="center"> 



<nav>
  <ul >
  <li ><a href="reportview.php" style="text-decoration:none">view meal orders </a> 
 
 </li></ul><ul>
 
  
  <li> <a href="search.php" style="text-decoration:none">remove user</a> </li>
  
 
  </li>
 

 
 </ul>
 <ul >
  <li ><a href="logout.php" style="text-decoration:none">exit </a> 
 
 </li></ul><ul>
 </nav>




<br />
<p></p><font face="Georgia, Times New Roman, Times, serif" size="+1" color="#FFFFFF">Add new user </font><table border="0" cellpadding="10" cellspacing="10">
<form action="adminalt.php" method="post" ><tr><td> Employee code number:</td><td><input type="text" name="employee"></td></tr><tr><td>
Username:</td><td><input type="text" name="username"></td></tr><tr><td>
Password:</td><td><input type="password" name="password"></td></tr>

<tr><td>
 Confirm password:</td><td><input type="password" name="password1"></td></tr>


<tr><td></td><td><input type="reset" name="cancel" value="cancel">
<input type="submit" name="submit" value="activate"></td></tr></form></table>

<?php 
if(isset($_POST['submit']))
{

$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("softmenu",$db);

$employee=$_POST['employee'];
$username=$_POST['username'];
$password=$_POST['password'];
$password=$_POST['password1'];
$status=1;


if ($_POST['password'] != $_POST['password1']) {

echo "passwords not matching!";

echo "<a href='adminalt.php'> <font color='#FFFFFF'>Click to try again</font></a>";
exit;
}
else {


$insert = "INSERT INTO admin VALUES('', '$employee', '$username', '$password' ,'$status')";
$result=mysql_query($insert) or die(mysql_error());
if($result){
	echo "success";
	}
	
	}
	}
?>
</div></div>
<div id="footr" align="center">
 designed by welsofts. &nbsp;&nbsp;&nbsp;
 email:kip@welsofts.com</div>

</body>
</html>
