<html lang="en">
<head>
  <meta charset="utf-8">
  <title>autocomplete demo</title>
  <link rel="stylesheet" href="que/jquery-ui.css">
  <script src="que/jquery-1.9.1.js"></script>
  <script src="que/jquery-ui.js"></script>
</head>
<body>
 
<label for="autocomplete">Select a programming language: </label>
<input id="autocomplete">
 
<script>
$( "#autocomplete" ).autocomplete({




source:[<?php
// Fill up array with names

				
                $db = mysql_connect("localhost", "root", "");
                $sl = mysql_select_db("softmenu", $db);
               
           


$result=mysql_query("SELECT*FROM breakfast");



 
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
</script>
 
</body>
</html>
