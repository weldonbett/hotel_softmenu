<?php
$hostname='localhost';
$user='root';
$pass='';
$dbase='softmenu';
$connection=mysql_connect("$hostname","$user","$pass")
or die("can't connect to MYSQL.see  that the confiquration  are  correct");
$db=mysql_select_db($dbase,$connection)or die ("can't select database.");
?>