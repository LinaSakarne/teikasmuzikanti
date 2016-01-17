<?php
$username="teikas";
$password="teikas";
$database="teikas";
$events=$_POST[' Pasâkums:'];
$kad=$_POST['Kad'];
$kur=$_POST['Kur'];
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query = "INSERT INTO events VALUES('','$field1-name','$field2-name','$field3-name')";
mysql_query($query);
mysql_close();
?>