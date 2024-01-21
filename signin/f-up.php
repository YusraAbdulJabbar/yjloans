<?php
$id=$_GET['id'];
include('config.php');
$link = mysqli_connect("localhost", "yjyusra", "?9nE3Gq8e[.^", "yjl");

if(isset($_POST['save'])){
    $id=$_POST['id'];
	$name=$_POST['name'];
	$edu=$_POST['edu'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$field=$_POST['field'];
	$skill=$_POST['skill'];
}
$qry="update f set name='$name',edu='$edu',age='$age',gender='$gender',field='$field',skill='$skill' where id='$id'";

if ($link->query($qry) === TRUE){
	echo "Data updated";
	header("locatin:f-table.php");
}
else{
	echo ("Data failed $qry".mysqli_error($link));
}


?>