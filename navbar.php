
<?php include_once('database.php'); ?>
<?php include('server.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Navbar</title>
    <link href="navbar.css" rel="stylesheet">
</head>

<body>

<div class="navbar">
        <div class="container">
            <div class="logo">
                <img src="Images/SpeedGauge.png" alt="Logo" style="height: 40px; width: 50px;">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <?php if (isset($_SESSION["role"]) && $_SESSION["role"] === "admin") : ?>
                        <li><a href="dashboard.php">Dashboard</a></li>
                    <?php endif ?>
                </ul>

                <?php if (isset($_SESSION["username"])) : ?>
                    <div class="button">
                        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                        <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
                    </div>
        </div>
    <?php else : ?>
        <div class="button">
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </div>
    <?php endif ?>
    </nav>
    </div>

</body>

</html>