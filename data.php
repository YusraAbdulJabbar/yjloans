<?php

$mysqli = new mysqli("localhost", "root", "", "yjl", 3308);

extract($_POST);


$sql = "INSERT into contactus (name ,email,mobile_no,subject,message) VALUES('" . $name . "','" . $email . "','" . $mobile_no . "','" . $subject . "','" . $message . "')";


$success = $mysqli->query($sql);


if (!$success) {
    die("Couldn't enter data: " . $mysqli->error);
}


echo "Thank You For Contacting Us ";





?>