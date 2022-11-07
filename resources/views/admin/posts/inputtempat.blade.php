@extends('.admin.dashboard')
@section('konten')
<div class="container mt-5">
    <div class="text-center mb-5">
        <h2>INPUT TEMPAT VAKSIN</h2>
    </div>

    <form method="POST" action="/admin/inputempat">
        @csrf
    <div class="form-group">
        <input type="text" class="form-control"  name="provinsi" placeholder="Masukan Provinsi">
      </div>

      <div class="form-group">
        <input type="text" class="form-control"  name="nik" placeholder="Masukan NIK penanggung jawab acara">
      </div>

      <div class="form-group">
        <input type="text" class="form-control"  name="nama" placeholder="Masukan Nama Tempat">
      </div>

      <div class="form-group">
        <input type="text" class="form-control"  name="alamat" placeholder="Masukan Alamat">
      </div>

      <div class="form-group">
        <input type="text" class="form-control"  name="link" placeholder="Masukan Link Lokasi Vaksin">
      </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <input type="date" class="form-control" name="tanggal">
                </div>
                <div class="col">
                    <input type="time" class="form-control" name="jam">
                </div>
             </div>
        </div>

      <div class="form-group">
        <input type="number" class="form-control"  name="kuota" placeholder="Masukan Kuota">
      </div>

      <div class="form-group">
        <input type="number" class="form-control"  name="tahap" placeholder="Masukan Tahap">
      </div>

    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Tambah">

  </form>
  <a type="button" class="btn btn-danger btn-lg btn-block mt-2" href="/admin/tempat">Cancel</a>
</div>

@endsection
