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
    $deskripsi = $_POST['deskripsi'];

    //buat gambarnya

    if(empty($nama_buku)){
        echo "<script> alert ('nama buku tidak boleh kosong'); 
        location.href = 'tambah_buku.php';</script>";
    } elseif (empty($penulis)){
        echo "<script> alert ('nama penulis tidak boleh kosong'); 
        location.href = 'tambah_buku.php';</script>";
    } elseif (empty($penerbit)){
        echo "<script> alert ('nama penerbit tidak boleh kosong'); 
        location.href = 'tambah_buku.php';</script>";
    } elseif (empty($deskripsi)){
        echo "<script> alert ('deskripsi tidak boleh kosong'); 
        location.href = 'tambah_buku.php';</script>";
    } /*elseif(!isset($_FILES['foto'])) {
            $fp=addslashes(file_get_contents($_FILES['foto']['tmp_name'])); //will store the image to fp
            var_dump($fp); die;
    } */ else {
        $ekstensi_diperbolehkan	= array('png','jpg');
        $namaFile = $_FILES['foto']['name'];
        $x = explode('.', $namaFile);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['foto']['size'];
        $file_tmp = $_FILES['foto']['tmp_name'];
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1044070){			
                move_uploaded_file($file_tmp, 'assets/foto_produk/'.$namaFile);
            }else{
                echo "<script> alert ('ukuran file terlalu besar'); 
                location.href = 'tambah_buku.php';</script>";
            }
        }else{
            echo "<script> alert ('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN'); 
            location.href = 'tambah_buku.php';</script>";
        }
        
        $foto = 'http://localhost/perpustakaan/assets/foto_produk/'.$namaFile;
        // $foto = $namaFile;
        $link = "insert into buku (nama_buku, penulis, penerbit, deskripsi, foto) values ('".$nama_buku."','".$penulis."','".$penerbit."','".$deskripsi."','".$foto."')";
        $insert = mysqli_query($conn, $link) or trigger_error(mysqli_error($conn)." ".$link);

        if ($insert){
            echo "<script> alert ('Sukses menambahkan buku'); 
            location.href = 'buku.php';</script>";
        } else {
            echo "<script> alert ('Gagal menambahkan buku'); 
            location.href = 'tambah_buku.php';</script>".mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}
?>