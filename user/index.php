<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <h1>Halaman User</h1>
   <h2>Halo selamat datang <?php echo $_SESSION['level'] ?></h2>
   <button><a href="logout.php">logout</a></button>
</body>

</html>