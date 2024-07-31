<?php
session_start();

// Create connection
$conn = mysqli_connect("localhost","root","","grc_exam");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>