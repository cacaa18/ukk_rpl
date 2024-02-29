<?php
include("../koneksi.php");
$query = mysqli_query($koneksi, "SELECT * FROM buku");
$queryCategory = mysqli_query($koneksi, "SELECT * FROM kategori")
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet"> 

</head>
<body>
<h1 class="mt-4">Peminjaman Buku</h1>
<a href="../css/styles.css"></a>
<div class="card">
<br>
<div class="row">
    <div class="col-md-12">
        <form method="post">
            <?php
                if(isset($_POST['submit'])) {
                    $id_buku = $_POST['id_buku'];
                    $id_user = $_SESSION['user']['id_user'];
                    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
                    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
                    $status_peminjaman = $_POST['status_peminjaman'];
                    $query = mysqli_query($koneksi, "INSERT INTO peminjaman(id_buku,id_user,tanggal_peminjaman,tanggal_pengembalian,status_peminjaman) values('$id_buku','$id_user','$tanggal_peminjaman','$tanggal_pengembalian','$status_peminjaman')");

                    if($query){
                        echo '<script>alert("Peminjaman Berhasil"); location.href="pinjam.php";</script>';
                    }else{
                        echo '<script>alert("Peminjaman Gagal");</script>';
                    }
                }
            ?>
             <div class="row mb-3">
                <div class="col-md-4 ms-4">Buku</div>
                <div class="col-md-7">
                    <select name="id_buku" class="form-control">
                        <?php
                            $buk = mysqli_query($koneksi, "SELECT*FROM buku");
                            while($buku = mysqli_fetch_array($buk)){
                                ?>
                                <option value="<?php echo $buku['id_buku'];?>"><?php echo $buku['judul'];?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4 ms-4">Tanggal Pengembalian</div>
                <div class="col-md-7"> <!-- Mengubah ukuran kolom menjadi 6 -->
                    <input type="date" class="form-control" name="tanggal_peminjaman">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4 ms-4">Tanggal Pengembalian</div>
                <div class="col-md-7"> <!-- Mengubah ukuran kolom menjadi 6 -->
                    <input type="date" class="form-control" name="tanggal_pengembalian">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4 ms-4">Status Peminjaman</div>
                <div class="col-md-7">
                    <select name="status_peminjaman" class="form-control">
                        <option value="dipinjam">Di Pinjam</option>
                        <option value="dikembalikan">Di Kembalikan</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8 mb-3" style="margin-left: 35.5%;">
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                    <button type="submit" class="btn btn-secondary">Reset</button>
                    <a href="buku_user.php" class="btn btn-danger">Kembali</a>
                </div>
            </div>  
        </form>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>