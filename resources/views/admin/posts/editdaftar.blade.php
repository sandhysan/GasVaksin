@extends('.admin.dashboard')
@section('konten')
<div class="container mt-4">
    <div class="text-center mb-5">
        <h2>EDIT PENDAFTARAN</h2>
    </div>

    <form class="row g-3" method="POST" action="/admin/editdaftar">
        @csrf
            <div class="col-md-6 mt-3">
              <label class="form-label">Id</label>
              <input type="text" class="form-control" name="id" value="{{$data->id}}" readonly>
            </div>
            <div class="col-md-6 mt-3">
                <label class="form-label">User Id</label>
                <input type="number" class="form-control" name="user" value="{{$data->user_id}}">
              </div>
            <div class="col-12 mt-3">
              <label class="form-label">Tempat Pendafataran</label>
              <input type="text" class="form-control" name="tempat" value="{{$data->tempat_id}}">
            </div>
            <div class="col-md-6 mt-3">
              <label class="form-label">Informasi Pendaftaran</label>
              <select name="informasi" class="form-control" id="">
                  @foreach ($vaksin as $item)
                      <option value="{{$item->id}}">{{$item->judul}}</option>
                  @endforeach

              </select>
            </div>
            <div class="col-md-4 mt-3">
              <label for="inputState" class="form-label">Status</label>
              <select id="inputState" name="status" class="form-control">
                <option selected value="{{$data->status}}">{{$data->status}}</option>
                <option value="belum">belum</option>
                <option value="sudah">sudah</option>
            </select>
            </div>
            <div class="col-12 mt-3">
                <input type="submit" class="btn btn-success btn-lg btn-block" value="Simpan">
            </div>
  </form>
  <a type="button" class="btn btn-danger btn-lg btn-block mt-2" href="/admin/pendaftaran">Cancel</a>
</div>

@endsection
