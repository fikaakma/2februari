<?php
include ("koneksi.php");
if (isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $jurusan = $_POST['jurusan'];
    $asalsekolah = $_POST['asalsekolah'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];
   
    $sql="INSERT INTO tb_jurusan(jurusan, kapasitas, terisi) VALUES ('$jurusan', '$kapasitas', '$terisi')"; 
    $query=mysqli_query($koneksi,$sql);

    $sql = "SELECT max(id_jurusan) AS id_jurusan FROM tb_jurusan LIMIT 1";
    $query=mysqli_query($koneksi,$sql);

    $data=mysqli_fetch_array($query);
    $id_jurusan=$data['id_jurusan'];

    $sql="INSERT INTO tb_peserta(nama, gender, id_jurusan, asalsekolah, tempatlahir, tanggallahir) 
    VALUES ('$nama','$gender','$id_jurusan','$asalsekolah','$tempatlahir','$tanggallahir')";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        header('location:tampil.php?status=sukses');
    } else {
        header('location:tampil.php?status=gagal');
    }
}
?>