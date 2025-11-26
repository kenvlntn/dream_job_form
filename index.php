<?php require_once 'core/db_config.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Job Registration</title>
	<style>
		body { font-family: "Arial"; }
		input { font-size: 1.5em; height: 50px; width: 200px; }
		table, th, td { border:1px solid black; }
	</style>
</head>
<body>
	<h3>Welcome to the Backend Developer Registration System. Input your details here to register.</h3>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName">
		</p>
		<p>
			<label for="email">Email</label> 
			<input type="email" name="email">
		</p>
		<p>
			<label for="gender">Gender</label> 
			<input type="text" name="gender">
		</p>
		<p>
			<label for="address">Address</label> 
			<input type="text" name="address">
		</p>
		<p>
			<label for="specialization">Specialization</label> 
			<input type="text" name="specialization">
			<input type="submit" name="insertNewBtn">
		</p>
		<p>
			<label for="experience">Years of Experience</label> 
			<input type="number" name="experience">
		</p>
	</form>

	<table style="width:100%; margin-top: 50px;">
	  <tr>
	    <th>ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Email</th>
	    <th>Gender</th>
	    <th>Address</th>
	    <th>Specialization</th>
	    <th>Experience</th>
	    <th>Date Added</th>
	    <th>Action</th>
	  </tr>
	  <?php $seeAllRecords = seeAllRecords($pdo); ?>
	  <?php foreach ($seeAllRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['email']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['address']; ?></td>
	  	<td><?php echo $row['specialization']; ?></td>
	  	<td><?php echo $row['years_experience']; ?></td>
	  	<td><?php echo $row['date_added']; ?></td>
	  	<td>
	  		<a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
	  		<a href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>
</body>
</html>