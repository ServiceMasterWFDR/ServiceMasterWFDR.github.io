<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['choice'])) {
  $choice = $_POST['choice'] . "\n"; // Add a newline

  // Where to save the file.
  $filename = "user_choices.txt";

  //append the user choice to the file.
  file_put_contents($filename, $choice, FILE_APPEND);

  echo "Choice saved."; // Send a response back to JavaScript.
} else {
  echo "No choice received.";
}
?>