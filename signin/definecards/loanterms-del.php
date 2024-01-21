<?php
$link = mysqli_connect("localhost", "root", "", "yjl", 3308);
$qry = "update loanterms set lstatus = 0 where id = " . $_GET['id'] . ";";
if ($link->query($qry)) {
	header("location:loanterms-table.php");
}
?>