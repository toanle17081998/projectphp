<?php
$mysqli = new mysqli("localhost","root","","wed_mysqli");

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>