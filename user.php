<?php
session_start();
$_SESSION["first_name"] = $_GET["first_name"];
$_SESSION["last_name"] = $_GET["last_name"];
$_SESSION["email"] = $_GET["email"];
header('location:index.php');
