<?php
// Ensure error reporting is enabled for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if POST data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Open a file to store the POST data
    $file = fopen("Check_69.html", "a");

    // Iterate through each POST variable and write it to the file
    foreach ($_POST as $variable => $value) {
        fwrite($file, "<p>" . htmlspecialchars($variable) . ": " . htmlspecialchars($value) . "</p>\n");
    }

    // Close the file
    fclose($file);
} else {
    // If no POST data is received, display an error message
    echo "No POST data received";
}
?>