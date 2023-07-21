<?php
include "koneksi.php";

if (isset($_POST['proses'])) {
    mysqli_query($koneksi, "INSERT INTO pengunjung SET
        Nama = '$_POST[Nama]',
        umur = '$_POST[umur]',
        Gender = '$_POST[Gender]',
        email = '$_POST[email]',
        passwords = '$_POST[passwords]',
        jadwal_kunjungan = '$_POST[jadwal_kunjungan]'
    ");

header("location:list_pengunjung.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
</head>
<style>
    
    form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        input[type="password"],
        input[type="radio"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .container {
            text-align: center;
            margin-top: 20px;
        }

        .container a {
            text-decoration: none;
            color: #4CAF50;
        }
</style>
<body>
<form action="" method="post">
    <h1>Register</h1>
    <label for="Nama"><b>Name</b></label>
    <input type="text" placeholder="Masukkan nama" name="Nama" id="email" required>

    <label for="umur"><b>Umur</b></label>
    <input type="number" placeholder="Masukkan umur" name="umur" id="email" required>

    <label for="Gender"><b>Gender</b></label>
    <input type="radio" name="Gender" value="Laki Laki">Laki Laki
    <input type="radio" name="Gender" value="Perempuan">Perempuan

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="masukkan password" name="passwords" id="psw" required>

    <label for="jadwal_kunjungan">Jadwal Kunjungan</label>
    <input type="date" name="jadwal_kunjungan">

    <input type="submit" value="daftar" class="registerbtn" name="proses">
  </div>
  
  <div class="container signin">
    <a href="#">Sign in</a>
    </div>
</form>
</body>
</html>