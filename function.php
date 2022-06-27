<?php
function koneksi()
{
   $koneksi = mysqli_connect('localhost', 'root', '', 'pwd');
   if (!$koneksi) {
      die("Koneksi gagal:" . mysqli_connect_error());
   }
   return $koneksi;
}
