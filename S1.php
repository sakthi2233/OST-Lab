<?php
echo "<h3>Arithmetic Operators</h3>";

$a = 10;
$b = 3;

echo "a + b = " . ($a + $b) . "<br>";
echo "a - b = " . ($a - $b) . "<br>";
echo "a * b = " . ($a * $b) . "<br>";
echo "a / b = " . ($a / $b) . "<br>";
echo "a % b = " . ($a % $b) . "<br>";
echo "a ** b = " . ($a ** $b) . "<br><br>";


echo "<h3>Assignment Operators</h3>";

$x = 5;

echo "Initial x = $x<br>";

$x += 3; 
echo "x += 3 → $x<br>";

$x -= 2; 
echo "x -= 2 → $x<br>";

$x *= 2; 
echo "x *= 2 → $x<br>";

$x /= 3; 
echo "x /= 3 → $x<br>";

$x %= 3; 
echo "x %= 3 → $x<br><br>";


echo "<h3>Comparison Operators</h3>";

$p = 10;
$q = "10";

echo "p == q : ";
var_dump($p == $q);

echo "<br>p === q : ";
var_dump($p === $q);

echo "<br>p != q : ";
var_dump($p != $q);

echo "<br>p > 5 : ";
var_dump($p > 5);

echo "<br>p <= 10 : ";
var_dump($p <= 10);

?>
