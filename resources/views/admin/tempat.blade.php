@extends('admin.dashboard')
@section('konten')
    {{-- Tables --}}
    <div class="row">
        <div class="col-md-12">
            @if (session('pesan'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hasil aksi</strong> {{session('pesan')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
            <div class="main-card mb-3 card">
                <div class="card-header d-flex justify-content-between">
                    Tempat Vaksin <a href="/admin/inputtempat" class="btn btn-primary active"  aria-pressed="true">+ TAMBAH DATA</a>
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Provinsi</th>
                                <th class="text-center">Penanggung jawab</th>
                                <th class="text-center">Nama tempat</th>
                                <th class="text-center">Alamat tempat</th>
                                <th class="text-center">Link lokasi</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Jam</th>
                                <th class="text-center">Kuota</th>
                                <th class="text-center">Tahap</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($tempat as $item)
                        <tr>
                            <td class="text-center">{{$item->id}}</td>
                            <td class="text-center">{{$item->provinsi}}</td>
                            <td class="text-center">{{$item->user_id}}</td>
                            <td class="text-center">{{$item->nama_tempat}}</td>
                            <td class="text-center">{{$item->alamat_tempat	}}</td>
                            <td class="text-center">{{$item->link_lokasi}}</td>
                            <td class="text-center">{{$item->tanggal}}</td>
                            <td class="text-center">{{$item->jam}}</td>
                            <td class="text-center">{{$item->kuota}}</td>
                            <td class="text-center">{{$item->tahap}}</td>
                            <td class="text-center"><a class="btn btn-warning" href="/edittempat/{{$item->id}}" role="button">Edit</a></td>
                            <td class="text-center"><a class="btn btn-outline-danger" href="/admin/tempat/delete/{{$item->id}}" role="button">Hapus</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $tempat->links() }}
        </div>
    </div>
@endsection
