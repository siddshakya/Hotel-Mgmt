<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valid_username = "admin@gmail.com";
    $valid_password = "admin";

    // Retrieve form values
    $username = $_POST['emailAddress'];
    $password = $_POST['password'];

    // Check username and password
    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful
        session_start();
        $_SESSION['logged_in'] = true;
        header("Location:AdminDashboard.php");
        exit;
    } else {
        // Authentication failed
        echo "<script>alert('Invalid username or password');</script>";
    }
}
?>