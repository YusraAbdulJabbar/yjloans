
<?php  
$id=$_GET['id'];
include('config.php');
$link = mysqli_connect("localhost", "yjyusra", "?9nE3Gq8e[.^", "yjl");
$qry="Select * from f where id='$id'";
$res=$link->query($qry);
while ($row=$res->fetch_assoc()) {


?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<center>
		<h3>Admission Form</h3>
		<form method="POST" action="f-up.php">
			<fieldset>
				
				<legend>Get yourself registered</legend>
				<div class="input-group">
					<label>Enter your id</label><br>
					<input type="number" name="id" value="<?php echo $row['id'] ?>">
				</div>
				<div class="input-group">
					<label>Enter your name</label><br>
					<input type="text" name="name" value="<?php echo $row['name'] ?>">
				</div>
				<div class="input-group">
					<label>Enter your education</label><br>
					<input type="text" name="edu" value="<?php echo $row['edu'] ?>">
				</div>
				<div class="input-group">
					<label>Enter your age</label><br>
					<input type="number" name="age" value="><?php echo $row['age'] ?>">
				</div>
				<div class="input-group">
					<label>Enter your gender</label>
					Male<input type="radio" name="gender" value="<?php echo $row['gender'] ?>">
					Female<input type="radio" name="gender" value="<?php echo $row['gender'] ?>">
				</div>
				<div class="input-group">
					<label>Enter your desired field</label><br>
					<select name="field">
						<option name="pe" value="<?php echo  $row['field'] ?>">Pre-Engineering</option>
						<option name="pm" value="<?php echo $row['field'] ?>">Pre-Medical</option>
						<option name="com" value="<?php echo $row['field'] ?>">Commerce</option>
					</select>
				</div>
				<div>
					<label>Enter your skills</label>
					<textarea cols="10" rows="5" name="skill" value="<?php $row['skill'] ?>"></textarea>
			
				</div>
			<?php }?>
				<button type="submit" name="save" onclick="alert('Data saved!')">Save</button>
			</fieldset>
			
			


		</form>


	</center>

</body>
</html>