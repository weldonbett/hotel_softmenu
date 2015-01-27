<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
}
if(!isset($_SESSION['status'])){
	header("location:login.php");
}
if($_SESSION['status']!=0){
    header("location:login.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">



<link rel="stylesheet" type="text/css" href="css/realadmin.css" />










<head>





<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>eZee resturant</title>
</head>

 </head><body bgcolor="white">
 
 
 
<div id="header" align="">


 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<embed src="images/ss.svg" type="image/svg+xml" />
<br /><br />




<br ><br />
</div>
 
<div id="container">
<div id="leftpane"> 
 
<a href="logout.php"> log out</a>
 <br /><br /><br /><br />
 
  <br /><br /><br /><br ><br />
  
  
  </div><div id="rightpane" align="center">
  
  
  <nav>
  <ul >
  <li ><a href="reportview.php" style="text-decoration:none">meal orders</a> 
 
  <br >
 
  <li><a href="adminalt.php" style="text-decoration:none">add new user</a>
 
  <li> <a href="search.php" style="text-decoration:none">remove user</a> </li>
  
 
  </li>
 

 
 </ul>
 </nav>


  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
<br /><br /><br />



</div></div>
<div id="footr" align="center">
 designed by welsofts. &nbsp;&nbsp;&nbsp;
 email:kip@welsofts.com</div>

</body>

</html>

