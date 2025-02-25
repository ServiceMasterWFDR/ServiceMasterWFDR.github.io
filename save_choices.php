<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $choice1 = $_POST["choice1"];
    $choice2 = $_POST["choice2"];

    $data = "Issue: " . $choice1 . "\nSeverity: " . $choice2 . "\n";

    $filename = "user_choices.txt"; // Corrected file name
    file_put_contents($filename, $data, FILE_APPEND | LOCK_EX); // Added LOCK_EX

    echo "Choices saved.";
} else {
    echo "Invalid request.";
}
?>