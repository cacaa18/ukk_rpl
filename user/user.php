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
<nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand ms-5 judul" href="#">
      <img src="assets/img/image1.png"alt="Logo" width="40" height="30" class="d-inline-block align-text-top">
      MoodReads
    </a>
    <form action="{{ url('logout') }}" method="POST">
      @csrf
      <button type="submit"> Logout </button>
  </form>

    
    <div class="prof justify-content-center d-flex align-items-center">
      <div>
        <div class="profil"></div>
        <img src="{{asset('/assets/bulat.svg')}}" alt="" width="30px" height="30px" class="mt-2">
        <div class="nama">
            <P>Nazsya Rahma</P>
            <P>User</P>

        </div>
    </div>
</div>
</nav>

<div class="d-flex justify-content-evenly  mt-4 align-items-center">
    <div class="Kategori ">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Kategori
        </button>
        <ul class="dropdown-menu">
          <li><button class="dropdown-item" type="button">Novel</button></li>
          <li><button class="dropdown-item" type="button">Fiksi</button></li>
          <li><button class="dropdown-item" type="button">Pengetahuan</button></li>
          <li><button class="dropdown-item" type="button">Karya Ilmiah</button></li>
        </ul>
      </div>
      <h1 class="fs-6">Koleksi</h1>
      <h1 class="fs-6">Peminjaman</h1>
</div>

<div class="d-flex flex-lg-row justify-content-evenly">

    <div class="d-flex  mt-5 align-items-center">
        <div>
        <img src="{{asset('/assets/laut.jpg')}}" class="img-thumbnail" width="200" alt="...">
            <div class="text-wrap d-flex flex-md-column gap-2" style="">
            <p class="mb-0 fs-4">Laut Bercerita</p>
            <p class="mb-0 text-secondary">Fiksi</p>
            <p class="mb-0 text-secondary">By: Leila S. Chudori</p>


            <div>
                <img src="{{asset('/assets/star.svg')}}" class="img" width="20" alt="...">
                <img src="{{asset('/assets/star.svg')}}" class="img" width="20" alt="...">
                <img src="{{asset('/assets/star.svg')}}" class="img" width="20" alt="...">
                <img src="{{asset('/assets/star.svg')}}" class="img" width="20" alt="...">
                <img src="{{asset('/assets/star.svg')}}" class="img" width="20" alt="...">
            </div>
            <div>
            <button type="button" class="btn btn-primary btn-sm">Pinjam</button>
            <button type="button" class="btn btn-secondary btn-sm ms-5 ">Koleksi</button>
            </div>
            </div>
        </div>
    </div>
    <div class="d-flex  mt-5 align-items-center">
        <div>
        <img src="{{asset('/assets/laut.jpg')}}" class="img-thumbnail" width="200" alt="...">
        <div class="text-wrap d-flex flex-column gap-2" style="">
            <p class="mb-0 fs-4">Laut Bercerita</p>
            <p class="mb-0 text-secondary">Fiksi</p>
            <p class="mb-0 text-secondary">By: Leila S. Chudori</p>
            <div>
                <img src="{{asset('/assets/star.svg')}}" class="img" width="20" alt="...">
                <img src="{{asset('/assets/star.svg')}}" class="img" width="20" alt="...">
                <img src="{{asset('/assets/star.svg')}}" class="img" width="20" alt="...">
                <img src="{{asset('/assets/star.svg')}}" class="img" width="20" alt="...">
                <img src="{{asset('/assets/star.svg')}}" class="img" width="20" alt="...">
            </div>
            <div>
            <button type="button" class="btn btn-primary btn-sm">Pinjam</button>
            <button type="button" class="btn btn-secondary btn-sm ms-5 ">Koleksi</button>
            </div>
        </div>
      </div>
    </div>

        <div class="d-flex flex-md-column mt-5 align-items-center">
        <div>
        <img src="{{asset('/assets/laut.jpg')}}" class="img-thumbnail" width="200" alt="...">
        <div class="text-wrap d-flex flex-column gap-2" style="">
            <p class="mb-0 fs-4">Laut Bercerita</p>
            <p class="mb-0 text-secondary">Fiksi</p>
            <p class="mb-0 text-secondary">By: Leila S. Chudori</p>
            <div>
                <img src="{{asset('/assets/star.svg')}}" class="img" width="20" alt="...">
                <img src="{{asset('/assets/star.svg')}}" class="img" width="20" alt="...">
                <img src="{{asset('/assets/star.svg')}}" class="img" width="20" alt="...">
                <img src="{{asset('/assets/star.svg')}}" class="img" width="20" alt="...">
                <img src="{{asset('/assets/star.svg')}}" class="img" width="20" alt="...">
            </div>
            <div>
            <button type="button" class="btn btn-primary btn-sm">Pinjam</button>
            <button type="button" class="btn btn-secondary btn-sm ms-5 ">Koleksi</button>
            </div>
        </div>
      </div>
    </div>
</div>

<br>
<br>
<br>

<footer class="container-fluid d-flex align-items-center"  style="background:#525CEB; padding: 50px 122px">
  <img src={{asset('assets/image1.png')}} alt="">
  <div class="footerbawah">
    <p>MoodReads</p>
  </div>
  <div class="footerbawah2 ms-auto">
    <ul class="navbar-nav d-flex flex-row gap-5">
      <li><a href="" class="nav-link">About</a></li>
      <li><a href="" class="nav-link">Home</a></li>
      <li><a href="" class="nav-link">Career</a></li>
      <li><a href="" class="nav-link">Help</a></li>
    </ul>
    <p>moodreads@gmail.com</p>
  </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>