<?php
// Simple PHP Test Script

echo "<h1>PHP is working perfectly ✅</h1>";
echo "<p>Current Date & Time: " . date("Y-m-d H:i:s") . "</p>";
echo "<p>Your PHP Version: " . phpversion() . "</p>";

// Test an array
$fruits = ["Apple", "Banana", "Mango"];
echo "<h3>Sample Array Output:</h3>";
echo "<ul>";
foreach ($fruits as $fruit) {
    echo "<li>$fruit</li>";
}
echo "</ul>";

// Server info
echo "<h3>Server Information:</h3>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>

