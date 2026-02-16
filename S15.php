<?php
$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];

    if (
        preg_match("/^[A-Za-z ]+$/", $name) &&
        preg_match("/^\w+@\w+\.\w+$/", $email) &&
        preg_match("/^[6-9]\d{9}$/", $mobile) &&
        preg_match("/^(?=.[A-Z])(?=.[a-z])(?=.*\d).{8,}$/", $password)
    ) {
        $msg = "Registration Successful!";
    } else {
        $msg = "Invalid Input!";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Simple Registration Form</h2>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    Mobile: <input type="text" name="mobile"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Register">
</form>

<p style="color:blue;"><?php echo $msg; ?></p>

</body>
</html>