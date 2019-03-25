<?php
session_start();
include "koneksi.php";

$username = $_POST["username"];
$password = $_POST["password"];

$query = mysqli_query($conn, "SELECT * FROM login WHERE username='$username' AND password='$password'");
if($data = mysqli_num_rows($query) > 0){
    $_SESSION["username"] = $username;
    header("location: beranda.php");
}else{
    header("location: index.php");
}

?>