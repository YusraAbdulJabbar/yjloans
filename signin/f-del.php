<?php

include_once("config.php");
$id=$_GET['id'];
$qry="delete from f where id='$id'";

if(mysqli_query($link,$qry)){
	echo "Data Deleted ";
	header('location:f-table.php');
}
else{
	echo "Data failed";
}



?>