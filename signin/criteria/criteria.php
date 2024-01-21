<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "yjl", 3308);
// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$ebank = mysqli_real_escape_string($link, $_REQUEST['ebank']);
$e1 = mysqli_real_escape_string($link, $_REQUEST['e1']);
$e2 = mysqli_real_escape_string($link, $_REQUEST['e2']);
$e3 = mysqli_real_escape_string($link, $_REQUEST['e3']);
$e4 = mysqli_real_escape_string($link, $_REQUEST['e4']);
$e5 = mysqli_real_escape_string($link, $_REQUEST['e5']);
$e6 = mysqli_real_escape_string($link, $_REQUEST['e6']);
$e7 = mysqli_real_escape_string($link, $_REQUEST['e7']);
$cstatus = mysqli_real_escape_string($link, $_REQUEST['cstatus']);


// Attempt insert query execution
$sql = "INSERT INTO criteria (ebank, e1,e2,e3,e4,e5,e6,e7,cstatus) VALUES ('$ebank', '$e1', '$e2', '$e3', '$e4', '$e5', '$e6', '$e7', '$cstatus')";
if (mysqli_query($link, $sql)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>