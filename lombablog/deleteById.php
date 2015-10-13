<?php 
include "connection.php"; 

$id = $_GET['id']; 

mysql_query("DELETE FROM lombacuy where ID = '$id'"); 

header("Location: delete.php");


