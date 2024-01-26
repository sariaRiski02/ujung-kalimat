
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/style/responsive_navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.tiny.cloud/1/bth9at18te05sd5cl59b9z4gd8ms7nveieayyi9hwtj9j05f/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
    <title>Uk-Blog</title>
    
</head>
<body>

<div id="contain" class="fixed-top bg-white">
  <nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid">
      <a href="/">
        <picture class="d-flex align-items-center">
          <img src="/pictures/logo.png" class="" width="50px" alt="">
        </picture>
      </a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/beranda">Beranda</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="/blog">
              Blog
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/penulis">Penulis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kategori">Kategori</a>
          <li class="nav-item">
            <a class="nav-link" href="/kontak">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tentang">Tentang</a>
          </li>
          </li>
        </ul>
        <div class="d-flex align-items-center gap-3">
          <a href="/nulis" class="btn btn-outline-dark d-flex align-items-center">
            <i class="bi bi-plus fs-6"></i>
            <span>Nulis Yuk!</span>
          </a>
          
          {{-- <a href="/signin" class="btn btn-outline-dark">Masuk</a> --}}

          <a href="/profil">
            <picture>
              <img src="/pictures/logo.png" alt="author" class="rounded-circle border-dark" width="35px">
            </picture>
          </a>
        </div>
      </div>
    </div>
  </nav>
</div>