<!--Start session -->
<?php
session_start();
echo "Session started successfully.<br>";
?>

<!--Set session variable-->
<?php
$_SESSION["Summa"] = "John";
echo "Session variable 'Summa' is set.<br>";
?>

<!--Access session variable-->
<?php
echo "Welcome, " . $_SESSION["Summa"] . "<br>";
?>

<!--Destroy Session -->
<?php
session_destroy();
echo "Session destroyed. User logged out.";
?>
