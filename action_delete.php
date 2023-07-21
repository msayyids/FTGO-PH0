<?php
include 'koneksi.php';  
$ID  = $_GET['ID'];
$query="DELETE from pengunjung where ID='$ID'";
mysqli_query($koneksi, $query);
header("location:list_pengunjung.php");
?>