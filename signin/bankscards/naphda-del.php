<?php
$link = mysqli_connect("localhost", "root", "", "yjl", 3308);

$qry = "update bnaphda set bstatus = 0 where bid = " . $_GET['bid'] . ";";

if ($link->query($qry)) {
	header("location:naphda-table.php");
}

?>