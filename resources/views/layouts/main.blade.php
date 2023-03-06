<!DOCTYPE html>
<html lang="pt">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      {{-- Tags Primárias --}}
      <meta name="title" content="StrikeTattoo - Tatuaria Portuguesa Desde 2021">
      <meta name="description" content="StrikeTattoo é uma tatuaria voltada ao realismo">

      {{-- Facebook --}}
      <meta property="og:type" content="website">
      <meta property="og:url" content="http://striketattoo.com/">
      <meta property="og:title" content="StrikeTattoo - Tatuaria Portuguesa Desde 2021">
      <meta property="og:description" content="StrikeTattoo é uma tatuaria voltada ao realismo">
      <meta property="og:image" content="https://laravel.com/img/og-image.jpg">

      {{-- Twitter --}}
      <meta property="twitter:card" content="summary_large_image">
      <meta property="twitter:url" content="http://striketattoo.com/">
      <meta property="twitter:title" content="StrikeTattoo - Tatuaria Portuguesa Desde 2021">
      <meta property="twitter:description" content="StrikeTattoo é uma tatuaria voltada ao realismo">
      <meta property="twitter:image" content="https://laravel.com/img/og-image.jpg">

      {{-- TITLE --}}
      <title>@yield("title")</title>

      {{-- FAVICON --}}
      <link rel="icon" type="image/x-icon" href="/img/favicon.svg">

      {{-- FONTS --}}
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;700&family=Quicksand&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" media="screen" href="/fonts/DEATHCROW.css"/>

      {{-- STYLE --}}
      <link rel="stylesheet" href="/css/style.css">

      {{-- Bootstrap CSS --}}
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
      {{-- HEADER --}}
      <header class="position-fixed top-0 w-100">
        <nav class="navbar navbar-expand-lg bg-preto py-lg-3 py-0 quicksand">
          <div class="container position-relative">
            <a href="#" class="text-decoration-none d-lg-none d-inline-block p-2"><img src="/img/monograma1.svg" alt="Logo StrikeTatto"></a>
            <a href="#" class="text-decoration-none text-light fs-4 p-2 d-lg-none d-block" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><ion-icon name="grid-outline"></ion-icon></a>
            <div class="collapse navbar-collapse justify-content-center me-auto" id="navbarNav">
              <ul class="navbar-nav d-flex justify-content-center align-items-center gap-3">
                <li class="nav-item">
                  <a href="#home" class="text-decoration-none text-light d-inline-block nav-detalhe">Início</a>
                </li>
                <li class="nav-item">
                  <a href="#portfolio" class="text-decoration-none text-light d-inline-block nav-detalhe">Portfólio</a>
                </li>
                <li class="nav-item d-lg-inline-block d-none">
                  <a href="#home" class="text-decoration-none"><img src="/img/monograma1.svg" alt="Logo StrikeTatto"></a>
                </li>
                <li class="nav-item">
                  <a href="#sobre" class="text-decoration-none text-light d-inline-block nav-detalhe">Sobre</a>
                </li>
                <li class="nav-item">
                  <a href="#contato" class="text-decoration-none text-light d-inline-block nav-detalhe">Contato</a>
                </li>
              </ul>
              <div class="d-lg-none d-block mt-4 mb-3">
                <ul class="navbar-nav d-flex flex-row justify-content-center align-items-center gap-3">
                  <li class="nav-item">
                    <a href="#" class="text-decoration-none texto-primario d-inline-block fs-5"><ion-icon name="logo-instagram"></ion-icon></a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="text-decoration-none texto-primario d-inline-block fs-5"><ion-icon name="logo-facebook"></ion-icon></a>
                  </li>
                  <li class="nav-item">
                    <a href="tel:910-664-136" class="text-decoration-none d-flex justify-content-center align-items-center text-light px-2 py-1 borda-primaria d-inline-block rounded-2" style="background-color: #1A1305;"><ion-icon class="fs-5 texto-primario me-2" name="call-outline"></ion-icon>910 664 136</a>
                  </li>
              </div>
            </div>
            <div class="position-absolute collapse navbar-collapse justify-content-center end-0">
              <ul class="navbar-nav d-flex justify-content-center align-items-center gap-3">
                <li class="nav-item">
                  <a href="#" class="text-decoration-none texto-primario d-inline-block fs-5"><ion-icon name="logo-instagram"></ion-icon></a>
                </li>
                <li class="nav-item">
                  <a href="#" class="text-decoration-none texto-primario d-inline-block fs-5"><ion-icon name="logo-facebook"></ion-icon></a>
                </li>
                <li class="nav-item">
                  <a href="tel:910-664-136" class="text-decoration-none d-flex justify-content-center align-items-center text-light px-2 py-1 borda-primaria d-inline-block rounded-2" style="background-color: #1A1305;"><ion-icon class="fs-5 texto-primario me-2" name="call-outline"></ion-icon>910 664 136</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      {{-- CONTENT --}}
      <main>
        @yield("content")
      </main>

      {{-- FOOTER --}}
      <footer>
        <div class="bg-black">
          <div class="container py-lg-2 py-4">
            <div class="row justify-content-between align-items-center">
              <div class="col-auto d-flex justify-content-center align-items-center">
                <p class="text-light cabin text-center m-0">StrikerTattoo © 2021-<script type="text/javascript">document.write(new Date().getFullYear());</script>  | Alguns Direitos Reservados</p>
              </div>
              <div class="col-auto">
                <img src="/img/monograma1.svg" class="d-sm-block d-none" alt="">
              </div>
            </div>
          </div>
        </div>
      </footer>

      {{-- ICONS --}}
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

      {{-- JS --}}
      <script src="/js/scripts.js"></script>

      {{-- BOOTSTRAP JS --}}
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>