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
                    Active Users
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Tgl lahir</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">No Telepon</th>
                                <th class="text-center">Level akses</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($user as $item)
                        <tr>
                            <td class="text-center">{{$item->id}}</td>
                            <td class="text-center">{{$item->nama}}</td>
                            <td class="text-center">{{$item->email}}</td>
                            <td class="text-center">{{$item->tgl_lahir	}}</td>
                            <td class="text-center">{{$item->alamat}}</td>
                            <td class="text-center">{{$item->no_hp}}</td>
                            <td class="text-center">{{$item->level_user}}</td>
                            <td class="text-center"><a class="btn btn-warning" href="/editadmin/{{$item->id}}" role="button">Edit</a></td>
                            <td class="text-center"><a class="btn btn-outline-danger" href="/admin/user/delete/{{$item->id}}" role="button">Hapus</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $user->links() }}
        </div>
    </div>
@endsection
