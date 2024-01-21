<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit();
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style>
		.styled-table {
			border-collapse: collapse;
			margin: 25px 0;
			font-size: 0.9em;
			font-family: sans-serif;
			min-width: 400px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
		}

		.styled-table thead tr {
			background-color: #009879;
			color: #ffffff;
			text-align: left;
		}

		.styled-table th,
		.styled-table td {
			padding: 12px 15px;
		}

		.styled-table tbody tr {
			border-bottom: 1px solid #dddddd;
		}

		.styled-table tbody tr:nth-of-type(even) {
			background-color: #f3f3f3;
		}

		.styled-table tbody tr:last-of-type {
			border-bottom: 2px solid #009879;
		}

		.styled-table tbody tr.active-row {
			font-weight: bold;
			color: #009879;
		}
	</style>
</head>

<body>

	<h1>Contact Table</h1>
	<div> User who logged in
		<?php echo $_SESSION['username']; ?> <a href="logout.php"><input type="button" value="Logout"></a>
	</div>

	<?php
	$con = new mysqli("localhost", "root", "", "yjl", 3308);

	if ($con->connect_error) {
		echo "Unable to Connect Database";
	} else {
		echo "";
	}


	$myQuery = "select * from contactus;";

	$output = $con->query($myQuery);

	echo "<table class='styled-table' >";
	echo "<tr><thead><th>ID</th><th>User Name</th><th>Email</th><th>Mobile No </th><th>Subject</th>><th>Message</th>><th>Date</th></thead></tr>";
	while ($contactus = $output->fetch_assoc()) {
		echo "<tr> <tbody>";

		echo "<td>" . $contactus['id'] . "</td>";
		echo "<td>" . $contactus['name'] . "</td>";
		echo "<td>" . $contactus['email'] . "</td>";
		echo "<td>" . $contactus['mobile_no'] . "</td>";
		echo "<td>" . $contactus['subject'] . "</td>";
		echo "<td>" . $contactus['message'] . "</td>";
		echo "<td>" . $contactus['date'] . "</td>";

		echo " </tbody></tr>";
	}
	echo "</table>";




	?>

</body>

</html>