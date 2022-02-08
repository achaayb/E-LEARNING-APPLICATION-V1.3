<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<form class="w-50 mx-auto" method="POST" action="">
<div class="form-group">
  <label for="fname">name:</label>
  <input class="form-control" required type="text" id="fname" name="fname">
</div>
<div class="form-group">
  <label for="lname">schedule:</label>
  <input class="form-control" required type="text" id="lname" name="schedule">
</div>
<div class="form-group">
  <label for="lname">balance:</label>
  <input class="form-control" required type="text" id="lname" name="balance">
</div>
  <input type="submit" class="btn btn-primary" value="Submit">
</form>

<?php

include 'protection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $servername = "localhost";
  $username = "root";
  $password = "password";
  $dbname = "e_classe_db";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $fname= mysqli_real_escape_string($conn,$_POST['fname']);
  $schedule= mysqli_real_escape_string($conn,$_POST['schedule']);
  $balance= mysqli_real_escape_string($conn,$_POST['balance']);
  $date = date("Y-m-d");

  echo $fname."<br>".$schedule."<br>"."<br>".$balance;

  
  $sql = "INSERT INTO payment_details (fname, schedule, balance, fdate)
   VALUES ('$fname', '$schedule', '$balance', '$date')";

  if (mysqli_query($conn, $sql)) {
    echo "<br>"."New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);

}

?>