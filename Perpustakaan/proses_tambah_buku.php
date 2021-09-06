<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
if($_POST){
    include "koneksi.php";

    // $nama_buku = mysqli_real_escape_string($conn, $_POST['nama_buku']);
    // $penulis = mysqli_real_escape_string($conn, $_POST['penulis']);
    // $penerbit = mysqli_real_escape_string($conn, $_POST['penerbit']);
    $nama_buku = $_POST['nama_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    if(empty($nama_buku)){
        echo "<script> alert ('nama buku tidak boleh kosong'); 
        location.href = 'tambah_buku.php';</script>";
    } elseif (empty($penulis)){
        echo "<script> alert ('nama penulis tidak boleh kosong'); 
        location.href = 'tambah_buku.php';</script>";
    } elseif (empty($penerbit)){
        echo "<script> alert ('nama penerbit tidak boleh kosong'); 
        location.href = 'tambah_buku.php';</script>";
    } else {
        $link = "insert into buku (nama_buku, penulis, penerbit) values ('".$nama_buku."','".$penulis."','".$penerbit."')";
        $insert = mysqli_query($conn, $link) or trigger_error(mysqli_error($conn)." ".$link);

        if ($insert){
            echo "<script> alert ('Sukses menambahkan buku'); 
            location.href = 'tambah_buku.php';</script>";
        } else {
            echo "<script> alert ('Gagal menambahkan buku'); 
            location.href = 'tambah_buku.php';</script>".mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}
?>