<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location:login.php");
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>VIEWS SUB ORDERS</title>
<link rel="stylesheet" type="text/css" href="css/admin.css" />
</head><body>
<div id="header"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<embed src="images/ss.svg" type="image/svg+xml" />

<br /><br />




<br ><br />
</div>

<div id="container"><div id="leftpane"
  <br /><br /><br /><br />
  <br /><br /><br /><br />
 
   
</div><div id="rightpane" align="center">
 
 <table><tr><td>
 <nav>
  <ul >
  <li ><a href="view.php" style="text-decoration:none">meal orders </a> 
  </li></ul>
  <ul>
   
     <li> <a href="updateprice.php" style="text-decoration:none">update food prices </a> 

   </li></ul>
   <ul><li><a href="updatemeal.php" style="text-decoration:none">update food menu </a>  </li></ul>
   <ul>


  <li><a href="addfood.php" style="text-decoration:none">add new meals</a> </li>
  
  </ul>
  </li>
 
 <ul >
 
  
  <li ><align="right"> <a href="logout.php"> exit</a>
 </li>
  
   
 </ul>
 
 
 </nav>
 </td></tr>   </table>
 
  
 <br />
 
  
  
  
  
<?php
$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("softmenu",$db);

$result=mysql_query("SELECT*FROM orderS WHERE serve='0' ORDER BY chairno");




 
 
 
 

$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

//if($count==1)
//{



?>








 <table>
 <tr>
 
 
 
 <td></td><td></td> <td></td>  <td></td><td></td> <td></td>    <td></td><td></td> <td></td> <td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td> <td></td><td>
 
 <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td>
 <td>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</td> <td> </td> <td>   
 
 
 <form action="report/softmenureport1.php" method="post">


<select name='chairno'   >
			<?php
			$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("softmenu",$db);

		  $sql = "SELECT DISTINCT chairno FROM orders WHERE serve='0'";
		  $results = mysql_query($sql) or die(mysql_error());
		  while($rows=mysql_fetch_array($results))
		  {
		  echo "<option>".$rows['chairno']."</option>";
		  }
		  ?>
			
	
	
	
	
	
	
	
	</select>
	<input type="submit"  value="print order"  name="print"/>
	</form>   </td></tr></table>


<?


echo "<table border='0' align='center' cellspacing='1' cellpadding='1'><tr><th bgcolor='#FFFFFF'>CHAIR NO.   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;   &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;</th><th bgcolor='#FFFFFF'>SUBSIDIERIES &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;   &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;
&nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;   &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;</th>";


while($row=mysql_fetch_array($result))
{
echo "<form action='view1.php' method='post'>";
	echo "<input type='hidden' name='name' value='".$row['name']."'>";
	echo "<input type='hidden' name='id' value='".$row['id']."'>";
	echo "<tr bgcolor='#CCCCCC'>
<td>".$row['chairno']."</td>";
	
	
	echo "<td>".$row['name']."</td></tr>";
	
	//<tr> <td>...............................</td><td>...................................</td><td></td></tr>";
	
	
	
	
	
	
}
echo "</table>";


 
mysql_close();






//}





/*else { 


?>





<script language="javascript" type="text/javascript">
alert ('no sub orders now')
window.location = "admin.php"
</script>


<?php


}

*/
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


 



$del ="UPDATE orders
SET serve = '1'
WHERE id = '$id'";
$result=mysql_query($del) or die(mysql_error());
if($result){
	echo "success";
	}

}
?>
</html>
