<?php
session_start();
if(!isset($_SESSION['user'])){
	header("location:index.php");
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="css/realadmin.css" />

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>SPICES</title>

        <script type="text/javascript" >

            function kip(someForm){
                var answer = confirm("Would you like to make this order? ")
                if(answer==true){
                    someForm.submit();
                }else{
                    return false;
                }	
            }

        </script>
    </head><body bgcolor="#FFFFFF"><div id="header"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<embed src="images/ss.svg" type="image/svg+xml" />


       


        </div>

        <div id="container">
            <div id="leftpane" align="right"> 



                <br /><br />



<table><tr><td>
 <nav>
 
 
 
  
  <ul >
  <li> <a href="breakfast.php" style="text-decoration:none"> Breakfast;</a>
					   </li></ul>
                     <ul><li><a href="drinks.php" style="text-decoration:none" >Drinks&nbsp;&nbsp;&nbsp; </a>     </li></ul>
                    <ul><li><a href="lunch.php" style="text-decoration:none">Lunch&nbsp;&nbsp;&nbsp;</a>
</li></ul>
                  <ul><li><a href="evening.php" style="text-decoration:none">Dinner&nbsp;&nbsp;&nbsp;</a></li></ul>
				  
				<ul><li><a href="snacks.php" style="text-decoration:none">Desserts </a>   </li></ul>
<ul><li><a href="spices.php" style="text-decoration:none"> Spices &nbsp;&nbsp;&nbsp;</a>
</li></ul>
<ul><li><a href="spoons.php" style="text-decoration:none">Cuttleries</a></li></ul>
<ul><li><a href="index.php" style="text-decoration:none">Exit &nbsp; &nbsp;  &nbsp; &nbsp;</a></li></ul>
</nav>
					   </td></tr></table>
					   
					   
                    <br />
                    <br />
                    <br />
                    <br /></div>            <div id="rightpane">



                <?php
				
		
                $db = mysql_connect("localhost", "root", "");
                $sl = mysql_select_db("softmenu", $db);
                $result = mysql_query("SELECT*FROM spices WHERE ss= '1' ORDER BY spice");
           


                echo "<table border='0' align='center' cellspacing='1' cellpadding='1'><tr><th  bgcolor='#FFFFFF' align='left'>SPICES</th>     <th  bgcolor='#FFFFFF' align='left'>CHAIR NO.</th>  <th  bgcolor='#FFFFFF'> </th>   <th  bgcolor='#FFFFFF'> </th></tr> ";
				echo "</tr><tr><td>...................................................</td><td>.........................................</td><td>............</td><td>.............</td></tr>";

while($row=mysql_fetch_array($result))

{
	echo "<form action='spices.php' method='post' onsubmit='return kip(this)'>" ;
	echo "<input type='hidden' name='spice' value='".$row['spice']."'>";
	
	echo "<tr><td>".$row['spice']."</td>";

	echo "<td><select name='tableno'>";?>
			<option value='1a'> 1a</option>
			<option value="1b"> 1b</option>
			<option value="1c"> 1c</option>
			<option value="2a">2a</option>
			<option value="2b">2b</option>	
			<option value="2c">2c</option>	
	<option value="2d">2d</option>
		<option value="3a">3a</option>	
		<option value="3b">3b</option>	
		<option value="3c">3c</option>	
	<option value="3d">3d</option>	<?php
	
	echo "</select><td>";
	echo "<td><input type='submit' name='submit' value='Order'  ></td>";
	
	echo "</tr><tr><td>...................................................</td><td>.........................................</td><td>............</td><td>.............</td></tr></form>";
	
}
echo "</table>";


 
mysql_close();


?>









            </div></div>

        <div id="footr" align="center">
            designed by welsofts. &nbsp;&nbsp;&nbsp;
            email:kip@welsofts.com</div>

    </body>
    <?php
    if (isset($_POST['submit'])) {
        $db = mysql_connect("localhost", "root", "");
        $sl = mysql_select_db("softmenu", $db);



        foreach ($_POST as $key => $value) {
            $$key = $value;
            echo $key . "<br/>";
        }

        

        echo $serve = 0;



        $insert = "INSERT INTO orders VALUES('', '$spice',  '$tableno','$serve')";
        $result = mysql_query($insert) or die(mysql_error());
        if ($result) {
            echo "success";
        }
    }else{
        echo "failedddddddddddddddddddddddddddddddddddddddddd";
    }
    ?>

</html>

