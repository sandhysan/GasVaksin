
    @extends('user.master')
    @section('konten')
        <div class="page-section" id="riwayat">
            <div class="container">
                <div class="text-center wow fadeInUp">
                    <h2 class="title-section">Riwayat Vaksinasi</h2>
                    <div class="divider mx-auto"></div>
                </div>
                @foreach ($data as $item)
                    <div class="card mb-3 container" style="max-width: 100%;">
                        <div class="row g-0">
                            <div class="col-md-4 rounded-left bg-biru wow fadeInUp">
                                <div class="card-body">
                                <h4 class="card-title">Vaksin tahap {{ $item->tempat->tahap}}</h4>
                                <p class="card-text"><small>{{ $item->status}} vaksin</small></p>
                                <p class="card-text"><small>No Peserta {{ $item->id}}</small></p>
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
                                        <td><h5 class="card-title">&nbsp; {{ $item->tempat->nama_tempat}}&nbsp;(ID : {{ $item->tempat_id}})</h5></td>
                                    </tr>
                                    <tr>
                                        <td><h5 class="bi bi-geo-alt-fill"></h5></td>
                                        <td> <p class="card-text">&nbsp; {{ $item->tempat->nama_tempat}}</p></td>
                                    </tr>
                                    <tr>
                                        <td><h5 class="bi bi-calendar-event-fill"></h5></td>
                                        <td> <h5 class="card-title">&nbsp; {{ $item->tempat->tanggal}}</h5></td>
                                    </tr>

                                </table>
                                @if ($item->status == 'sudah')
                                    <a href="/sertif/{{ $item->id}}"><h5 class="card-title pt-3"><i class="bi bi-printer-fill"></i> Prints</h5></a>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> <!-- .container -->
        </div> <!-- .page-section -->
    @endsection



