<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>


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

$price=$price*$quantity;



$insert = "INSERT INTO order1 VALUES('', '$food', '$quantity', '$price', $tableno)";
$result=mysql_query($insert) or die(mysql_error());
if($result){
	echo "success";
	}

}
?>
<body><form input>
</body>
</html>
