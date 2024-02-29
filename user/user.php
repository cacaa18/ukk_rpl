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

<div class="d-flex justify-content-evenly  mt-4 mb-5 align-items-center">
    <div class="Kategori ">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Kategori
        </button>
        <ul class="dropdown-menu">
          <?php while ($category = mysqli_fetch_assoc($queryCategory)) : ?>
          <li><button class="dropdown-item" type="button"><?= $category['kategori'] ;?></button></li>
    <?php endwhile ?>
        </ul>
      </div>
      <h1 class="fs-6">Koleksi</h1>
      <a href="pinjam.php">Peminjaman</a>
    </div>

<div class="d-flex flex-lg-row justify-content-evenly">

  <?php while ($buku = mysqli_fetch_assoc($query)) : ?>
    <div class="">
        <img src='../assets/upload/<?php echo $buku['cover'] ?>'class='img-thumbnail' width='200' alt='...'>
            <div class="text-wrap d-flex flex-md-column gap-2" style="">
            <p class="mb-0 fs-4"><?php echo $buku['judul'];?></p>
            <p class="mb-0 text-secondary"><?php echo $buku['id_kategori'];?></p>
            <p class="mb-0 text-secondary"><?php echo $buku['penulis'];?></p>
            <div>
              <a style="text-decoration:none" href='bukudetail_user.php?id=<?php echo $buku['id_buku']; ?>'>Lihat</a>
            </div>
            </div>
          </div>
            <?php endwhile ?>

</div>

<br>
<br>
<br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>