@extends('layout.template_layout')

@section('container')
    <form class="needs-validation" action="{{ url('pegawai') }}" method="POST">

        @csrf
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name..." required>
      </div>

      <div class="col-md-4" style="margin-top: 20px; margin-bottom: 20px;">
        <label for="validationCustom02" class="form-label">Jabatan</label>
        <select name="jabatan_id" id="" class="form-select" aria-label="Default select example">
            @foreach ($dataJabatan as $item)
                <option value="{{$item->id}}">{{ $item->jabatan }}</option>
            @endforeach
        </select>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" placeholder="Jl Perum..." required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tgl_lahir" placeholder="TglLahir..." required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">No Telepon</label>
        <input type="number" class="form-control" name="no_telepon" placeholder="number..." required>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </form>
@endsection