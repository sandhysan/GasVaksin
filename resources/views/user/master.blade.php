<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>GasVaksin</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <link rel="stylesheet" href="../assets/css/custom.css">

  <link rel="shortcut icon" href="../assets/img/injection.png">

  <!-- Boostrap links -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">


</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky fixed-top" data-offset="500" style="z-index: 2">
            <div class="container">
                <a href="#" class="navbar-brand"><img src="../assets/img/LogoBlack.png" width="150" alt=""></a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto">

                        @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="/beranda">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"  href="/daftar">Daftar peserta</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/riwayat">Riwayat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"  href="/blog">Informasi</a>
                                </li>
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                    <span class="bi bi-pin-angle-fill"></span> {{ auth()->user()->nama }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item bi bi-file-earmark-person" href="#" > Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <form action="/logout" method="POST">
                                    @csrf
                                        <button type="submit" class="dropdown-item"><li class="bi bi-box-arrow-right"> LogOut</li></button>
                                    </form>

                                </div>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="btn btn-vaksin ml-lg-2" href="/login">Login</a>
                                </li>
                        @endauth

                    </ul>
                </div>

            </div>
        </nav>


    </header>

    @yield('konten')

  <!-- Footer -->
  {{-- <footer id="kontak" class="page-footer bg-image footer" style="background-image: url(../assets/img/world_pattern.svg);">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-3 py-3">

          <h3> <img src="../assets/img/injection.png" width="40" alt=""> GasVaksin</h3>
          <p>Sistem GasVaksin merupakan sistem pendaftaran vaksinasi untuk mencegah adanya penyakit Covid-19</p>

          <div class="social-media-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#"><span class="mai-logo-instagram"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
          </div>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Contact Us</h5>
          <p>Bukit Jimbaran, Badung, Bali</p>
          <a href="#" class="footer-link">+00 1122 3344 5566</a>
          <a href="#" class="footer-link">gasvaskin@gmail.com</a>
        </div>
        <div class="col-lg-3 py-3">

        </div>
        <div class="col-lg-3 py-3">
          <h5>Footer Menu</h5>
          <ul class="footer-menu">
            <li><a href="#">Daftar</a></li>
            <li><a href="#">Riwayat</a></li>
            <li><a href="#">Informasi</a></li>
          </ul>
        </div>
      </div>

      <p class="text-center" id="copyright">Copyright &copy; 2021  <a href="https://macodeid.com/" target="_blank">GasVaksin</a> All Rights Reserved</p>
    </div>
  </footer> --}}

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
@yield('javascript')

</body>
</html>
