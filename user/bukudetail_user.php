<?php
include("../koneksi.php");

$id = mysqli_real_escape_string($koneksi, $_GET['id']);
$query = mysqli_query($koneksi, "SELECT buku. *, kategori.kategori 
FROM buku
INNER JOIN kategori ON buku.id_kategori = kategori.id_kategori WHERE buku.id_buku=$id;");
$buku =mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('/assets/image1.png')}}">
    <title>MoodReads</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
</head>
<body>
<nav style="background-color: #525CEB;height:60px">
  <div class="container-fluid d-flex" style="justify-content: space-between;">
    <div class="mt-3" style="font-size: 20px; font-weight:bold;">
      <a class="navbar-brand ms-5 text-white" href="#">
        MoodReads
      </a>
    </div>
    <div class="mt-3" style="display:flex; justify-content:end; align-items:right;">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" style="color: #fff;" class="bi bi-person-circle me-5" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
      </svg>
    </div>
  </div>
</nav>

    <div class="d-flex gap-5 justify-content-start mt-4">

        <div class="d-flex mt-5 px-5 align-items-center" style="width: 400px ">
            <div>
            <img src="../assets/upload/<?php echo $buku['cover'];?>" class="img-thumbnail" alt="...">
                <div class="d-flex ">
                    <a href="pinjamtambah.php?id=<?php echo $buku['id_buku'];?>';">Pinjam Buku</a>
                </div>
                </div>
            </div>
        </div>  


    <div class="detailbuku px-5 mt-5">
        <h3><?php echo $buku['judul'];?></h3>
        <p><?php echo $buku['penulis'];?></p>
        <h3>Deskripsi Buku</h3>
        <p style="width: 500px;"><?php echo $buku['deskripsi'];?></p>
        <h4>Ulasan</h4>
        <br>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Tulis Komentar</label>
            <input class="btn btn-primary mt-3" type="submit" value="Kirim">
        </div>
    </div>

    <div class="container d-flex px-5" style="margin-top: 75px">


        <!-- <table class="tabel mt-5">
            <tbody>
                <tr>
                    <th><h3>Detail Buku</h3></th>
                </tr>
                <tr>
                    <th>Tanggal Terbit</th>
                    <td>25 Oktober 2017</td>
                </tr>
                <tr>
                    <th>Penerbit</th>
                    <td>Kepustakaan Populer Gramedia</td>
                </tr>
                <tr>
                    <th>Penulis</th>
                    <td>Leila S. Chudori</td>
                </tr>
                <tr>
                    <th>Kategori</th>
                    <td>Fiksi</td>
                </tr>
                <tr>
                    <th>Jumlah Halaman</th>
                    <td>394</td>
                </tr>
                <tr>
                    <th>Stok</th>
                    <td>8</td>
                </tr>
            </tbody>
        </table> -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>