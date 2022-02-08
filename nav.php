<nav class="d-inline-block position-relative" style="background-color: #FAFFC1; height: 100vh; width: 250px;">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
            <h1 style="" class="mt-3 h3 ms-4 ps-2 border-start border-4 mb-3 fw-bold border-info" >E-classe</h1>
            <img src="logo.png" alt="logo" class="mx-auto mt-5 d-block w-50 h-10 rounded-circle">
            <h2 class="h5 mt-3 text-center"><?php echo $_SESSION['username'] ?></h2>
            <a class="info text-center d-block text-decoration-none" href="">Admin</a>
            <ul class="list-unstyled mt-5 mx-auto text-center w-75">
                <li style="<?php if(basename($_SERVER['PHP_SELF']) == 'dashboard.php'){echo "background-color: #00C1FE;border-radius: 5px;";} ?>" class="mt-3 mx-auto w-75"><a class="d-block rounded py-2 fw-bold text-dark text-decoration-none" href="dashboard.php"><ion-icon name="home-outline"></ion-icon> Home</a></li>
                <li class="mt-3 mx-auto w-75"><a class="d-block rounded py-2 fw-bold text-dark text-decoration-none" href="#"><ion-icon name="bookmark-outline"></ion-icon> Course</a></li>
                <li style="<?php if(basename($_SERVER['PHP_SELF']) == 'students.php'){echo "background-color: #00C1FE;border-radius: 5px;";} ?>" class="mt-3 mx-auto w-75"><a class="d-block rounded py-2 fw-bold text-dark text-decoration-none" href="students.php"><ion-icon name="people-outline"></ion-icon> Students</a></li>
                <li style="<?php if(basename($_SERVER['PHP_SELF']) == 'payment.php'){echo "background-color: #00C1FE;border-radius: 5px;";} ?>" class="mt-3 mx-auto w-75"><a class="d-block rounded py-2 fw-bold text-dark text-decoration-none" href="payment.php"><ion-icon name="card-outline"></ion-icon> Payment</a></li>
                <li  class="mt-3 mx-auto w-75"><a class="d-block rounded py-2 fw-bold text-dark text-decoration-none" href="#"><ion-icon name="alert-outline"></ion-icon> Report</a></li>
                <li  class="mt-3 mx-auto w-75"><a class="d-block rounded py-2 fw-bold text-dark text-decoration-none" href="#"><ion-icon name="settings-outline"></ion-icon> Settings</a></li>
                <li  style="bottom : 10px;" class="position-absolute mt-3 mx-auto w-75"><a class="d-block rounded py-2 fw-bold text-dark text-decoration-none" href="signout.php">Logout <ion-icon name="log-out-outline"></ion-icon></a></li>
            </ul>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        </nav>    