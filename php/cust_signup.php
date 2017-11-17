<?php 
	include '../database.php';

	$pdo = Database::connect();

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$country = $_POST['country'];
	if(!empty($_GET['user_type'])){
		$user_type = $_REQUEST['user_type'];
			$query = $pdo->prepare("INSERT INTO user(firstname, lastname, email, password, country, user_type) VALUES(?, ?, ?, ?, ?, ?)");
			$query->execute(array($firstname, $lastname, $email, $password, $country, $user_type));
			header('location:../index.php');
	}
?>