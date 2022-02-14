<?php include('navbar.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Us Page</title>
	<meta name="viewport" content="width=devide-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="contactstyle.css">
</head>
<body class="grad" style="height: 100vh;">

	<div class="contact-box">
		<form method="post" action="savecontact.php">
			<input type="text" class="input-field" placeholder="Your Name" name="name" required>
			<input type="email" class="input-field" placeholder="Your Email" name="email" required>
			<input type="text" class="input-field" placeholder="Subject" name="subject" required>
			<textarea type="text" class="input-field textarea-field" placeholder="Your Message" name="message" required></textarea>
			<input type="submit" name="submitcontact" class="btn btn-info" value="Send Message">
		</form>
	</div>

</body>
</html>