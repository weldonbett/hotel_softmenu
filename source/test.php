<?
 session_start();
 
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="softmenu"; // Database name
$tbl_name="ses"; // Table name

// Connect to server and select databse.
mysql_connect($host, $username, $password)or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");


$no=1;



$sql="SELECT * FROM $tbl_name WHERE sta='0' AND cust='$no'";

$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1)
{
// Register $myusername, $mypassword and redirect to file "login_success.php"
    $row=  mysql_fetch_array($result);
    $_SESSION['cust'] =$row['cust'];
  exit();
   
	}
	else if($count==0){
	
$no+=1;

 
$sql="SELECT * FROM $tbl_name WHERE sta='0' AND cust='$no'";

$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

 
 
if($count==1)
{
// Register $myusername, $mypassword and redirect to file "login_success.php"
    $row=  mysql_fetch_array($result);
    $_SESSION['cust'] = $row['cust'];
  exit();

 }
 }
 ?>