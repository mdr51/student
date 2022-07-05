<?php
/*Including connection file*/
include("connect.php");
/*Getting rid from previous page*/
$rid=$_REQUEST['rid'];
/*SQL query of delete*/
$qry="delete from reg where rid='$rid'";
/*Executing SQL query*/
$sql=mysql_query($qry);

if($sql)
/*calling display page*/
header("location:viewdel.php");
?>