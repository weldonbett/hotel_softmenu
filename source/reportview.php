<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location:login.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/update.css" />

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>VIEWS ORDERS</title>

















</head><body>
<div id="header"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<embed src="images/ss.svg" type="image/svg+xml" />


<br /><br />




<br ><br />
</div>

<div id="container"><div id="leftpane">

  <br /><br /><br /><br />
 
 
</div><div id="rightpane" align="center">
<table> <tr> <td>
  
  <nav>
  <ul>
 
  <li><a href="adminalt.php" style="text-decoration:none">add new user</a>
 </li></ul><ul>

  <li> <a href="search.php" style="text-decoration:none">remove user</a> </li>
  </ul><ul>

   <li><a href="logout.php" style="text-decoration:none">exit</a>
 </li></ul><ul>
  </li>
 

 
 </ul>
 </nav>


 </td>
 </tr></table>
 <table align="right"><tr>
<td>
 
 
 <form action="report/softmenureport3.php" method="post">


 Date:</td><td><input value="yyyy-mm-dd" type="date" name="date">
 </td>
	</tr><tr></tr><tr> <td></td><td><input type="submit"  value="REPORTS"  name="print"/>
	</form>   </td>
 </tr></table>
	
 <br />
 
 <script type="text/javascript">
<!--
var currentTime = new Date()
var month = currentTime.getMonth() + 1
var day = currentTime.getDate()
var year = currentTime.getFullYear()

  document.write(day + "-" + month + "-" + year)";
  
  
//-->
</script>
 <?php
 

$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("softmenu",$db);

$dat=date('y-m-d');
$result=mysql_query("SELECT DISTINCT food,price,quantity FROM order1 WHERE date='$dat'  ORDER BY tableno");
echo "<table border='0' align='center' cellspacing='1' cellpadding='1'><tr><th bgcolor='#FFFFFF'>LIST</th><th bgcolor='#FFFFFF'>QUANTITY</th><th bgcolor='#FFFFFF'>PRICE</th><th bgcolor='#FFFFFF'>FOOD</th></tr>";


while($row=mysql_fetch_array($result))
{
echo "<form action='view.php' method='post'>";
	echo "<input type='hidden' name='food' value='".$row['food']."'>";
	echo "<input type='hidden' name='id' value='".$row['id']."'>";
	echo "<tr><td>#</td>";
	echo "<td>".$row['quantity']."</td>";
	echo "<td>".$row['price']."</td>";
	echo "<td>".$row['food']."</td>";
	
	
	echo "</tr><tr><td>...............................</td><td>..................</td><td>........................</td><td>..........................</td><td>.</td></tr></form>";
	
	
	
	
}
echo "</table>";


 
mysql_close();


?>

<br />



		
	
	
</div></div>
<div id="footr" align="center">

 designed by welsofts. &nbsp;&nbsp;&nbsp;
 email:kip@welsofts.com </div>

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


 



$del ="UPDATE order1
SET serve = '1'
WHERE id = '$id'";
$result=mysql_query($del) or die(mysql_error());
if($result){
	echo "success";
	}

}
?>
</html>
