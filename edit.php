<?php
include 'config/config.php';

if (!isset($_GET['id'])) {
    header("Location: siswa.php");
}

$id = $_GET['id'];

$sql = "SELECT * FROM siswa WHERE id=$id";
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_array($query);

if (mysqli_num_rows($query) < 1) {
    die("Data Tidak Ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h2>Edit Siswa</h2>

    <form action="controller/edit_siswa.php" method="post">
        <input type="hidden" name="id" id="id" value="<?php echo $siswa['id']?>">
        <div>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" id="nama" value="<?php echo $siswa['id']?>">
        </div>
        <br>
        <div>
            <label for="tplahir">Tempat Lahir: </label>
            <input type="text" name="tplahir" id="tplahir" value="<?php echo $siswa['id']?>">
        </div>
        <br>
        <div>
            <label for="tglahir">Tanggal Lahir: </label>
            <input type="date" name="tglahir" id="tglahir" value="<?php echo $siswa['id']?>">
        </div>
        <br>
        <div>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" id="alamat" cols="30" rows="10"><?php echo $siswa['id']?></textarea>
        </div>
        <br>
        <div>
            <label for="hobi">Hobi: </label>
            <input type="text" name="hobi" id="hobi" value="<?php echo $siswa['id']?>">
        </div>
        <br>
        <div>
            <label for="cita_cita">Cita-cita: </label>
            <input type="text" name="cita_cita" id="cita_cita" value="<?php echo $siswa['id']?>">
        </div>
        <br>
        <div>
            <label for="jum_saudara">Jumlah Saudara: </label>
            <input type="text" name="jum_saudara" id="jum_saudara" value="<?php echo $siswa['id']?>">
        </div>
        <br>
        <div>
            <label for="idkelas">id kelas: </label>
            <input type="text" name="idkelas" id="idkelas" value="<?php echo $siswa['id']?>">
        </div>
        <br>
        <div>
            <label for="idagama">id agama: </label>
            <input type="text" name="idagama" id="idagama" value="<?php echo $siswa['id']?>">
        </div>
        <br>
        <div>
            <input type="submit" value="Submit" name="submit" id="">
        </div>
    </form>
</body>
</html>