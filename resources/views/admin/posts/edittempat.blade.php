@extends('.admin.dashboard')
@section('konten')
<div class="container mt-5">
    <div class="text-center mb-5">
        <h2>EDIT TEMPAT VAKSIN</h2>
    </div>

    <form method="POST" action="/admin/edittempat">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control"  name="id" value="{{$data->id}}" readonly>
          </div>
    <div class="form-group">
        <input type="text" class="form-control"  name="provinsi" value="{{$data->provinsi}}">
      </div>

      <div class="form-group">
        <input type="text" class="form-control"  name="nama" value="{{$data->nama_tempat}}">
      </div>

      <div class="form-group">
        <input type="text" class="form-control"  name="alamat" value="{{$data->alamat_tempat}}">
      </div>

      <div class="form-group">
        <input type="text" class="form-control"  name="link" value="{{$data->link_lokasi}}">
      </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <input type="date" class="form-control" name="tanggal" value="{{$data->tanggal}}">
                </div>
                <div class="col">
                    <input type="time" class="form-control" name="jam" value="{{$data->jam}}">
                </div>
             </div>
        </div>

      <div class="form-group">
        <input type="number" class="form-control"  name="kuota" value="{{$data->kuota}}">
      </div>

      <div class="form-group">
        <input type="number" class="form-control"  name="tahap" value="{{$data->tahap}}">
      </div>

    <input type="submit" class="btn btn-success btn-lg btn-block" value="Simpan">

  </form>
  <a type="button" class="btn btn-danger btn-lg btn-block mt-2" href="/admin/tempat">Cancel</a>
</div>

@endsection
