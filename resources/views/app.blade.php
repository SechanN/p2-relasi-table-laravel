@extends('layout.template_layout')

@section('container')
    <a href="{{  url('/pegawai/create')  }}">Tambah Pegawai</a>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">No</th>`
            <th scope="col">Name</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">No Telepon</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($dataPegawai as $item)   
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->jabatan->jabatan }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->tgl_lahir }}</td>
                    <td>{{ $item->no_telepon }}</td>
                </tr>
            @empty
                  <h1>Data tidak ada</h1>
            
            @endforelse
        </tbody>
    </table>
@endsection