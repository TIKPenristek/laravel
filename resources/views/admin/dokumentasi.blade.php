@extends('admin/main_admin')
@section('isi')
   <div class="container mt-5 pt-5">
    <h2 class=" pt-5">Data dokumentasi</h2>
    <table class="table ">
      <thead class="table-danger">
        <tr>
          <th scope="col">no</th>
          <th scope="col">Nama dokumentasi</th>
          <th scope="col">Keterangan</th>
          <th scope="col">foto</th>
          <th scope="col">aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dokumentasi as $dokumen)
            
        <tr class="">
          <th scope="row">1</th>
          <td valign=middle>{{ $dokumen["nama_dokumentasi"] }}</td>
          <td valign=middle>{{ $dokumen["keterangan_dokumentasi"] }}</td>
          <td><img src="/img/dokumentasi/{{ $dokumen["foto"] }}" width="100" alt=""></td>
          <td valign=middle>
            <a href=""><button class="btn btn-warning mx-2">Ubah</button></a>
            <a href=""><button class="btn btn-danger">Hapus</button></a>
          </td>
        </tr>
        
        @endforeach
      </tbody>
    </table>
   </div>
@endsection