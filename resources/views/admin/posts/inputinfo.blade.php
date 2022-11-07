@extends('.admin.dashboard')
@section('konten')
<div class="container mt-5">
    <div class="text-center mb-5">
        <h2>INPUT INFORMASI</h2>
    </div>

    <form method="POST" action="/admin/inputinfo">
        @csrf
    <div class="form-group">
        <input type="text" class="form-control"  name="judul" placeholder="Masukan Judul Informasi">
      </div>
      <div class="form-group">
          <textarea class="form-control"  cols="30" rows="2" name="potongan" placeholder="Potongan Konten"></textarea>
      </div>
      <div class="form-group">
        <textarea class="form-control"  cols="30" rows="10" name="konten" placeholder="Konten"></textarea>
    </div>
    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Tambah">

  </form>
  <a type="button" class="btn btn-danger btn-lg btn-block mt-2" href="/admin/info">Cancel</a>
</div>

@endsection
