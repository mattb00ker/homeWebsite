<!DOCTYPE html>
<html>
<head>
	<title>My Blog</title>
	<style>
		body {
			display: flex;
			flex-direction: column;
			align-items: center;
			font-family: Arial, sans-serif;
			padding: 0;
			margin: 0;
		}
		header {
			width: 100%;
			background-color: #333;
			color: white;
			padding: 20px;
			box-sizing: border-box;
			text-align: center;
			margin-bottom: 20px;
		}
		h1 {
			margin: 0;
			font-size: 36px;
		}
		.container {
			width: 80%;
			max-width: 800px;
			height: 600px;
			overflow-y: scroll;
			padding: 20px;
			box-sizing: border-box;
			background-color: #f9f9f9;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			border-radius: 10px;
		}
		.post {
			margin-bottom: 20px;
			padding-bottom: 20px;
			border-bottom: 1px solid #ccc;
		}
		h2 {
			margin-top: 0;
		}
		p {
			margin-top: 0;
			line-height: 1.5;
		}
		.back-button {
			margin-top: 20px;
			padding: 10px 20px;
			background-color: #333;
			color: white;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<header>
		<h1>My Blog</h1>
	</header>
	<div class="container">
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
	</div>
	<a href="http://apatheticgeek.ddns.net/myprojects.html" class="back-button">Back</a>
</body>
</html>
