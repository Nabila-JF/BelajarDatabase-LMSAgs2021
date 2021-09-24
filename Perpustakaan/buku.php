<?php
include "header.php";
?>
<h2>Daftar Buku</h2>
<a href="tambah_buku.php" class="mt-1 mb-1 btn btn-primary">+ Tambah Buku</a>
<div class = "row">
    <?php
    include "koneksi.php";
    $qry_buku = mysqli_query($conn, "select * from buku");
    while ($dt_buku = mysqli_fetch_array($qry_buku)){
        ?>
        <div class = "col-md-3">
            <div class = "card">
                <?php
                if (isset($dt_buku['foto']) && $dt_buku['foto'] != ''){
                ?>
                    <img src="<?php echo $dt_buku['foto'];?>"class="card-img-top">
                    <?php /* ?><img src="assets/foto_produk/<?=$dt_buku['foto']?>"> <?php */ ?>
                <?php } else {?>
                    <img src="" alt="">
                <?php } ?>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $dt_buku['nama_buku'];?></h5>
                    <p class="card-text"><?php echo $dt_buku['deskripsi'];?></p>
                    <a href="pinjam_buku.php?id_buku=<?php echo $dt_buku['id_buku'];?>" class = "btn btn-primary">Pinjam</a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php
include "footer.php";
?>