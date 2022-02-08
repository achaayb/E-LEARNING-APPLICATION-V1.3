<?php
session_cache_expire(60 * 24);
session_start();
if (!isset($_SESSION['id'])) {
    header('location: signin.php');
    exit();
}
?>