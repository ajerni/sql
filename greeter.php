<?php

// Get the name from the URL parameter
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';

// Check if the name is provided
if ($name) {
  // Display the greeting message
  echo "Hello, " . $name . "!";
} else {
  // Display a form to enter the name
  echo "<form method='get'>";
  echo "<label for='name'>Enter your name:</label><br>";
  echo "<input type='text' name='name' id='name'><br>";
  echo "<input type='submit' value='Greet me'>";
  echo "</form>";
}

?>