<!DOCTYPE html>
<html>
<head>
	<title>My Blog</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>My Blog</h1>
	<?php
		// Code to display your blog posts goes here
        // Connect to MySQL database
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "database_name";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// Retrieve blog posts from database
	$sql = "SELECT * FROM posts ORDER BY date DESC";
	$result = $conn->query($sql);

	// Display blog posts
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo "<div class='post'>";
			echo "<h2>" . $row["title"] . "</h2>";
			echo "<p>" . $row["content"] . "</p>";
			echo "<p>Posted on " . $row["date"] . "</p>";
			echo "</div>";
		}
	} else {
		echo "No blog posts found.";
	}

	$conn->close();
	?>
</body>
</html>