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
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky fixed-top" data-offset="500">
            <div class="container">
                <a href="#" class="navbar-brand"><img src="../assets/img/LogoBlack.png" width="150" alt=""></a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto">

                        @auth
                                <li class="nav-item">
                                    <a class="nav-link" data-role="smoothscroll" href="#home">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-role="smoothscroll" href="#daftar">Daftar peserta</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-role="smoothscroll" href="#riwayat">Riwayat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-role="smoothscroll" href="#informasi">Informasi</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" data-role="smoothscroll" href="#kontak">Contact</a>
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

        <div class="container-fluid" id="home">
            <div class="page-banner home-banner pt-5 wrap bg-absrak"  style="height: 700px;">
                <div class="row align-items-center flex-wrap-reverse h-100">
                    <div class="col-md-6 py-5 wow fadeInLeft">
                        <h1 class="mb-4">Gas Vaksin & Cegah Covid-19</h1>
                        <p class="text-lg text-grey mb-5">Selamat datang di website resmi GassVaksin. Anda bisa melakukan pendaftaran vaksinasi di daerah yang sudah di tentukan oleh GasVaksin dan juga anda bisa melakukan cek riwayat vaksin anda sebagai bukti anda sudah melakukan vaksin</p>

                        @auth
                            <a href="/daftar" class="btn btn-vaksin pr-3 shadow p-3 mb-5 bg-body rounded">Daftar Sekarang</a>
                            @else
                            <a href="/login" class="btn btn-vaksin pr-3 shadow p-3 mb-5 bg-body rounded">Login untuk daftar</a>
                        @endauth
                    </div>
                    <div class="col-md-6 py-3 wow zoomIn">
                        <div class="img-fluid text-center">
                            <img src="../assets/img/Doctors.svg" width="500" alt="">
                        </div>
                    </div>
                </div>
            <a href="#daftar" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
            </div>
    </header>

    @auth
    <div class="page-section"  id="daftar">
        <div class="container">
            <div class="text-center mb-5 wow fadeInUp">
                <h2 class="title-section">Pendaftaran Vaksin</h2>
                <div class="divider mx-auto"></div>
            </div>
            <form method="get" action="{{ route('searchTempat') }}" class="input-group mb-3 wow fadeInUp">
                <input type="text" name="id" id="form" class="form-control"  placeholder="Cari (Masukan ID)" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-vaksin" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
            </form>
        @isset($tempat)


        <a href="/daftar" class="link-card">
        <div   div class="card shadow wow fadeInDown">
            <div class="card-header d-flex justify-content-between">
                <h4>Provinsi : {{ $tempat-> provinsi}}</h4>
                <h5>ID : {{ $tempat-> id }}</h5>
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <td class="card-text">Tempat</td>
                        <td>:</td>
                        <td>{{$tempat -> nama_tempat}}</td>
                    </tr>
                    <tr>
                        <td class="card-text">Alamat</td>
                        <td>:</td>
                        <td>{{ $tempat -> alamat_tempat }}</td>
                    </tr>
                    <tr>
                        <td class="card-text">Link Maps</td>
                        <td>:</td>
                        <td><a href="{{ $tempat -> link_lokasi }}">{{ $tempat -> link_lokasi }}</a> </td>
                    </tr>
                    <tr>
                        <td class="card-text">Tanggal pelaksanaan</td>
                        <td>:</td>
                        <td>{{ $tempat -> tanggal }} </td>
                    </tr>
                    <tr>
                        <td class="card-text">Waktu Pelaksanaan</td>
                        <td>:</td>
                        <td>{{ $tempat -> jam }} </td>
                    </tr>
                    <tr>
                        <td class="card-text">Kuota</td>
                        <td>:</td>
                        <td>{{ $tempat -> kuota }} </td>
                    </tr>
                </table>
            </div>
        </div>
        </a>
        @else
        <div class="text-center mt-5 mb-5 wow fadeInUp">
            <h1 class="bi bi-emoji-frown"></h1>

            <h3 class="title-section">Maaf saat ini tempat belum tersedia</h3>
        </div>
        @endisset
        <div class="mt-5 wow fadeInUp">
            <a href="/daftar" class="btn btn-vaksin shadow">Lihat Lengkap</a>
        </div>
    </div> <!-- .container -->
    </div> <!-- .page-section -->


    <div class="page-section bg-light" id="riwayat">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <h2 class="title-section">Riwayat Vaksinasi</h2>
            <div class="divider mx-auto"></div>
        </div>
        @isset($riwayat)
        <div class="card mb-3 container" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4 rounded-left bg-biru wow fadeInUp">
                    <div class="card-body">
                    <h4 class="card-title">Vaksin tahap {{ $riwayat->tempat->tahap}}</h4>
                    <p class="card-text"><small>{{ $riwayat->status}} vaksin</small></p>
                    <p class="card-text"><small>No Peserta {{ $riwayat->id}}</small></p>
                    </div>
                </div>
                <div class="col-md-8 rounded-right bg-biru-muda wow fadeInUp">
                    <div class="card-body">
                    <table>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><h5 class="bi bi-building"></h5></td>
                            <td><h5 class="card-title">&nbsp; {{ $riwayat->tempat->nama_tempat}}&nbsp;(ID : {{ $riwayat->tempat_id}})</h5></td>
                        </tr>
                        <tr>
                            <td><h5 class="bi bi-geo-alt-fill"></h5></td>
                            <td> <p class="card-text">&nbsp; {{ $riwayat->tempat->nama_tempat}}</p></td>
                        </tr>
                        <tr>
                            <td><h5 class="bi bi-calendar-event-fill"></h5></td>
                            <td> <h5 class="card-title">&nbsp; {{ $riwayat->tempat->tanggal}}</h5></td>
                        </tr>

                    </table>
                    @if ($riwayat->status == 'sudah')

                    <a href="/sertif/{{ $riwayat->id}}"><h5 class="card-title pt-3"><i class="bi bi-printer-fill"></i> Prints</h5></a>
                    @endif


                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="text-center mt-5 mb-5 wow fadeInUp">
            <h1 class="bi bi-emoji-frown"></h1>

            <h3 class="title-section">Anda belum mendaftar sebagai peserta</h3>
        </div>
        @endisset


        <div class="mt-5 wow fadeInUp">
            <a href="/riwayat" class="btn btn-vaksin shadow">Lihat Lengkap</a>
        </div>
    </div> <!-- .container -->
    </div> <!-- .page-section -->

    @else
    <div class="page-section bg-light">
        <div class="container">
            <div class="text-center wow fadeInUp">
            <div class="subhead">Layanan</div>
            <h2 class="title-section">Bagaimana kami membantu anda</h2>
            <div class="divider mx-auto"></div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                <div class="features">
                    <div class="header mb-3">
                        <span class="bi bi-emoji-smile"></span>
                    </div>
                    <h5>Penyelenggara</h5>
                    <p>Kami merupakan salah satu yang bukan penyelenggara vaksinasi</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                <div class="features">
                    <div class="header mb-3">
                        <span class="bi bi-pencil-square"></span>
                    </div>
                    <h5>Pendaftaran vaksin</h5>
                    <p>Anda bisa melakukan pendaftaran peserta vaksin</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                <div class="features">
                <div class="header mb-3">
                    <span class="bi bi-calendar3"></span>
                </div>
                <h5>Riwayat vaksin</h5>
                <p>Anda bisa melakukan cek riwayat vaksin yang anda lakukan</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                <div class="features">
                    <div class="header mb-3">
                        <span class="bi bi-file-earmark-richtext-fill"></span>
                    </div>
                    <h5>Informasi</h5>
                    <p>Kami menyediakan informasi mengenai vaksin yang digunakan</p>
                </div>
            </div>
        </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->
    @endauth



  <!-- Blog -->
  <div id="informasi" class="page-section">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">Our Blog</div>
        <h2 class="title-section">Informasi Tentang Vaksin</h2>
        <div class="divider mx-auto"></div>
      </div>

      <div class="row mt-5">
        @foreach ($blogs as $item)
        <div class="col-lg-4 py-3 wow fadeInUp">
            <div class="card-blog">
                <div class="header">
                    <div class="post-thumb">
                        <img src="../assets/img/sinovac.jpg" alt="">
                    </div>
                </div>
                <div class="body">
                    <h5 class="post-title"><a href="{{ route('informasi', ['id'=>$item->id]) }}">{{ $item->judul }}</a></h5>
                    <div class="post-date">Posted on {{ $item->created_at->isoFormat('d-m-Y') }}</a></div>
                    <div class="post-date">By {{ $item->user->nama }}</a></div>
                </div>
            </div>
        </div>

        @endforeach

        <div class="col-12 mt-4 text-center wow fadeInUp">

            @auth
             <a href="/blog" class="btn btn-vaksin">View More</a>
             @else
             <a href="/login" class="btn btn-vaksin">View More</a>
            @endauth

        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer id="kontak" class="page-footer bg-image" style="background-image: url(../assets/img/world_pattern.svg);">
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
            <li><a  data-role="smoothscroll" href="#daftar">Daftar</a></li>
            <li><a  data-role="smoothscroll" href="#riwayat">Riwayat</a></li>
            <li><a  data-role="smoothscroll" href="#informasi">Informasi</a></li>
          </ul>
        </div>
      </div>

      <p class="text-center" id="copyright">Copyright &copy; 2021  <a href="/beranda" target="_blank">GasVaksin</a> All Rights Reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>
