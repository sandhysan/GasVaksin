@extends('user.master')

@section('konten')
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


            @isset($hasil)

            <h5 class="wow fadeInDown">Tempat ditemukan</h5>
            <a href="#" class="link-card" data-toggle="modal" data-target="#exampleModal{{ $hasil -> id }}">
                <div class="card shadow wow fadeInDown mb-5">
                    <div class="card-header d-flex justify-content-between">
                        <h4>Provinsi {{ $hasil -> provinsi }}</h4>
                        <h5>ID: {{ $hasil -> id }}</h5>
                    </div>
                    <div class="card-body">
                        <table>
                            <tr>
                                <td class="card-text">Tempat</td>
                                <td>:</td>
                                <td>{{$hasil -> nama_tempat}}</td>
                            </tr>
                            <tr>
                                <td class="card-text">Alamat</td>
                                <td>:</td>
                                <td>{{ $hasil -> alamat_tempat }}</td>
                            </tr>
                            <tr>
                                <td class="card-text">Link Maps</td>
                                <td>:</td>
                                <td><a href="{{ $hasil -> link_lokasi }}" target="_blank">{{ $hasil -> link_lokasi }}</a> </td>
                            </tr>
                            <tr>
                                <td class="card-text">Tanggal pelaksanaan</td>
                                <td>:</td>
                                <td>{{ $hasil -> tanggal }}</td>
                            </tr>
                            <tr>
                                <td class="card-text">Waktu Pelaksanaan</td>
                                <td>:</td>
                                <td>{{ $hasil -> jam }} </td>
                            </tr>
                            <tr>
                                <td class="card-text">Kuota</td>
                                <td>:</td>
                                <td>{{ $hasil -> kuota }} </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </a>
            <hr>
            <div class="modal fade" id="exampleModal{{ $hasil -> id }}" tabindex="-1" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                <div class="modal-dialog" style="z-index: 1">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a href="#" class="navbar-brand"><img src="../assets/img/LogoBlack.png" width="150" alt=""></a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Anda mendaftar di privinsi {{ $hasil -> provinsi }} (ID: {{ $hasil -> id }})
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <a href="/daftar/{{ $hasil -> id }}" class="btn btn-vaksin">Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>

            @endisset
            @if (session('daftar'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Ada yang salah!</strong> {{ session('daftar') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
            @endif
            @if (session('kosong'))
            <div class="text-center mt-5 mb-5 wow fadeInUp">
                <h1 class="bi bi-emoji-frown"></h1>

                <h3 class="title-section">{{ session('kosong') }}</h3>
            </div>
            @else
                @foreach ($tempat as $item)
                <a href="#" class="link-card" data-toggle="modal" data-target="#exampleModal{{ $item -> id }}">
                    <div class="card shadow wow fadeInDown mb-4">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Provinsi {{ $item -> provinsi }}</h4>
                            <h5>ID: {{ $item -> id }}</h5>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td class="card-text">Tempat</td>
                                    <td>:</td>
                                    <td>{{$item -> nama_tempat}}</td>
                                </tr>
                                <tr>
                                    <td class="card-text">Alamat</td>
                                    <td>:</td>
                                    <td>{{ $item -> alamat_tempat }}</td>
                                </tr>
                                <tr>
                                    <td class="card-text">Link Maps</td>
                                    <td>:</td>
                                    <td><a href="{{ $item -> link_lokasi }}" target="_blank">{{ $item -> link_lokasi }}</a> </td>
                                </tr>
                                <tr>
                                    <td class="card-text">Tanggal pelaksanaan</td>
                                    <td>:</td>
                                    <td>{{ $item -> tanggal }}</td>
                                </tr>
                                <tr>
                                    <td class="card-text">Waktu Pelaksanaan</td>
                                    <td>:</td>
                                    <td>{{ $item -> jam }} </td>
                                </tr>
                                <tr>
                                    <td class="card-text">Kuota</td>
                                    <td>:</td>
                                    <td>{{ $item -> kuota }} </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </a>
                <div class="modal fade" id="exampleModal{{ $item -> id }}" tabindex="-1" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                    <div class="modal-dialog" style="z-index: 1">
                        <div class="modal-content">
                            <div class="modal-header">
                                <a href="#" class="navbar-brand"><img src="../assets/img/LogoBlack.png" width="150" alt=""></a>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Anda mendaftar di privinsi {{ $item -> provinsi }} (ID: {{ $item -> id }})
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <a href="/daftar/{{ $item -> id }}" class="btn btn-vaksin">Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif


        <br>
            {{ $tempat->links() }}
        </div> <!-- .container -->
    </div> <!-- .page-section -->
@endsection

