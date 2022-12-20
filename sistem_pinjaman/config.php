<?php
$host = "localhost";
$user = "root";

//biarkan password kosong
$password = "";
$database="sistem_pinjaman";
// Create connection
$samb=mysqli_connect($host, $user, $password,$database);

// Check connection
if (mysqli_connect_errno()) {
  echo"Connection failed: ";
  exit();
}

?>