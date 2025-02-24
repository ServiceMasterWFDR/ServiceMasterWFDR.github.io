<?php
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