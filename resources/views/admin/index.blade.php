@extends('admin/main_admin')
@section('isi')
    <div class="container mt-5 py-5">
      <h1 class="py-5 text-secondary">  <marquee width="100%" height="60" >SELAMAT DATANG ADMIN, 3-desember 2023</marquee> 
    </h1>
    <h2>TETAP SEMANGAT UPLOAD KONTENNYA </h2>
   <div class="row mt-5">
    <h2>Link cepat</h2>
    <div class="col-md-4 my-2">
      <a href="/admin_divtikpenristek_sp">
        <button class="btn btn-success px-5 pt-2">Super admin</button>
      </a>
    </div>
    <div class="col-md-4 my-2">
      <a href="/admin_divtikpenristek_berita">
        <button class="btn btn-warning px-5 py-2">Upload Berita</button> 
      </a>
    </div>
    <div class="col-md-4 my-2">
      <a href="/admin_divtikpenristek_dokumentasi">
        <button class="btn btn-danger px-5 py-2" > Upload dokumentasi</button>
      </a>
    </div>
   
   </div>
    </div>
@endsection