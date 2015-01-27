<?php
session_start();

if (isset($_POST['submit'])) 
{ 			

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="softmenu"; // Database name
$tbl_name="admin"; // Table name

// Connect to server and select databse.
mysql_connect($host, $username, $password)or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$username=$_POST['username'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1)
{
// Register $myusername, $mypassword and redirect to file "login_success.php"
    $row=  mysql_fetch_array($result);
    $_SESSION['username'] = $username;
    $_SESSION['status']=$row['status'];
    if($row['status']==0){
        header("location:owner.php");
    }
    if($row['status']==1){
        header("location:admin.php");
    }

}
else {?>





<script language="javascript" type="text/javascript">
alert ('wrong password or username.Try again')
</script>


<?php

}
ob_end_flush();















								
}
?>
<html>


<head>
<link rel="stylesheet" type="text/css" href="css/realadmin.css" />

<script type="text/javascript" src="JQuery/jquery.js"></script>
<script type="text/javascript" src="JQuery/jquery.validate.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('form').submit(function() {
			if($('input[name=username]').val().length <= 6) {
				$('.username').html('Username length is too short');
				return false;
			} else if($('input[name=username]').val().length >20) {
				$('.username').html('Username too long');
				return false;
			} else {
				$('.username').hide();
			}
			 if($('input[name=password]').val().length <= 6) {
				$('.password').html('Password length is too short');
				return false;
			} else if($('input[name=password]').val().length >20) {
				$('.password').html('Password too long');
				return false;
			} else {
				$('.password').hide()
			}
		});
	});
</script>
</head>
<body bgcolor="#FFFFFF">


<div id="header" align="left">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<embed src="images/ss.svg" type="image/svg+xml" /></div>
<div id="container">
<div id="leftpane">

<br> <br> <br> <br> <br> <br> <br> <br> <br>  </div>

<div id="rightpane" align="center">



<table width="300" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#BBBBBB">
<tr>
<form name="loginFrm" method="post" action="login.php" id="form1">
<td>
<table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#BBBBBB">
<tr>
<p colspan="3"><strong><h4>
<img src="css/login.jpg" alt='Secure Login' height="90"  align="top" /> </h4> </strong></td>
</tr>
<tr>
<p><label width="78">Username:&nbsp;&nbsp;</label>
<input name="username" type="text" id="username" maxlength="20">
<span class='error username'></span>
</p>
</tr>
<tr>
<p><label>Password:&nbsp;&nbsp;&nbsp;</label><input name="password" type="password" id="password" maxlength="20">
<span class="error password"></span>
</p>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td> 
<td>&nbsp;</td>
<td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>
<p><input type="submit" name="submit" value="Login"></p></td>
</tr>
</table>
</form>




</td></tr>
</table>

<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


</div>
</div><div id="footr" align="center"> designed by welsofts. &nbsp;&nbsp;&nbsp;
 email:kip@welsofts.com</div>
</body>
</html>
