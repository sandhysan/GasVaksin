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
                    Informasi <a href="/admin/inputinfo" class="btn btn-primary active"  aria-pressed="true">+ TAMBAH DATA</a>
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">user_id </th>
                                <th class="text-center">judul</th>
                                <th class="text-center">potongan_konten</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($info as $item)
                        <tr>
                            <td class="text-center">{{$item->id}}</td>
                            <td class="text-center">{{$item->user_id}}</td>
                            <td class="text-center">{{$item->judul}}</td>
                            <td class="text-center">{{$item->potongan_konten}}</td>
                            <td class="text-center"><a class="btn btn-warning" href="/editinfo/{{$item->id}}" role="button">Edit</a></td>
                            <td class="text-center"><a class="btn btn-outline-danger" href="/admin/info/delete/{{$item->id}}" role="button">Hapus</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $info->links() }}
        </div>
    </div>
@endsection
