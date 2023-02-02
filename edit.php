<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Edit</title>
</head>
<body>
    <?php
    include("koneksi.php");

    $id = $_GET['id_jurusan'];
    $query = mysqli_query($koneksi, "SELECT * FROM tb_jurusan INNER JOIN tb_peserta ON 
    tb_jurusan.id_jurusan = tb_peserta.id_jurusan");
    
    while ($row = mysqli_fetch_array($query)){
    ?>
    <table border="0">
        <form action="proses-edit.php" method="POST">
            <tr><h2>Edit Data</h2></tr>
            <input type="hidden" name="id_jurusan" value="<?php echo $row['id_jurusan']?>" />

            <tr>
                <td><label for="nama" value="<?php $row['nama']; ?>">Nama</label></td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td><label for="gender" value="<?php $row['gender']; ?>">Gender</label></td>
                <td><input type="text" name="gender" value="<?php $row['gender']; ?>"></td>
            </tr>

            <tr>
                <td><label for="asalsekolah" value="<?php $row['asalsekolah']; ?>">Asal Sekolah</label></td>
                <td><input type="text" name="asalsekolah" value="<?php $row['asalsekolah']; ?>"></td>
            </tr>

            <tr>
                <td><label for="tempatlahir" value="<?php $row['tempatlahir']; ?>">Tempat Lahir</label></td>
                <td><input type="text" name="tempatlahir" value="<?php $row['tempatlahir']; ?>"></td>
            </tr>

            <tr>
                <td><label for="tanggallahir" value="<?php $row['tanggallahir']; ?>">Tanggal Lahir</label></td>
                <td><input type="date" name="tanggallahir" value="<?php $row['tanggallahir']; ?>"></td>
            </tr>
            <tr>
                <td><label for="jurusan" value="<?php $row['jurusan']; ?>">Jurusan</label></td>
                <td><input type="text" name="jurusan" value="<?php $row['jurusan']; ?>"></td>
            </tr>
            <tr>
                <td><label for="kapasitas" value="<?php $row['kapasitas']; ?>">Kapasitas</label></td>
                <td><input type="text" name="kapasitas" value="<?php $row['kapasitas']; ?>"></td>
            </tr>
            <tr>
                <td><label for="terisi" value="<?php $row['terisi']; ?>">terisi</label></td>
                <td><input type="text" name="terisi" value="<?php $row['terisi']; ?>"></td>
            </tr>

            <button type="submit" value="edit" name="edit">Simpan</button>
        </form>
    </table>
    <?php
    }
    ?>
</body>
</html>