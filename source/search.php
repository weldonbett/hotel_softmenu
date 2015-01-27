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
<title>Untitled Document</title>


<script type="text/javascript" >

            function kip(someForm){
                var answer = confirm("Do you want to make this user? ")
                if(answer==true){
                    someForm.submit();
                }else{
                    return false;
                }	
            }

        </script><

</head>



<body bgcolor="#FFFFFF"> <div id="header" align=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<embed src="images/ss.svg" type="image/svg+xml" />
<br /><br />
<br /><br />




<br /><br />

</div>
 
<div id="container">
<div id="leftpane"> 

<br /><br />
 </div>

<div id="rightpane" align="center"> 




<nav>
  <ul >
  <li ><a href="reportview.php" style="text-decoration:none">view meal orders </a> 
 
 </li></ul><ul>
  <li><a href="adminalt.php" style="text-decoration:none">add new user</a>
  </li></ul><ul>
  <li> <a href="logout.php" style="text-decoration:none">exit</a> </li>
  
 
</ul><ul>
 

 
 </ul>
 </nav>
 
 
<br /><br />









<form action="search.php" method="post">

<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <label for="autocomplete">ENTER EMPLOYEE CODE NO::  </label><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input name="employeecodeno" type="text" id="autocomplete" />
	
	   <script>
$( "#autocomplete" ).autocomplete({




source:[<?php
// Fill up array with names

				
                $db = mysql_connect("localhost", "root", "");
                $sl = mysql_select_db("softmenu", $db);
               
           


$result=mysql_query("SELECT*FROM lunch");



 
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
			
			

&nbsp;&nbsp;&nbsp;&nbsp;<input name ="submit" type="submit"  value="search!" />			
			
			
			
			
    </form>





<?php 

 if(isset($_POST['submit']))
 {
$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("softmenu",$db);

foreach($_POST as $key=>$value)
{
	$$key=$value;
	 $key."<br/>";
	

}










$result=mysql_query("SELECT username,employeecodeno FROM admin WHERE employeecodeno= '$employeecodeno' ORDER BY username");




echo "<table border='0' align='center' cellspacing='10' cellpadding='10' bgcolor='#CCFF66'><tr><th>username</th><th>employeecodeno</th><th>deactivate</th></tr>";


while($row=mysql_fetch_array($result))

{
	echo "<form action='search.php' method='post' onsubmit='return kip(this)' >";
	echo "<input type='hidden' name='username' value='".$row['username']."'>";
	echo "<input type='hidden' name='employeecodeno' value='".$row['employeecodeno']."'>";
	
	echo "<tr><td><input type='text' value='".$row['username']."'></td><td>".$row['employeecodeno']."</td>";
	
			echo "<td>
			<input type='submit' name='submit' value='Deactivate'></td>";
	
	echo "</tr></form>";
	
}
echo "</table>";


 

}







 if(isset($_POST['submit']))
 {
$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("softmenu",$db);

foreach($_POST as $key=>$value)
{
	$$key=$value;
	 $key."<br/>";

}

$employeecodeno=$_POST['employeecodeno'];



$insert = "DELETE FROM admin WHERE employeecodeno='$employeecodeno' ";
$result=mysql_query($insert) or die(mysql_error());
if($result){
	echo "";
	}

}


?>



</div></div>

<div id="footr" align="center">
 designed by welsofts. &nbsp;&nbsp;&nbsp;
 email:kip@welsofts.com</div>





</body>
</html>
