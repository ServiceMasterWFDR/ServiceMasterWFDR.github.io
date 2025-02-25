<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$file_url = "user_choices.txt";

$file_handle = fopen($file_url, 'r');



if ($file_handle) {

    while (($line = fgets($file_handle)) !== false) {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $choice1 = $_POST["choice1"];
            $choice2 = $_POST["choice2"];

            $data = "Choice 1: " . $choice1 . "\nChoice 2: " . $choice2 . "\n";

            $filename = "user_choices.txt";
            file_put_contents($filename, $data, FILE_APPEND);

            echo "Choices saved.";
        } else {
            echo "Invalid request.";
        }
        echo $line;
    }

    fclose($file_handle);
} else {

    echo "Error opening file";
}
?>