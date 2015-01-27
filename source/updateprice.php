





<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location:login.php");
}
?>










<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<link rel="stylesheet" type="text/css" href="css/realadmin.css" />






<script type="text/javascript" >

            function kip(someForm){
                var answer = confirm("Do you want to make this  price update? ")
                if(answer==true){
                    someForm.submit();
                }else{
                    return false;
                }	
            }

        </script><head>
		
		 <link rel="stylesheet" href="que/jquery-ui.css">
  <script src="que/jquery-1.9.1.js"></script>
  <script src="que/jquery-ui.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Update food details
</title>




</head>



<body bgcolor="#FFFFFF"> <div id="header" align="">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<embed src="images/ss.svg" type="image/svg+xml" />

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
<div id="rightpane" align="center"> 

<nav>
  <ul >
  <li ><a href="view.php" style="text-decoration:none">meal orders</a></li></ul>
  <ul> 
  <li ><a href="view1.php" style="text-decoration:none">sub orders</a> 
  </li></ul>
  
  <ul>
  <li> <a href="updateprice.php" style="text-decoration:none">update food prices</a> 
  </li></ul>
  <ul>

  <li><a href="updatemeal.php" style="text-decoration:none">update food meals</a> </li></ul>
  <ul>


 <li><a href="addfood.php" style="text-decoration:none">add new meals</a> </li>
  
  </ul>
  <ul>


 <li><align="right"> <a href="logout.php"> exit</a>
 </li>
  
  </ul>
  
  
 </nav>

<br />

<h5 align="left">


    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UPDATE FOOD PRICES :<br /><br /><form action="updateprice.php" method="post">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	MEAL TYPE: &nbsp;<select name='mealtype' > 
	<option>
	
	
	 <?php
	   $db = mysql_connect("localhost", "root", "");
                $sl = mysql_select_db("softmenu", $db);
               
           
		  $sql = "SELECT * FROM k";
		  $results = mysql_query($sql) or die(mysql_error());
		  while($rows=mysql_fetch_array($results))
		  {?>
		  <option value="<? echo $rows['type'] ;?>"  > <? echo $rows['type'];?> </option>
		<?
		  }
		  ?>
	
	
	
	</select><br /><br /><br />
			

		
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <label for="autocomplete">FOOD NAME: </label> &nbsp;<input type="text" name="food"  id="autocomplete"/>   <script>
$( "#autocomplete" ).autocomplete({




source:[<?php
// Fill up array with names

				
                $db = mysql_connect("localhost", "root", "");
                $sl = mysql_select_db("softmenu", $db);
               
           


$result=mysql_query("SELECT*FROM drinks");



 
while($row=mysql_fetch_array($result))

{


?>

"<?
echo $row['food'];
?>",
<?


}

 
mysql_close();


?>]



});
</script><br /><br /><br />
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name ="submit" type="submit"  value="search!"  /> 
</form>
<br />



<br />
<br />
<br />
<br />
<br />

<?php 

 if(isset($_POST['submit']))
 {
$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("softmenu",$db);







foreach($_POST as $key=>$value)
{
	$$key=$value;
 $key."<br/>";
	
$meal=$_POST['mealtype'];
}



$result=mysql_query("SELECT food,price FROM $meal WHERE food= '$food' ORDER BY food");



echo "<table border='0' align='center' cellspacing='1' cellpadding='1' bgcolor='#CCCCCC'><tr><th  bgcolor='#efefef' >Food name</th><th bgcolor='#efefef' >Current price</th><th bgcolor='#efefef' >New price</th></tr>";

while($row=mysql_fetch_array($result))

{

 echo "<form action='updateprice.php' method='post'  onsubmit='return kip(this)'>";
echo "<input type='hidden' name='mealtype' value='$meal'>";
	echo "<input type='hidden' name='food' value='".$row['food']."'>";
	echo "<input type='hidden' name='price' value='".$row['price']."'>";
			echo "<tr><td>".$row['food']."</td><td>".$row['price']."</td>";
	
			echo "<td><input type='text' name='price' value=''></td></tr><tr>";
	echo "<td></td><td></td><td><input type='submit' name='submit1' value='UPDATE'</td>";
	echo "</tr></form>";
	
}
echo "</table>";


}
 

 if(isset($_POST['submit1'] ))
 {
$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("softmenu",$db);

foreach($_POST as $key=>$value)
{
	$$key=$value;
	 $key."<br/>";

}

$price=$_POST['price'];

$meall=$_POST['mealtype'];

$insert = "UPDATE  $meall SET price = '$price'
WHERE food = '$food'";
$result=mysql_query($insert) or die(mysql_error());
if($result){
	echo "";
	}

}


?>
</h5>


<br />
<br />
<br />
<br />
<br />
<br />
<br /><br />

</div></div>

<div id="footr" align="center">
 designed by welsofts. &nbsp;&nbsp;&nbsp;
 email:kip@welsofts.com</div>





</body>
</html>
