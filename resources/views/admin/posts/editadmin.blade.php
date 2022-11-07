@extends('.admin.dashboard')
@section('konten')
<div class="container mt-5">
    <div class="text-center mb-5">
        <h2>EDIT AKUN</h2>
    </div>

    <form class="row g-3" method="POST" action="/admin/editadmin">
        @csrf
            <div class="col-md-6 mt-3">
              <label class="form-label">Id User</label>
              <input type="text" class="form-control" name="id" value="{{$data->id}}" readonly>
            </div>
            <div class="col-md-6 mt-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{$data->email}}">
              </div>
            <div class="col-12 mt-3">
              <label class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama" value="{{$data->nama}}">
            </div>
            <div class="col-md-6 mt-3">
              <label class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control" name="tgl" value="{{$data->tgl_lahir}}">
            </div>
            <div class="col-12 mt-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="{{$data->alamat}}">
              </div>
              <div class="col-12 mt-3">
                <label class="form-label">No Hp</label>
                <input type="text" class="form-control" name="nohp" value="{{$data->no_hp}}">
              </div>
            <div class="col-md-4 mt-3">
              <label for="inputState" class="form-label">Level Acount</label>
              <select id="inputState" name="level" class="form-control">
                <option selected value="{{$data->level_user}}">{{$data->level_user}}</option>
                <option value="user">user</option>
                <option value="admin">admin</option>

            </select>
            </div>

            <div class="col-12 mt-3">
                <input type="submit" class="btn btn-success btn-lg btn-block" value="Simpan">
            </div>
  </form>
  <a type="button" class="btn btn-danger btn-lg btn-block mt-2" href="/admin/admin">Cancel</a>
</div>

@endsection
