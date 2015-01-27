<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location:login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<link rel="stylesheet" type="text/css" href="css/realadmin.css" />



<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADDING NEW FOOD ITEMS
</title>





<script type="text/javascript" src="JQuery/jquery.js"></script>
<script type="text/javascript" src="JQuery/jquery.validate.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('form').submit(function() {
			if($('input[name=food]').val().length <= 4) {
				$('.food').html('food length is too short');
				return false;
			} else if($('input[name=food]').val().length >20) {
				$('.food').html('food too long');
				return false;
			} else {
				$('.food').hide();
			}
			 if($('input[name=price]').val().length <= 1) {
				$('.price').html('Price length is too short');
				return false;
			} else if($('input[name=price]').val().length >20) {
				$('.price').html('Price too long');
				return false;
			} else {
				$('.price').hide()
			}
		});
	});
</script>

</head>



<body bgcolor="#FFFFFF"> <div id="header" align=""> <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<embed src="images/ss.svg" type="image/svg+xml" />

<br /><br />
<br /><br />




<br /><br />


</div>
 
<div id="container">
<div id="leftpane"> 
 


<br />
<br />
<br />

<br /></div>
<div align="center" id="rightpane"> 


<nav>
  <ul >
  <li ><a href="view.php" style="text-decoration:none">meal orders </a> 
  </li></ul>
  <ul>
  <li ><a href="view1.php" style="text-decoration:none">sub orders</a> 
</li></ul>
 <ul>
  <li> <a href="updateprice.php" style="text-decoration:none">update food prices</a>
</li></ul>
<ul>
  <li><a href="updatemeal.php" style="text-decoration:none">update meal menu</a> </li></ul>
  


 <ul><li>
<align="right"> <a href="logout.php"> exit</a>
 </li>
 </ul>

  
 
 </nav>
 
  <br />

<h6 align="left">


    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADD NEW FOOD TO MENU:<br /><br /><form action="addfood.php" method="post" name="loginFrm">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	MEAL TYPE: &nbsp;<select name='mealtype'> 
	<option value=""></option>			
			<option value="breakfast">breakfast meals</option>
			<option value="lunch">lunch meals</option>
			<option value="snacks">Desserts</option>
			<option value="evening">evening meals</option>
			<option value="drinks">drinks </option>	</select><br /><br /><br />
		
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FOOD NAME: &nbsp;<input type="text" name="food" />
			<br />
			&nbsp;&nbsp;&nbsp;&nbsp;<span class='error food'></span>
	<br /><br /><br />
		
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FOOD PRICE: &nbsp;<input type="text" name="price" />	
			<br />
			&nbsp;&nbsp;&nbsp;&nbsp;<span class='error price'></span>
				<br /><br /><br />
			
			
			

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset"  value="Reset!"  />   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name ="submit"  value="Add"  /> 
</form><br />

<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />


<?php 
if(empty($_POST['food']))
{
echo "";


}
 if(isset($_POST['submit']))
 {
$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("softmenu",$db);







foreach($_POST as $key=>$value)
{
	$$key=$value;
 $key."<br/>";
$meal=$_POST['mealtype'];	
$food=$_POST['food'];
$price=$_POST['price'];
$xxx=1;
}






$checking=mysql_query("SELECT food FROM $meal ");
			
while($row=mysql_fetch_array($checking))
{
if ($row['food']== $food)
{
echo "same food exist";
exit;
}

}





$result=mysql_query("INSERT  INTO $meal VALUES('','$xxx','$food','$price' ) ");

if($result){
	echo "you have added successfuly new food item";
	}






}




 

?>



</div></div>

<div id="footr" align="center">
 designed by welsofts. &nbsp;&nbsp;&nbsp;
 email:kip@welsofts.com</div>





</body>
</html>
