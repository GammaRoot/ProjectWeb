


<!DOCTYPE html>
<html>

<head>
    <title>My Project</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php include('navbar.php'); ?>
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
                    <img src="Images/BMW.jpg" alt="">
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
                    <img src="upload/moon-1644672756.jpg" alt="">
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
    <div class="posts">

        <?php
        $con = mysqli_connect('localhost', 'root', '', 'projectweb');
        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }


        $query = "SELECT * FROM posts";

        $result = mysqli_query($con, $query);
        
        while ($row    = mysqli_fetch_assoc($result)) {
            echo "<div class='post'>" , 
            "<span>" . $row['description'] . "</span>",
            "<h2>" . $row['brand'] . "</h2>",
            "<img class='image' src='upload/" .  $row['image'] . "'/>",
            
            "</div>";
        }

        mysqli_close($con);
        ?>
    </div>



</body>

</html>