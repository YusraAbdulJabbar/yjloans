<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "yjl", 3308);
// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$bank = mysqli_real_escape_string($link, $_REQUEST['bank']);
$t1_5 = mysqli_real_escape_string($link, $_REQUEST['t1_5']);
$t1_10 = mysqli_real_escape_string($link, $_REQUEST['t1_10']);
$t1_15 = mysqli_real_escape_string($link, $_REQUEST['t1_15']);
$t2_5 = mysqli_real_escape_string($link, $_REQUEST['t2_5']);
$t2_10 = mysqli_real_escape_string($link, $_REQUEST['t2_10']);
$t2_15 = mysqli_real_escape_string($link, $_REQUEST['t2_15']);
$t3_5 = mysqli_real_escape_string($link, $_REQUEST['t3_5']);
$t3_10 = mysqli_real_escape_string($link, $_REQUEST['t3_10']);
$t3_15 = mysqli_real_escape_string($link, $_REQUEST['t3_15']);
$tstatus = mysqli_real_escape_string($link, $_REQUEST['tstatus']);



// Attempt insert query execution
$sql = "INSERT INTO tenor (bank,t1_5,t1_10,t1_15,t2_5,t2_10,t2_15,t3_5,t3_10,t3_15,tstatus) VALUES ('$bank', '$t1_5', '$t1_10', '$t1_15',
'$t2_5', '$t2_10', '$t2_15','$t3_5', '$t3_10', '$t3_15', '$tstatus')";


echo $sql;

if (mysqli_query($link, $sql)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>