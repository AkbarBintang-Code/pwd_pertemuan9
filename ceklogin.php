<?php
require 'function.php';
session_start();

$user = $_POST['username'];
$pass = md5($_POST['password']);

$query = mysqli_query(koneksi(), "SELECT *  FROM user WHERE username = '$user' AND password = '$pass'");

$result = mysqli_num_rows($query);

if ($result > 0) {
   $data = mysqli_fetch_assoc($query);
   // cek level user(admin/user)
   if ($data['level'] == "admin") {
      $_SESSION['user'] = $data['username'];
      $_SESSION['level'] = "admin";
      // tentukan halaman yg di ases admin
      header("Location:admin/index.php");
   } elseif ($data['level'] == "user") {
      $_SESSION['user'] = $data['username'];
      $_SESSION['level'] = "user";
      // tentukan halaman yg di ases admin
      header("Location:user/index.php");
   } else {

      // alihkan ke halaman login kembali
      header("location:login.php?alert=gagal");
   }
} else {
   header("location:login.php?alert=gagal");
}
