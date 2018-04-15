<?php
  $servername = ""; // Your server address
  $username = ""; // Your MySQL user name
  $password = ""; // Your MySQL password
  $dbname = ""; // Your database schema name

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
  }
?>