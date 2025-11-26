<?php 

require_once 'db_config.php'; 
require_once 'models.php';

if (isset($_POST['insertNewBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$email = trim($_POST['email']);
	$gender = trim($_POST['gender']);
	$address = trim($_POST['address']);
	$specialization = trim($_POST['specialization']);
	$experience = trim($_POST['experience']);

	if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($gender) && !empty($address) && !empty($specialization) && !empty($experience)) {
			$query = insertRecords($pdo, $firstName, $lastName, $email, $gender, $address, $specialization, $experience);

		if ($query) {
			header("Location: ../index.php");
		} else {
			echo "Query failed";
		}
	} else {
		echo "All fields are required";
	}
}

if (isset($_POST['editBtn'])) {
	$id = $_GET['id'];
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$email = trim($_POST['email']);
	$gender = trim($_POST['gender']);
	$address = trim($_POST['address']);
	$specialization = trim($_POST['specialization']);
	$experience = trim($_POST['experience']);

	if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($gender) && !empty($address) && !empty($specialization) && !empty($experience)) {

		$query = updateRecords($pdo, $firstName, $lastName, $email, $gender, $address, $specialization, $experience, $id);

		if ($query) {
			header("Location: ../index.php");
		} else {
			echo "Update failed";
		}
	} else {
		echo "All fields are required";
	}
}

if (isset($_POST['deleteBtn'])) {
	$query = deleteRecords($pdo, $_GET['id']);
	if ($query) {
		header("Location: ../index.php");
	} else {
		echo "Deletion failed";
	}
}

?>