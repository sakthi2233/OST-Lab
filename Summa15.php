<?php
$msg = "";
$file = "users.txt";   // File to store registered users

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    $dob = $_POST["dob"];

    # Remove extra spaces
    $name = preg_replace("/\s+/", " ", trim($name));

    # Split name into words
    $name_parts = preg_split("/\s+/", $name);

    # Check name contains only letters
    $valid_name = preg_grep("/^[A-Za-z]+$/", $name_parts);

    # Email validation
    $email_valid = preg_match("/^\w+@\w+\.\w+$/i", $email);

    # Password check (at least 6 characters)
    $password_valid = preg_match("/^[A-Za-z0-9]{6,}$/", $password);

    # Mobile validation
    $mobile_valid = preg_match("/^[6-9]\d{9}$/", $mobile);

    # DOB validation (format YYYY-MM-DD)
    $dob_valid = preg_match("/^\d{4}-\d{2}-\d{2}$/", $dob);

    if (
        count($valid_name) == count($name_parts) &&
        $email_valid &&
        $mobile_valid &&
        $password_valid &&
        $dob_valid
    ) {

        $user_exists = false;

        # Check if file exists
        if (file_exists($file)) {
            $users = file($file);
            foreach ($users as $user) {
                $user_data = explode("|", trim($user));
                if ($user_data[1] == $email) {
                    $user_exists = true;
                    break;
                }
            }
        }

        if ($user_exists) {
            $msg = "Email already registered!";
        } else {
            $data = $name . "|" . $email . "|" . $mobile . "|" . $password . "|" . $dob . "\n";
            file_put_contents($file, $data, FILE_APPEND);
            $msg = "Registration Successful!";
        }

    } else {
        $msg = "Invalid Input!";
    }
}
?>

<html>
<body>

<h2>Registration Form</h2>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="text" name="email" required><br><br>
    Mobile: <input type="text" name="mobile" required><br><br>
    Date of Birth: <input type="date" name="dob" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Register">
</form>

<p style="color:blue;"><?php echo $msg; ?></p>

</body>
</html>
