<?php
session_start();

// Dummy user data (normally from database)
$correct_username = "admin";
$correct_password = "123456";

$username = $_POST['username'];
$password = $_POST['password'];

// Verify credentials
if ($username === $correct_username && $password === $correct_password) {

    // Create session
    $_SESSION['username'] = $username;

    // Set cookie if "Remember Me" checked
    if (!empty($_POST['remember'])) {
        setcookie("username", $username, time() + (86400 * 30), "/");
    }

    header("Location: dashboard.php");
    exit;

} else {
    echo "Invalid login!";
}
?>
