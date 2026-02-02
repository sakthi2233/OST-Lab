<?php
// ------------------ SET COOKIE ------------------
setcookie("Summa", "John", time() + 3600); // Cookie expires in 1 hour
echo "Cookie is set.<br>";

// ------------------ READ COOKIE ------------------
if(isset($_COOKIE["Summa"])) {
    echo "Cookie value: " . $_COOKIE["Summa"] . "<br>";
    echo "The cookie has been read.<br>";
}

// ------------------ DELETE COOKIE ------------------
setcookie("Summa", "", time() - 3600); // Delete the cookie
echo "Cookie deleted.<br>";
?>

