<?php
include 'config/config.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>                               
</head>
<body>
    <h2>Daftar Siswa</h2>

    <nav>
        <a href="tambah.php">[+] Tambah Siswa Baru</a>
    </nav>
    <br>
    <hr>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Hobi</th>
                <th>Cita-cita</th>
                <th>Jumlah Saudara</th>
                <th>Id Kelas</th>
                <th>Id Agama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM siswa";
            $query = mysqli_query($conn, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>".$siswa['id']."</td>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['tplahir']."</td>";
                echo "<td>".$siswa['tglahir']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['hobi']."</td>";
                echo "<td>".$siswa['cita_cita']."</td>";
                echo "<td>".$siswa['jum_saudara']."</td>";
                echo "<td>".$siswa['idkelas']."</td>";
                echo "<td>".$siswa['idagama']."</td>";

                echo "<td>";
                echo "<a href='edit.php?id=".$siswa['id']."'>Edit</a> | ";
                echo "<a href='controller/hapus.php?id=".$siswa['id']."'>Hapus</a> | ";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>