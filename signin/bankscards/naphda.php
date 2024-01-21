<?php
// ...
$link = mysqli_connect("localhost", "root", "", "yjl", 3308);

// Check if a file was uploaded successfully
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
	// Get the file details
	$image = $_FILES['image']['name'];
	$tmpimage = $_FILES['image']['tmp_name'];

	// Move the uploaded file to the desired location
	$targetDirectory = 'uploads/';
	$targetFile = $targetDirectory . basename($image);

	if (move_uploaded_file($tmpimage, $targetFile)) {
		// File uploaded successfully, continue with the database insertion

		// Escape user inputs for security
		$btitle = mysqli_real_escape_string($link, $_REQUEST['btitle']);
		$binfo = mysqli_real_escape_string($link, $_REQUEST['binfo']);
		$t1size = mysqli_real_escape_string($link, $_REQUEST['t1size']);
		$t1price = mysqli_real_escape_string($link, $_REQUEST['t1price']);
		$t1finance = mysqli_real_escape_string($link, $_REQUEST['t1finance']);
		$t1contribute = mysqli_real_escape_string($link, $_REQUEST['t1contribute']);
		$t2size = mysqli_real_escape_string($link, $_REQUEST['t2size']);
		$t2price = mysqli_real_escape_string($link, $_REQUEST['t2price']);
		$t2finance = mysqli_real_escape_string($link, $_REQUEST['t2finance']);
		$t2contribute = mysqli_real_escape_string($link, $_REQUEST['t2contribute']);
		$t3size = mysqli_real_escape_string($link, $_REQUEST['t3size']);
		$t3price = mysqli_real_escape_string($link, $_REQUEST['t3price']);
		$t3finance = mysqli_real_escape_string($link, $_REQUEST['t3finance']);
		$t3contribute = mysqli_real_escape_string($link, $_REQUEST['t3contribute']);
		$blink = mysqli_real_escape_string($link, $_REQUEST['blink']);
		$bstatus = mysqli_real_escape_string($link, $_REQUEST['bstatus']);

		// Attempt insert query execution
		$sql = "INSERT INTO bnaphda (btitle, binfo, t1size, t1price, t1finance, t1contribute, t2size, t2price, t2finance, t2contribute, t3size, t3price, t3finance, t3contribute, bpic, blink, bstatus) VALUES ('$btitle', '$binfo', '$t1size', '$t1price', '$t1finance', '$t1contribute', '$t2size', '$t2price', '$t2finance', '$t2contribute', '$t3size', '$t3price', '$t3finance', '$t3contribute', '$image', '$blink', '$bstatus')";

		if ($link->query($sql)) {
			$bid = mysqli_insert_id($link); // Get the last inserted ID
			echo "Records added successfully.";
		} else {
			$_SESSION['alert'] = '<p class="bg-danger">Unable to add new data, please contact System Administrator</p>';
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
} else {
	echo "No file was uploaded.";
}

// Close connection
mysqli_close($link);
?>