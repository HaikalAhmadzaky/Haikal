<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Siswa</title>
</head>
<body>
    <h2>Form Tambah Siswa Baru</h2>

    <form action="controller/tambah_siswa.php" method="post">
        <div>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <br>
        <div>
            <label for="tplahir">Tempat Lahir: </label>
            <input type="text" name="tplahir" id="tplahir" required>
            <!-- <select name="tplahir" id="" required>
                <option value="disable selected">Pilih Kota Lahir</option>
                <option value="M">Malang</option>
                <option value="S">Surabaya</option>
                <option value="A">Bali</option>
                <option value="J">Jakarta</option>
                <option value="B">Bandung</option>
            </select> -->
        </div>
        <br>
        <div>
            <label for="tglahir">Tanggal Lahir: </label>
            <input type="date" name="tglahir" id="tglahir" required>
        </div>
        <br>
        <div>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
        </div>
        <br>
        <div>
            <label for="hobi">Hobi: </label>
            <input type="text" name="hobi" id="hobi" required>
        </div>
        <br>
        <div>
            <label for="cita_cita">Cita-cita: </label>
            <input type="text" name="cita_cita" id="cita_cita" required>
        </div>
        <br>
        <div>
            <label for="jum_saudara">Jumlah Saudara: </label>
            <input type="text" name="jum_saudara" id="jum_saudara" required>
        </div>
        <br>
        <div>
            <label for="idkelas">id kelas: </label>
            <input type="text" name="idkelas" id="idkelas" required>
        </div>
        <br>
        <div>
            <label for="idagama">id agama: </label>
            <input type="text" name="idagama" id="idagama" required>
        </div>
        <br>
        <br>
        <div>
            <input type="submit" value="Submit" name="submit" id="">
        </div>
    </form>
</body>
</html>