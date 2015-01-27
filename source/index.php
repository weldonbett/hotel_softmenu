<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="css/realadmin.css" />




        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>eZee softmenu</title>

    </head><body bgcolor="white">
        <div id="header">
          
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<embed src="images/ss.svg" type="image/svg+xml" />



            <br ><br />
        </div>

     
        <div id="container">
            <div id="leftpane" align="right"> 

               <br /><br />
			   
			   
		


<table><tr><td>
 <nav>
 
 
 
  
  <ul >
  <li> <a href="breakfast.php" style="text-decoration:none" onclick="<? session_start();
/*
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="softmenu"; // Database name
$tbl_name="ses"; // Table name

// Connect to server and select databse.
mysql_connect($host, $username, $password)or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");



	$result=mysql_query("SELECT MIN(cust)FROM ses WHERE sta= '0' ");

 
$row=mysql_fetch_array($result);

echo "fhsdjakl".$row['MIN(cust)'];




session_start();
 $_SESSION['k'] = $row['MIN(cust)'];
 
$d=$row['MIN(cust)'];


/*


$del ="UPDATE ses
SET use = '2' WHERE cust = '$d'";
$resultt=mysql_query($del) or die(mysql_error());

*/



	
		 





function generatePassword($length=3)
{


$password="";
$possible="2346789bcdfghjkmnpqrtvwxyzBCDDFHJKLMNPQRTVWXYZ";
$maxlength=strlen($possible);
if($length>$maxlength)
{
$length=$maxlength;
}
$i=0;
while($i<$length)
{
$char=substr($possible,mt_rand(0,$maxlength-1),1);
if(!strstr($password,$char))
{
$password.=$char;
$i++;
}
}


 $_SESSION['user'] = $password;
 
echo "customer serial no.".$password;
return $password;
}



generatePassword();
echo "<br/>";
echo"dhjsklhjkl;hgjkl;'nmkl;hjkl;hjkljkljnhk". $_SESSION['user'] ;
 
?>
 
  ?>"> Breakfast  </a>
					   </li></ul>
                     <ul><li><a href="drinks.php" style="text-decoration:none" onclick="          ">Drinks  &nbsp;&nbsp;&nbsp;</a>     </li></ul>
                    <ul><li><a href="lunch.php" style="text-decoration:none">Lunch &nbsp;&nbsp;&nbsp; </a>
</li></ul>
                  <ul><li><a href="evening.php" style="text-decoration:none">Dinner &nbsp;&nbsp;&nbsp;</a></li></ul>
				  
				<ul><li><a href="snacks.php" style="text-decoration:none">Desserts  </a>   </li></ul>
<ul><li><a href="spices.php" style="text-decoration:none"> Spices&nbsp;&nbsp;&nbsp;  </a>
</li></ul>
<ul><li><a href="spoons.php" style="text-decoration:none">Cuttleries </a></li></ul>
<ul><li><a href="index.php" style="text-decoration:none">Home &nbsp;&nbsp;&nbsp;&nbsp;</a></li></ul>
</nav>
					   </td></tr></table>




            
			
			
			
			
         </div><div id="rightpane"> <h4 align="right">
		   <nav><ul >
  <li>           <a href="login.php" style="text-decoration:none">login &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;</a>
                                                                                  
                                </a></li></ul>
</nav>
                               </h4>


 
 
 

               <br /><br />
               <br /><br />
               <br /><br />
               <br /><br />
               <br /><br />
               <br /><br />
               <br /><br />
               <br /><br />
               <br /><br />
               <br /><br />
               <br />
              
               






                                </div></div>
                                <div id="footer" align="center">
                                    designed by welsofts. &nbsp;&nbsp;&nbsp;
                                    email:kip@welsofts.com</div>

                                </body>
                                </html>