<?php
include ("koneksi.php");


$id = $_GET['id_jurusan'];
$sql = "DELETE FROM tb_jurusan WHERE id_jurusan='$id'";
$sql = "DELETE FROM tb_peserta WHERE id_jurusan='$id'";

$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:tampil.php?status=sukses');
} else {
    echo "gagal";
}
?>
