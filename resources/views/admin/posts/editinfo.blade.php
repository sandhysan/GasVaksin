@extends('.admin.dashboard')
@section('konten')
<div class="container mt-5">
    <div class="text-center mb-5">
        <h2>EDIT INFORMASI</h2>
    </div>

    <form method="POST" action="/admin/editinfo">
        @csrf
        <div class="form-group">
            <input type="hidden" class="form-control"  name="id" value="{{$data->id}}">
          </div>
    <div class="form-group">
        <input type="text" class="form-control"  name="judul" value="{{$data->judul}}">
      </div>
      <div class="form-group">
          <textarea class="form-control"  cols="30" rows="2" name="potongan">{{$data->potongan_konten}}</textarea>
      </div>
      <div class="form-group">
        <textarea class="form-control"  cols="30" rows="10" name="konten">{{$data->konten}}</textarea>
    </div>
    <input type="submit" class="btn btn-success btn-lg btn-block" value="Simpan">

  </form>
  <a type="button" class="btn btn-danger btn-lg btn-block mt-2" href="/admin/info">Cancel</a>
</div>

@endsection
