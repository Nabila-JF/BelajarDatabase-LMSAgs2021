<!DOCTYPE html>
<html>
    <head>
        <link 
        href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
        rel = "stylesheet"
        integrity = "sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
        crossorigin = "anonymous">
        <title></title>
    </head>
    <body>
        <h3>Tambah Buku</h3>
        <form action = "proses_tambah_buku.php" method = "post"enctype="multipart/form-data">
        <br>Nama Buku :
            <input type = "text" name = "nama_buku" value = "" class = "form-control">
            <br> Penulis :
            <input type = "text" name = "penulis" value = "" class = "form-control">
            <br>Penerbit :
            <input type = "text" name = "penerbit" value = "" class = "form-control">
            <br>Deskripsi :
            <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
            <br>Cover Buku :
            <input type="file" name="foto" id="foto" class = "form-control">
            <br><button class="btn btn-primary" type="submit" name="submit">Tambah Buku</button>
        </form>
        <script
        src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity = "sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin = "anonymous"
        ></script>
    </body>
</html>