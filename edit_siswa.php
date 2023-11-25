<?php
include '../config/config.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tplahir = $_POST['tplahir'];
    $tglahir = $_POST['tglahir'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita_cita'];
    $jum_saudara = $_POST['jum_saudara'];
    $idkelas = $_POST['idkelas'];
    $idagama = $_POST['idagama'];

    $sql = "UPDATE siswa SET nama='$nama', tplahir='$tplahir', tglahir='$tglahir', alamat='$alamat', hobi='$hobi', cita_cita='$cita_cita', jum_saudara='$jum_saudara', idkelas='$idkelas', idagama='$idagama' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    
    if ($query) {
        header('Location: ../siswa.php');
    } else {
        die("Gagal Menyimpan Perbuahan");
    }
} else {
    die("Akses Ubah Dilarang");
}
?>