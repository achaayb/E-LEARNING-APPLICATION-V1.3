<?php include 'protection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
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
                @media screen and (max-width: 990px) {
                  .hide-sm{
                    display: none;
                  }
                }
            </style>
</head>
<body>
    <div class="d-flex">
    <?php include("nav.php")?>    
        <main style="max-height: 100vh;overflow-y:scroll;" class="w-100 px-4">
            <div class="w-100 py-2 d-flex justify-content-between align-items-center">
                <a class="text-muted"  href=""> <ion-icon name="arrow-back-circle-outline"></ion-icon> </a>
                <form class="d-flex align-items-center ">
                  <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                  <a class="text-muted" href=""><ion-icon name="search-outline"></ion-icon></a>
                </form>
              </div>
            
            <div class="navbar navbar-light px-3">
              <div class="container-fluid">
                <a class="hide-sm navbar-brand fw-bold">Students List</a>
                <div class="d-flex align-items-center">
                  <a class="me-5 mt-1" href="#"><img src="sf.png" alt=""></a>
                  <button onclick="window.location.href='add_students.php'" class="btn btn-outline-white text-white bg-info">ADD NEW STUDENT</button>
              </div>
              </div>
            </div>

            <div class="hide-sm border-top border-2 m-2">
                <div class="row row-cols-7 py-2 text-muted">
                  <div class="col py-3s"></div>
                  <div class="col py-3">Name</div>
                  <div class="col py-3">E-mail</div>
                  <div class="col py-3">Phone</div>
                  <div class="col py-3">Enroll Number</div>
                  <div class="col py-3">Date of admission</div>
                  <div class="col py-3"></div>
                </div>
              </div>

            <?php

            
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "e_classe_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students";

if (!(mysqli_query($conn, $sql)))
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);

$result = mysqli_query($conn,$sql);


  

mysqli_close($conn);

  while($value = mysqli_fetch_assoc($result)) {
    echo '
    <div class="row row-cols-7  bg-white my-2 me-1">
    <div class="col-12 col-lg pb-2" ><img  src="foo.png" alt=""></div>
    <div class="col-12 col-lg py-3">'.$value['fname'].'</div>
    <div class="col-12 col-lg py-3">'.$value['email'].'</div>
    <div class="col-12 col-lg py-3">'.$value['phone'].'</div>
    <div class="col-12 col-lg py-3">'.$value['enroll'].'</div>
    <div class="col-12 col-lg py-3">'.$value['fdate'].'</div>
    <div class="col-12 col-lg text-end py-3">
      <a target="_blank" rel="noopener" href="update_students.php?id='.$value['id'].'"><img class="pe-2"  src="modif.png" alt=""></a>
        <a target="_blank" rel="noopener" href="delete_students.php?id='.$value['id'].'"><img src="poub.png" alt=""></a>
    </div>
  </div>
    ';
    
  }
            ?>
              
        </main>
    </div>
</body>
</html>
