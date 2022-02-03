<?php include('server.php');

//if the user is not logged in they cannot access this page
// if(empty($_SESSION['username'])) {
//     header('location: login.php');
// }

?>
<!DOCTYPE html>
<html>

<head>
    <title>User registration system using PHP and MySQL</title>
    <!-- <link rel="stylesheet" type="text/css" href="homepage.css"> -->
    <link rel="stylesheet" type="text/css" href="style.css">
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
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="dashboard.php">Dashboard</a></li>
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
                        </div>
                        <div class="button">
                            <a href="register.php">Register</a>
                        </div>
                    <?php endif ?>
    </nav>
    </div>

    
    <div class="main">
    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio" id="radio1">
            <input type="radio" name="radio" id="radio2">
            <input type="radio" name="radio" id="radio3">
            <input type="radio" name="radio" id="radio4">
            <input type="radio" name="radio" id="radio5">
            <input type="radio" name="radio" id="radio6">
            <input type="radio" name="radio" id="radio7">
            <input type="radio" name="radio" id="radio8">

            <!-- slide images start -->
            <div class="slide first">
                <img src="Images/Mercedes.jpg" alt="">
            </div>
            <div class="slide">
                <img src="Images/BMV.jpg" alt="">
            </div>
            <div class="slide">
                <img src="Images/Audi.jpg" alt="">
            </div>
            <div class="slide">
                <img src="Images/R34.jpg" alt="">
            </div>
            <div class="slide">
                <img src="Images/Giulia.jpg" alt="">
            </div>
            <div class="slide">
                <img src="Images/ZR1.jpg" alt="">
            </div>
            <div class="slide">
                <img src="Images/A110.jpg" alt="">
            </div>
            <div class="slide">
                <img src="Images/BMW M2.jpg" alt="">
            </div>
            <!-- slide images end -->
        </div>
            <!-- manual navigation start -->
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                    <label for="radio5" class="manual-btn"></label>
                    <label for="radio6" class="manual-btn"></label>
                    <label for="radio7" class="manual-btn"></label>
                    <label for="radio8" class="manual-btn"></label>
                </div>
            <!-- manual navigation end -->
    </div>
    </div>
    <!-- <div class="main">
        <img src="Images/Mercedes.jpg">
        <img src="Images/BMV.jpg">
        <img src="Images/Audi.jpg">
        <img src="Images/R34.jpg">
        <img src="Images/Giulia.jpg">
        <img src="Images/ZR1.jpg">
        <img src="Images/A110.jpg">
        <img src="Images/BMW M2.jpg">
    </div> -->



</body>

</html>