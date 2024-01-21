<?php
include('connect.php');

if (isset($_POST['save'])){

	$name=$_POST['name'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
}
$qry="insert into fd (name,age,gender) values('$name','$age','$gender')";

if(mysqli_query($link,$qry)){
	echo "Data inserted";
}
else{
    echo("data Failed $qry".mysqli_error($link));
    
}




  ?>