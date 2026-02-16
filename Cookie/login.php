<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<form method="post" action="login_process.php">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <label>
        <input type="checkbox" name="remember"> Remember Me
    </label><br><br>

    <button type="submit">Login</button>
</form>

</body>
</html>
