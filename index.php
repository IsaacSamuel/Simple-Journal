<html>
	<head>
	<link rel="stylesheet" type="text/css" href="style.css">
		<title>Journal Interface</title>
	</head>
	<body>
		<form action="post_entry.php" method="post">
		<p>Tags:</p><input type="text" name="tags"> <br>
		<p>Post:</p><textarea name="post" rows="10" cols="50"></textarea><br>
		<input type="submit">
		<a href = "show_entries.php">Show entries</a>
	</body>
</html>