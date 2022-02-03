<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Us Page</title>
	<meta name="viewport" content="width=devide-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="contactstyle.css">
</head>
<body class="grad" style="height: 100vh;">

	<div class="navbar">
		<div class="container">
			<div class="logo">
                <img src="Images/SpeedGauge.png" alt="Logo" style="height: 40px; width: 50px;">
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="dashboard.php">Dashboard</a></li>
				</ul>
				<div class="button">
					<a href="register.php">Register</a>
				<div class="button">
					<a href="login.php">Login</a>
				</div>
			</nav>
		</div>
	</div>

	<div class="contact-box">
		<form>
			<input type="text" class="input-field" placeholder="Your Name">
			<input type="email" class="input-field" placeholder="Your Email">
			<input type="text" class="input-field" placeholder="Subject">
			<textarea type="text" class="input-field textarea-field" placeholder="Your Message"></textarea>
			<button type="button" class="btn">Send Message</button>
		</form>
	</div>

</body>
</html>