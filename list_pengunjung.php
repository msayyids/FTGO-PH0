<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Pengunjung</title>
</head>
<style>

body, table {
    margin: 0;
    padding: 0;
}


table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ccc;
}

th {
    background-color: #f2f2f2;
    border: 1px solid #ccc;
    padding: 8px;
}

td {
    border: 1px solid #ccc;
    padding: 8px;
}

h2 {
    text-align : center;
}

a {
    text-decoration:none;
    color:white;
    background:blue ;
    padding:5px 5px;
    margin:5px; 
}

</style>
<body>
    <h2>List Pengunjung</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Password</th>
            <th>Jadwal Kunjungan</th>
            <th>Edit/Delete data</th>
        </tr>
        <?php
        include 'koneksi.php';
        $pengunjung = mysqli_query($koneksi, "SELECT * FROM pengunjung");
        $no = 1;
        foreach ($pengunjung as $row) {
            echo "
            <tr>
                <td>" . $row['ID'] . "</td>
                <td>" . $row['Nama'] . "</td>
                <td>" . $row['umur'] . "</td>
                <td>" . $row['Gender'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['passwords'] . "</td>
                <td>" . $row['jadwal_kunjungan'] . "</td>
                <td>
                    <a href='form_update.php?ID=" . $row['ID'] . "'>Edit</a>
                    <a href='action_delete.php?ID=" . $row['ID'] ."'>Delete</a>
                </td>    
            </tr>
            ";
            $no++;
        }
        ?>

    </table>
</body>
</html>