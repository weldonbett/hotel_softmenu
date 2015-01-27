


<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location:login.php");
}
?>

















<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>update evening meals</title>
<link rel="stylesheet" type="text/css" href="css/update.css" />









 <script type="text/javascript" >

            function kip(someForm){
                var answer = confirm("Do you want to make this update? ")
                if(answer==true){
                    someForm.submit();
                }else{
                    return false;
                }	
            }

        </script>
</head>





<div id="header" align=""> <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<embed src="images/new.svg" type="image/svg+xml" />


<br /><br />




<br ><br />
</div>

<div id="container">
<div id="leftpane"> 
 
<a href="logout.php"> log out!</a>
 <br /><br /><br /><br />
 
  <br /><br /><br /><br ><br />
  
  
  </div><div id="rightpane" align="center">
  
<nav>
  <ul >
  <li ><a href="view.php" style="text-decoration:none">VIEW ORDERS </a> 
  <br >
 
  <li><a href="update.php" style="text-decoration:none">UPDATE FOOD MENUS</a>
  <ul>
  <li> <a href="updatelunch.php" style="text-decoration:none">UPDATE LUNCH MENU</a> </li>

  <li><a href="updatedrinks.php" style="text-decoration:none">UPDATE DRINKS MENU</a> </li>


  <li><a href="updatevening.php" style="text-decoration:none">UPDATE EVENING MENU</a> </li>
  
  </ul>
  </li>
  
<li><a href="print.php" style="text-decoration:none"> PRINT ORDERS </a></li>
 
<li><a href="printed.php" style="text-decoration:none">CLEAR PRINTED </a></li>
 

  <li><a href="addfood.php" style="text-decoration:none"> MODIFY RECORDS </a></li>
 <li> <a href="adminalt.php" style="text-decoration:none">ADD ADMIN A/CS</a></li>
 </ul>
 </nav>
<br /><br /><br />
<?php 
$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("softmenu",$db);
$result=mysql_query("SELECT * FROM evening");



echo "<table border='0' align='center' cellspacing='1' cellpadding='1'><tr><th bgcolor='#FFFFFF'>LIST</th><th bgcolor='#FFFFFF'>FOOD</th><th bgcolor='#FFFFFF'>AVAILBALE</th><th bgcolor='#FFFFFF'>NOT AVAILABLE</th></tr>";

while($row=mysql_fetch_array($result))

{
	echo "<form action='updatevening.php' method='post' onsubmit='return kip(this)'>";
	echo "<input type='hidden' name='food' value='".$row['food']."'>";
	
		echo "<input type='hidden' name='id' value='".$row['id']."'>";

	echo "<tr><td>".$row['id']."</td><td>".$row['food'].".........</td>";
	
	echo "<td><input type='submit' name='submit' value='available'></td>";
	echo "<td><input type='submit' name='submit1' value='not available'></td>";	
	
echo "</tr><tr> <td>...............................</td><td>................................................</td><td>........................</td><td>..........................</td><td>..</td></tr></form>";
	
}
echo "</table>";


 
mysql_close();


?>
</align>
</div></div>
<div id="footr" align="center">
 designed by welsofts. &nbsp;&nbsp;&nbsp;
 email:kip@welsofts.com</div>

</body>
<?php

 if(isset($_POST['submit']))
 {
$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("softmenu",$db);

foreach($_POST as $key=>$value)
{
	$$key=$value;
	echo $key."<br/>";

}






$updatee = "UPDATE evening
SET xxxxxx = '1'
WHERE id = '$id'";
$result=mysql_query($updatee) or die(mysql_error());
if($result){
	echo $food."&nbsp;&nbsp;has being added to menu!";

	}

}
?>



<?php

 if(isset($_POST['submit1']))
 {
$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("softmenu",$db);

foreach($_POST as $key=>$value)
{
	$$key=$value;
	echo $key."<br/>";

}






$update = "UPDATE evening
SET xxxxxx = '0'
WHERE id = '$id'";
$result1=mysql_query($update) or die(mysql_error());
if($result1){
	echo $food."&nbsp;&nbsp;has being removed!";
	}

}
?>

</html>
