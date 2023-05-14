<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
	// Redirect to login page
	header('Location: login.php');
	exit();
}

// Check if form has been submitted
if (isset($_POST['add_reminder'])) {
	// Retrieve form data
	$medication = $_POST['medication'];
	$time = $_POST['time'];

	// Add reminder to database using SQL 


	// Redirect to reminder page
	header('Location: rem.html');
	exit();
}
?>
