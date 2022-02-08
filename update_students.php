<?php include 'protection.php'; ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "e_classe_db";
  
    $conn = new mysqli($servername, $username, $password, $dbname);
  
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

  if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $id = mysqli_real_escape_string($conn,$_GET['id']);
  
    $sql = "SELECT * FROM students WHERE id = $id";
    $value = mysqli_fetch_assoc(mysqli_query($conn, $sql));
    
    echo '
    <form class="w-50 mx-auto" method="POST" action="">
<div class="form-group">
  <label for="fname">name:</label>
  <input class="form-control" required type="text" id="fname" name="fname" value="'.$value['fname'].'">
</div>
<div class="form-group">
  <label for="lname">email:</label>
  <input class="form-control" required type="text" id="lname" name="email" value="'.$value['email'].'">
</div>
<div class="form-group">
  <label for="lname">phone:</label>
  <input class="form-control" required type="text" id="lname" name="phone" value="'.$value['phone'].'">
</div>
<div class="form-group">
  <label for="lname">enroll:</label>
  <input class="form-control" required type="text" id="lname" name="enroll" value="'.$value['enroll'].'" >
</div>
<input type="hidden" name="id" value="'.$_GET['id'].'">
  <input type="submit" class="btn btn-primary" value="Submit">
</form>
    ';
  } else {

    $id = mysqli_real_escape_string($conn,$_POST['id']);
    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $enroll = mysqli_real_escape_string($conn,$_POST['enroll']);

    $sql = "UPDATE students SET fname='$fname', email='$email', phone='$phone', enroll='$enroll'
    WHERE id = $id
    ";

    if (mysqli_query($conn, $sql)) {
      echo "EDITED $id";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

  }
  

mysqli_close($conn);


?>