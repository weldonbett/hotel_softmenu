<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
}
if(!isset($_SESSION['status'])){
	header("location:login.php");
}
if($_SESSION['status']!=1){
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




</div>
 
<div id="container">
<div id="leftpane"> 
 

<br /><br />
<br /><br />
<br /><br />
  
  </div><div id="rightpane" align="center">
  
  
  <nav>
  <ul >
  <li ><a href="view.php" style="text-decoration:none">meal orders &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;</a> 
  </li></ul><br />
  <ul><li ><a href="view1.php" style="text-decoration:none">sub orders &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;</a> 
  </li></ul>
<br />

  <ul>
  <li> <a href="updateprice.php" style="text-decoration:none">update food price &nbsp; &nbsp;</a> </li></ul><br />
  <ul>

  <li><a href="updatemeal.php" style="text-decoration:none">update food menu &nbsp; &nbsp;</a> </li></ul>
  <br />
  <ul>


  <li><a href="addfood.php" style="text-decoration:none">add new meals &nbsp; &nbsp; &nbsp; &nbsp; </a> </li></ul><br />
<ul>


  <li><align="right"> <a href="logout.php"> exit </a> </li></ul>

 </nav>



<br /><br />
<br /><br />
<br /><br />
<br /><br />
<br /><br />
<br /><br />

<br />

</div> </div>
<div id="footr" align="center">
 designed by welsofts. &nbsp;&nbsp;&nbsp;
 email:kip@welsofts.com</div>

</body>

</html>

