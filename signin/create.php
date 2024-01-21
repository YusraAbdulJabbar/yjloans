<?php

$link=new mysqli("localhost", "yjyusra", "?9nE3Gq8e[.^", "yjl");

if (isset($_POST['save'])){

	$name=$_POST['name'];
	$edu=$_POST['edu'];
	$salary=$_POST['salary'];
	$desig=$_POST['design'];

	$qry="insert into learn (name,edu,salary,desig) values('$name','$edu','$salary','$desig')";
$result = $link->query($qry);
}
 if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $qry . "<br>". $link->error;

    } 
?>
	<table border="1">
		
		<thead>
			<tr>
				<th>Name</th>
				<th>Education</th>
				<th>Salary</th>
				<th>Designation</th>
			</tr>
		</thead>
	</table>
	
<?php

$link=new mysqli("localhost", "yjyusra", "?9nE3Gq8e[.^", "yjl");

$qry="select * from learn";
$query=$link->query(($qry));

while($row->$query(fetch_assoc())){


	?>
	<tr>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['edu']; ?></td>
	<td><?php echo $row['salary']; ?></td>
	<td><?php echo $row['design']; ?></td>
</tr>


	<?php } ?>
