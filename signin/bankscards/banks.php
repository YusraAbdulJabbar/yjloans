<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "yjl", 3308);
// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$title = mysqli_real_escape_string($link, $_REQUEST['title']);
$info = mysqli_real_escape_string($link, $_REQUEST['info']);


// Attempt insert query execution
$sql = "INSERT INTO banks (title, info) VALUES ('$title', '$info')";
if (mysqli_query($link, $sql)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>