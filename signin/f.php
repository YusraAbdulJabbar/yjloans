<?php
include('config.php');
 $link = mysqli_connect("localhost", "yjyusra", "?9nE3Gq8e[.^", "yjl");

if(isset($_POST['save'])){

	$name=$_POST['name'];
	$edu=$_POST['edu'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$field=$_POST['field'];
	$skill=$_POST['skill'];
}
$qry="insert into f (name,edu,age,gender,field,skill)values ('$name','$edu','$age','$gender','$field','$skill')";

if ($link->query($qry) === TRUE){
    echo "Data inserted";
        header("location:f-table.php");

}
else
{
    echo "Data Failed $qry".mysqli_error($link);
}

?>