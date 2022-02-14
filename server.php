<?php 
    session_start();
    $username = "";
    $email = "";
    $errors = array();

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'projectweb');

//if the register button is clicked
if(isset($_POST['register'])) {
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

    
    if(empty($username)) {
        array_push($errors, "Username is required");
    }

    if(empty($email)) {
        array_push($errors, "Email is required");
    }

    if(empty($password_1)) {
        array_push($errors, "Password is required");
    }

    if($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // if there are no errors, save user to database
    if(count($errors) == 0) {
        $password = md5($password_1); //encrypt password before storing in database (security)
        $sql = "INSERT INTO user (username, email, password, role)
                 VALUES ('$username', '$email', '$password', 'user')";
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php'); // redirect to homepage
    }
}

//log user in from login page
if(isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    
    if(empty($username)) {
        array_push($errors, "Username is required");
    }

    if(empty($password)) {
        array_push($errors, "Password is required");
    }

    if(count($errors) == 0) {
        $password = md5($password); //encrypt password before comparing with that from database
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);

        if(mysqli_num_rows($result) == 1) {
            //log user in
           

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            while($row = $result->fetch_assoc()) {
                $_SESSION['role'] = $row["role"];
            }
            header('location: index.php'); // redirect to homepage
        } else {
            array_push($errors, "wrong username/password combination");
        }
    }
}

//logout
if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: index.php');
}

?>