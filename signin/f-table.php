<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<table>
		
		<tr>
			<th>Name</th>
			<th>Education</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Field</th>
			<th>Skill</th>
		</tr>
<?php  
$link = mysqli_connect("localhost", "yjyusra", "?9nE3Gq8e[.^", "yjl");
$qry="Select * from f";
$res=$link->query($qry);
while ($row=$res->fetch_assoc()) {


?>
		<tr>
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['edu'] ?></td>
			<td><?php echo $row['age'] ?></td>
			<td><?php echo $row['gender'] ?></td>
			<td><?php echo $row['field'] ?></td>
			<td><?php echo $row['skill'] ?></td>
			<td><a href="f-update.php?id=<?php echo $row['id']?>">Edit</a></td>
			<td><a href="f-del.php?id=<?php  echo $row['id']?>">Delete</a></td>


		</tr>
	<?php }
	?>
	</table>

</body>
</html>