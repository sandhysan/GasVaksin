<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="registrasiAsset/fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="registrasiAsset/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="registrasiAsset/css/style.css">

    <link rel="icon" type="image/png" href="assets/img/injection.png"/>

    <title>Registrasi</title>
    </head>
    <body>
        <div class="content">

            <div class="container">
                <div class="row align-items-stretch no-gutters contact-wrap">
                    <div class="col-md-8">
                    <div class="form h-100">
                        <h3>Registrasi pengguna baru</h3>
                        <form class="mb-5" action="/registrasi" method="post" id="contactForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group mb-5">
                                <label for="" class="col-form-label">NIK </label>
                                <input type="text" class="form-control" name="NIK" id="NIK" placeholder="Masukan NIK anda" required>
                            </div>
                            <div class="col-md-6 form-group mb-5">
                                <label for="" class="col-form-label">Nama lengkap </label>
                                <input type="text" class="form-control" name="Nama" id="Nama"  placeholder="Nama lengkap" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group mb-5">
                                <label for="" class="col-form-label">Email </label>
                                <input type="text" class="form-control" name="Email" id="Email"  placeholder="Your email" required>
                            </div>
                            <div class="col-md-6 form-group mb-5">
                                <label for="" class="col-form-label">Tanggal lahir </label>
                                <input type="date" class="form-control" name="lahir" id="lahir" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group mb-5">
                            <label for="" class="col-form-label">Alamat</label>
                            <input type="text" class="form-control" name="Alamat" id="Alamat"  placeholder="Alamat rumah saat ini" required>
                            </div>
                            <div class="col-md-6 form-group mb-5">
                            <label for="" class="col-form-label">No Tlp/HP</label>
                            <input type="text" class="form-control" name="Tlp" id="Tlp"  placeholder="Nomor yang bisa di hubungi" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group mb-5">
                                <label for="message" class="col-form-label">Password</label>
                                <input type="password" class="form-control" id="Password" name="Password" placeholder="Masukan password (6 digit)" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group mb-5">
                                <label for="message" class="col-form-label">Konfirmasi password</label>
                                <input type="password" class="form-control" id="Konfirmasi" name="Konfirmasi" placeholder="Masukan password" required>
                            </div>
                        </div>
                        <div style="display: none"><input type="text" value="user" name="level"></div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                            <input type="submit" value="Daftar" name="daftar" class="btn btn-primary rounded-0 py-2 px-4">
                            <span class="submitting"></span>
                            </div>
                        </div>
                        </form>

                        <div id="form-message-warning mt-4"></div>
                        <div id="form-message-success">
                        thank you!
                        </div>

                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="contact-info h-100">
                        <h3>Hubungi kami !</h3>
                        <p class="mb-5">Jika anda mengalami kendala, anda bisa hubungi kami lewat kontak berikut.</p>
                        <ul class="list-unstyled">
                        <li class="d-flex">
                            <span class="wrap-icon icon-room mr-3"></span>
                            <span class="text"> Bukit JImbaran, Badung, Bali</a> </span>
                        </li>
                        <li class="d-flex">
                            <span class="wrap-icon icon-phone mr-3"></span>
                            <span class="text">+1 (291) 939 9321</span>
                        </li>
                        <li class="d-flex">
                            <span class="wrap-icon icon-envelope mr-3"></span>
                            <span class="text" > <a href="mailto:dwipadma87@gmail.com?subject=Kendala registrasi">GasVaksin Email</a> </span>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- <script src="registrasiAsset/js/jquery-3.3.1.min.js"></script> --}}
        <script src="registrasiAsset/js/popper.min.js"></script>
        <script src="registrasiAsset/js/bootstrap.min.js"></script>
        <script src="registrasiAsset/js/jquery.validate.min.js"></script>
        <script src="registrasiAsset/js/main.js"></script>

    </body>
</html>

