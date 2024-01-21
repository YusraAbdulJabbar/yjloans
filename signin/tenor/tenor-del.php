<?php
$link = mysqli_connect("localhost", "root", "", "yjl", 3308);
$qry = "update tenor set tstatus = 0 where tid = " . $_GET['tid'] . ";";

if ($link->query($qry)) {
	header("location:tenor-table.php");
}

?>