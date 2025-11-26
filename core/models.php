<?php 

require_once 'db_config.php';

function insertRecords($pdo, $first_name, $last_name, $email, $gender, $address, $specialization, $years_experience) {

	$sql = "INSERT INTO backend_developer_applications (first_name, last_name, email, gender, address, specialization, years_experience) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$first_name, $last_name, $email, $gender, $address, $specialization, $years_experience]);

	if ($executeQuery) {
		return true;
	}
}

function seeAllRecords($pdo) {
	$sql = "SELECT * FROM backend_developer_applications";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getRecordByID($pdo, $id) {
	$sql = "SELECT * FROM backend_developer_applications WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$id])) {
		return $stmt->fetch();
	}
}

function updateRecords($pdo, $first_name, $last_name, $email, $gender, $address, $specialization, $years_experience, $id) {

	$sql = "UPDATE backend_developer_applications 
				SET first_name = ?, 
					last_name = ?, 
					email = ?, 
					gender = ?, 
					address = ?, 
					specialization = ?, 
					years_experience = ? 
			WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$first_name, $last_name, $email, $gender, $address, $specialization, $years_experience, $id]);

	if ($executeQuery) {
		return true;
	}
}

function deleteRecords($pdo, $id) {
	$sql = "DELETE FROM backend_developer_applications WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return true;
	}
}

?>