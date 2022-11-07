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
                    Pendaftaran
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">user_id</th>
                                <th class="text-center">tempat_id</th>
                                <th class="text-center">jenis vaksin</th>
                                <th class="text-center">status</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($daftar as $item)
                        <tr>
                            <td class="text-center">{{$item->id}}</td>
                            <td class="text-center">{{$item->user->nama}} ({{$item->user_id }})</td>
                            <td class="text-center">{{$item->tempat_id }}</td>
                            <td class="text-center">{{$item->informasi->judul }}</td>
                            <td class="text-center">{{$item->status}}</td>

                            <td class="text-center"><a class="btn btn-warning" href="/editdaftar/{{$item->id}}" role="button">Edit</a></td>
                            <td class="text-center"><a class="btn btn-outline-danger" href="/admin/daftar/delete/{{$item->id}}" role="button">Hapus</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $daftar->links() }}
        </div>
    </div>
@endsection
