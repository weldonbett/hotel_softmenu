<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body><form 


<?php
$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("softmenu",$db);






$result=mysql_query("SELECT*FROM order1 WHERE serve='0' ORDER BY tableno");
echo "<table border='0' align='center' cellspacing='1' cellpadding='1'><tr><th >Table no?</th><th>Quantity</th><th>Price</th><th>Food</th></tr>";

while($row=mysql_fetch_array($result))
{
echo "<form action='view.php' method='post'>";
	echo "<input type='hidden' name='food' value='".$row['food']."'>";
	echo "<input type='hidden' name='id' value='".$row['id']."'>";
	
	echo "<tr><td>".$row['tableno']."</td>";
	
	echo "<td>".$row['quantity']."</td>";
	echo "<td>".$row['price']."</td>";
	echo "<td>".$row['food']."</td>";
	
	echo "<td><input type='submit' name='submit' value='forward to print'></td>";
	
	echo "</tr><tr><td>...............................</td><td>..................</td><td>........................</td><td>..........................</td><td>.........................</td><td>.....</td></tr></form>";
	
	
	
	
}
echo "</table>";


 
mysql_close();


?>
</form>


</body>
</html>
