<?php

  include 'protection.php';

  $servername = "localhost";
  $username = "root";
  $password = "password";
  $dbname = "e_classe_db";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $id = mysqli_real_escape_string($conn,$_GET['id']);

  $sql = "DELETE FROM students WHERE id = $id";

  if (mysqli_query($conn, $sql)) {
    echo "User $id Deleted!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);


?>