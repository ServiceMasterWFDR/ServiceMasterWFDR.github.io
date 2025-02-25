<?php
session_start(); // Start a session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $choice1 = $_POST["choice1"];
    $choice2 = $_POST["choice2"];

    $_SESSION["choice1"] = $choice1; // Store in session
    $_SESSION["choice2"] = $choice2; // Store in session

    echo "Choices saved.";
} else {
    echo "Invalid request.";
}
?>