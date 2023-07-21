<?php
include "koneksi.php";
$ID = $_GET['ID'];
$pengunjung = mysqli_query($koneksi,"SELECT * FROM pengunjung WHERE ID = '$ID'");
$row = mysqli_fetch_array($pengunjung);
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
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        input[type="email"],
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
            font-size: 16px;
            font-weight: bold;
        }

        .registerbtn:hover {
            background-color: #45a049;
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
<form action="action_update.php " method="post">
    <h1>Edit</h1>

        <input type="hidden" value="<?php $row['ID'];?>" name="ÍD">

        <label for="Nama"><b>Name</b></label>
        <input type="text" value="<?php echo $row['Nama']?>" placeholder="Masukkan nama" name="Nama" id="email" >

        <label for="umur"><b>Umur</b></label>
        <input type="number" value="<?php echo $row['umur']?>" placeholder="Masukkan umur" name="umur" id="email" >

        <label for="Gender"><b>Gender</b></label>
        <input type="radio" name="Gender" value="Laki Laki" <?php if($row['Gender'] === 'Laki Laki') echo 'checked'; ?>>Laki Laki
        <input type="radio" name="Gender" value="Perempuan" <?php if($row['Gender'] === 'Perempuan') echo 'checked'; ?>>Perempuan

        <label for="email">Email : </label>
        <input type="email" value="<?php echo $row['email']?>" placeholder="Enter Email" name="email" id="email" >

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="masukkan password" name="passwords" id="psw" required>

        <label for="jadwal_kunjungan">Jadwal Kunjungan</label>
        <input type="date" name="jadwal_kunjungan" value="<?php echo $row['jadwal_kunjungan']; ?>">



        <input type="submit" value="update" class="registerbtn" name="proses">
</form>
</body>
</html>
