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
<div id="header">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<embed src="images/ss.svg" type="image/svg+xml" />

<br /><br />




<br ><br />
</div>

<div id="container"><div id="leftpane">

  <br /><br /><br /><br />
 
 
</div><div id="rightpane" align="center">
<table> <tr> <td>
<nav>
 
 <ul >
  
  <li >
 
 
  <a href="view1.php" style="text-decoration:none">sub orders </a> 
  
 </li></ul>
 
  <ul>
  <li> <a href="updateprice.php" style="text-decoration:none">update food prices</a> </li></ul>

  <ul><li><a href="updatemeal.php" style="text-decoration:none">update food menu</a> </li></ul>


  <ul><li><a href="addfood.php" style="text-decoration:none">add new meal</a> </li></ul>
  

  <ul >
 
  
  <li ><align="right"> <a href="logout.php"> exit</a>
 </li>
  
   
 </ul>
 
 
 </nav>
 </td></td></tr>
 </table>
 
 
<?php
$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("softmenu",$db);

$result=mysql_query("SELECT*FROM order1 WHERE serve='0'");



$count=mysql_num_rows($result);



?>
 
 
 
 
 
 <table><tr>        <td></td><td></td> <td></td>  <td></td><td></td> <td></td>    <td></td><td></td> <td></td> <td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td> <td></td><td>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</td> <td>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; </td> <td>   
 
 
 <form action="report/softmenureport.php" method="post">


<select name='cust'>
			<?php
			$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("softmenu",$db);

		  $sql = "SELECT DISTINCT cust FROM order1 WHERE serve='0'";
		  $results = mysql_query($sql) or die(mysql_error());
		  while($rows=mysql_fetch_array($results))
		  {
		  echo "<option>".$rows['cust']."</option>";
		  }
		  ?>
			
	
	
	
	
	
	
	
	</select>
	<input type="submit"  value="print food order"  name="printt"/>
	</form>   </td></tr></table>
 <br />
 
 
 <?
echo "<table border='0' align='center' cellspacing='1' cellpadding='1'><tr><th bgcolor='#FFFFFF'>TABLE NO  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;</th><th bgcolor='#FFFFFF'>QUANTITY &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;</th><th bgcolor='#FFFFFF'>PRICE(ksh) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;</th><th bgcolor='#FFFFFF'>MEALS &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;   &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;</th></tr>";

		
while($row=mysql_fetch_array($result))
{

echo "<form action='view.php' method='post'>";
	echo "<input type='hidden' name='food' value='".$row['food']."'>";
	echo "<input type='hidden' name='id' value='".$row['id']."'>";
	echo "<tr bgcolor='#CCCCCC'><td>".$row['tableno']."</td>";
	echo "<td>".$row['quantity']."</td>";
	echo "<td>".$row['price']."</td>";
	echo "<td>".$row['food']."</td></tr> </form>";
	
	
	//echo "</tr><tr><td>...............................</td><td>..................</td><td>........................</td><td>..........................</td><td>.</td>	
	

	
	
}
	echo "</table>";


 
mysql_close();





?>






		
	
	
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
