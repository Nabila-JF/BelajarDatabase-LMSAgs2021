<?php
include "koneksi.php";
$id_siswa = $_GET['id_siswa'];
$qry_del_siswa = mysqli_query($conn, "DELETE FROM siswa WHERE id_siswa = '".$id_siswa."'");
if ($qry_del_siswa){
    echo "<script>alert('Sukses menghapus siswa');location.href='tampil_siswa.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus siswa');location.href='tampil_siswa.php';</script>";
}
?>