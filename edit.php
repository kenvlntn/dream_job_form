<?php require_once 'core/db_config.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit User</title>
	<style>
		body { font-family: "Arial"; }
		input { font-size: 1.5em; height: 50px; width: 200px; }
	</style>
</head>
<body>
	<?php $getUserByID = getRecordByID($pdo, $_GET['id']); ?>
	<h1>Edit the user!</h1>
	<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getUserByID['first_name']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getUserByID['last_name']; ?>">
		</p>
		<p>
			<label for="email">Email</label> 
			<input type="email" name="email" value="<?php echo $getUserByID['email']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label> 
			<input type="text" name="gender" value="<?php echo $getUserByID['gender']; ?>">
		</p>
		<p>
			<label for="address">Address</label> 
			<input type="text" name="address" value="<?php echo $getUserByID['address']; ?>">
		</p>
		<p>
			<label for="specialization">Specialization</label> 
			<input type="text" name="specialization" value="<?php echo $getUserByID['specialization']; ?>">
		</p>
		<p>
			<label for="experience">Years of Experience</label> 
			<input type="number" name="experience" value="<?php echo $getUserByID['years_experience']; ?>">
			<input type="submit" name="editBtn">
		</p>
	</form>
</body>
</html>