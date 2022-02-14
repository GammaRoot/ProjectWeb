<?php 
    

$db = mysqli_connect('localhost', 'root', '', 'projectweb');

$errors = array();

//if the register button is clicked
if(isset($_POST['submitcontact'])) {
    $name = mysqli_real_escape_string($db,$_POST['name']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $subject = mysqli_real_escape_string($db,$_POST['subject']);
    $message = mysqli_real_escape_string($db,$_POST['message']);

    
    if(empty($name)) {
        array_push($errors, "Name is required");
    }

    if(empty($email)) {
        array_push($errors, "Email is required");
    }

    if(empty($subject)) {
        array_push($errors, "Subject is required");
    }

    if(empty($message)) {
        array_push($errors, "Message is required");
    }

    // if there are no errors, save user to database
    if(count($errors) == 0) {
        $sql = "INSERT INTO contact (name, email, subject, message)
                 VALUES ('$name', '$email', '$subject', '$message')";
        mysqli_query($db, $sql);

        header('location: index.php');
        echo "Thanks for contacting us!";
    }
}