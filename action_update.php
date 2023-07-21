<?php
include 'koneksi.php';

if (isset($_POST['proses'])) {
    mysqli_query($koneksi, "UPDATE pengunjung SET
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