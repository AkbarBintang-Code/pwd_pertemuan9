<?php
include 'koneksi.php';
$nim = $_GET["nim"];
//mengambil id yang ingin dihapus

//jalankan query DELETE untuk menghapus data
$query = "DELETE FROM mahasiswa WHERE nim='$nim' ";
$hasil_query = mysqli_query($konek, $query);

//periksa query, apakah ada kesalahan
if (!$hasil_query) {
   die("Gagal menghapus data: " . mysqli_errno($konek) .
      " - " . mysqli_error($konek));
} else {
   echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
}
