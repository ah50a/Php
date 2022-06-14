<?php 
if (isset($_SESSION['user'])) {
    # code...
    header('location:index1.php');die;
}