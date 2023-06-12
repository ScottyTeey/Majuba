<!DOCTYPE html>
<html>
<head>
	<title>Create Form Link</title>
</head>
<body>
	<h1>Create Form Link</h1>
	<form method="POST">
		<label for="form_name">Form Name:</label>
		<input type="text" name="form_name" id="form_name" required><br><br>
		<label for="form_description">Form Description:</label>
		<textarea name="form_description" id="form_description" required></textarea><br><br>
		<button type="submit" name="submit">Generate Link</button>
	</form>

	<?php
		if(isset($_POST['submit'])) {
			$form_name = $_POST['form_name'];
			$form_description = $_POST['form_description'];
			$form_link = "https://example.com/form.php?form_name=" . urlencode($form_name) . "&form_description=" . urlencode($form_description);
			echo "<p>Here's your new form link:</p>";
			echo "<a href='$form_link'>$form_link</a>";
		}
	?>
</body>
</html>
