<?php

// Connect to the MySQL database
$servername = "localhost";
$username = "";
$password = "";
$dbname = "blog";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$title = $_POST['title'];
$author = $_POST['author'];
$content = $_POST['content'];
$date = date("Y-m-d H:i:s");

// Insert the new post into the database
$sql = "INSERT INTO posts (title, author, content, date) VALUES ('$title', '$author', '$content', '$date')";

if (mysqli_query($conn, $sql)) {
	echo "New post added successfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
