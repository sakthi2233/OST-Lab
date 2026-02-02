<?php
session_start();

/* ---------------- LOGOUT LOGIC ---------------- */
if (isset($_GET['action']) && $_GET['action'] == "logout") {
    session_unset();
    session_destroy();

    if (isset($_COOKIE['username'])) {
        setcookie("username", "", time() - 3600, "/");
    }

    header("Location: index.php");
    exit;
}

/* ---------------- LOGIN PROCESS ---------------- */
if (isset($_POST['login'])) {

    $correct_username = "admin";
    $correct_password = "123456";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $correct_username && $password === $correct_password) {

        $_SESSION['username'] = $username;

        if (isset($_POST['remember'])) {
            setcookie("username", $username, time() + (86400 * 30), "/");
        }

        header("Location: index.php");
        exit;
    } else {
        $error = "❌ Invalid Username or Password";
    }
}

/* ---------------- AUTO LOGIN ---------------- */
if (!isset($_SESSION['username']) && isset($_COOKIE['username'])) {
    $_SESSION['username'] = $_COOKIE['username'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Login System</title>
</head>
<body>

<?php if (isset($_SESSION['username'])) { ?>

    <!-- DASHBOARD -->
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> 🎉</h1>
    <a href="index.php?action=logout">Logout</a>

<?php } else { ?>

    <!-- LOGIN FORM -->
    <h2>Login Page</h2>

    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

    <form method="post">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>
            <input type="checkbox" name="remember"> Remember Me
        </label><br><br>

        <button type="submit" name="login">Login</button>
    </form>

<?php } ?>

</body>
</html>
