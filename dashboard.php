<!DOCTYPE html>
<html lang="en">

  
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

$student = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as cnt FROM students"));
$payments = mysqli_fetch_assoc(mysqli_query($conn, "SELECT SUM(balance) as sm FROM payment_details"));


mysqli_close($conn);

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
  ul li:hover {
      background-color: #00C1FE;
      border-radius: 5px;
  }
  ul li span:hover {
      background-color: #00C1FE;
      border-radius: 5px;
  }
</style>
</head>
<body>
    <div class="d-flex">
        <?php include("nav.php")?>    
        <main class="w-100 px-4">
            <div class="w-100 py-2 d-flex justify-content-between align-items-center">
                <a class="text-muted"  href=""> <ion-icon name="arrow-back-circle-outline"></ion-icon> </a>
                <form class="d-flex align-items-center ">
                  <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                  <a class="text-muted" href=""><ion-icon name="search-outline"></ion-icon></a>
                </form>
              </div>
            
              <div class="row pt-3">
                <div style="min-width: 150px;" class="col" >
                  <div class="p-1 mt-2 rounded w-100" style="background: #F0F9FF; border-radius: 10%;" >
                  <i class="bi bi-mortarboard fs-3" style="color: #74C1ED;"></i>
                  <p>Student</p>
                  <p class="text-end fw-bold fs-5"><?php echo $student["cnt"] ?></p>
                </div>
                </div>  
                <div style="min-width: 150px" class="col"  >
                  <div class="p-1 mt-2 rounded w-100" style="background: #FEF6FB; border-radius: 10%;">
                    <i class="bi bi-bookmark fs-3" style="color: #EE95C5;"></i>
                    <p>Course</p>
                    <p class="text-end fw-bold fs-5">13</p>
                  </div>
                </div>       
                <div style="min-width: 150px" class="col"  >
                  <div class="p-1 mt-2 rounded w-100" style="background: #FEFBEC; border-radius: 10%;">
                    <i class="bi bi-currency-dollar fs-3" style="color: #74C1ED;"></i> 
                    <p>Payments</p>
                    <p class="text-end fw-bold fs-5">DHS <?php echo $payments["sm"] ?></p>
                  </div>
                </div>
                <div style="min-width: 150px" class="col"  >
                  <div class="p-1 mt-2 rounded w-100" style="background: linear-gradient(to right bottom, #00C1FE 18.27%, #FAFFC1 91.84%); border-radius: 10%;">
                    <i class="bi bi-person text-white fs-3" ></i>
                    <p class="text-white">Users</p>
                    <p class="text-end fw-bold fs-5">3</p>
                  </div>
                </div>
              </div>

        </main>
    </div>
</body>
</html>
