<?php
require 'function.php';
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
    <?php
    if (isset($_GET['alert'])) {
        if (isset($_GET['alert']) == "gagal") {
            echo "<script>alert('username dan password salah, harap ulangi');window.location='login.php';</script>";
        } else if (isset($_GET['alert']) == "belum login") {
            echo "<script>alert('anda belum login');window.location='login.php';</script>";
        }
    }
    ?>

    <h1 align="center">Form login</h1>
    <table align="center">
        <form action="ceklogin.php" method="POST">
            <tr>
                <td>
                    <label>
                        Username</label>
                </td>
                <td>
                    <input type="text" name="username" placeholder="username" required autocomplete="off">
                </td>
            </tr>
            <tr>
                <td><label>
                        Password

                    </label></td>
                <td>
                    <input type="password" name="password" placeholder="password" required autocomplete="off">
                </td>
            </tr>
            <tr>
                <td><button type="submit" class="tombol_login" value="Login">Masuk</button></td>
            </tr>
    </table>
    </form>
</body>

</html>