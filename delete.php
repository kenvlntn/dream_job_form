<?php require_once 'core/db_config.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete User</title>
	<style>
		body { font-family: "Arial"; }
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getUserByID = getRecordByID($pdo, $_GET['id']); ?>
	<div style="border-style: solid; height: 400px; background-color: #f0f0f0;">
		<h2>First Name: <?php echo $getUserByID['first_name']; ?></h2>
		<h2>Last Name: <?php echo $getUserByID['last_name']; ?></h2>
		<h2>Email: <?php echo $getUserByID['email']; ?></h2>
		<h2>Gender: <?php echo $getUserByID['gender']; ?></h2>
		<h2>Address: <?php echo $getUserByID['address']; ?></h2>
		<h2>Specialization: <?php echo $getUserByID['specialization']; ?></h2>
		<h2>Years of Experience: <?php echo $getUserByID['years_experience']; ?></h2>

		<div style="display: flex; justify-content: flex-end; width: 100%;">
			<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
				<input type="submit" name="deleteBtn" value="Delete" style="background-color: #f69697; border-style: solid;">
			</form>
		</div>
	</div>
</body>
</html>