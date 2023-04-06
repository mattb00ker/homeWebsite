<!DOCTYPE html>
<html>
<head>
	<title>Add New Post</title>
</head>
<body>

	<h1>Add New Post</h1>

	<form method="post" action="addPost.php">
		<label for="title">Title:</label>
		<input type="text" name="title" id="title"><br><br>

		<label for="author">Author:</label>
		<input type="text" name="author" id="author"><br><br>

		<label for="content">Content:</label>
		<textarea name="content" id="content"></textarea><br><br>

		<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>
