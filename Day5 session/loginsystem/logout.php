<?php 
session_start();
include_once "midlewares/auth.php";
unset($_SESSION['user']);
header('location:login.php');