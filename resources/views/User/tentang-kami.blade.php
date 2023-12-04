@extends('layouts.main')
@section('isi')
 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mt-5">
  <div class="container text-center py-5 mt-5">
      <h1 class="display-2 text-white mb-4 animated slideInDown">Tentang kami</h1>
      <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item" aria-current="page">tentang kami</li>
          </ol>
      </nav>
  </div>
</div>
<!-- Page Header End -->


<!-- Fact Start -->
<div class="container-fluid  bg-danger py-5">
  <div class="container">
      <div class="row">
          <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
              <div class="d-flex counter">
                  <h1 class="me-3 text-light counter-value">10</h1>
                  <h5 class="text-white mt-1">DEMISIONER</h5>
              </div>
          </div>
          <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
              <div class="d-flex counter">
                  <h1 class="me-3 text-light counter-value">10</h1>
                  <h5 class="text-white mt-1">Badan pengurus harian</h5>
              </div>
          </div>
          <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
              <div class="d-flex counter">
                  <h1 class="me-3 text-light counter-value">300</h1>
                  <h5 class="text-white mt-1">Anggota aktif</h5>
              </div>
          </div>
          <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
              <div class="d-flex counter">
                  <h1 class="me-3 text-light counter-value">5</h1>
                  <h5 class="text-white mt-1">Prestasi tingkat nasional</h5>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Fact End -->
<!-- About Start -->
  <div class="container-fluid py-5 my-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                <div class="h-100 position-relative">
                    <img src="img/meetup.jpg" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                    <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                        <img src="img/meetup2.jpg" class="img-fluid w-100 rounded" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                <div class="flex">
                    <img src="/img/asset/logokampus.png" width="50" alt="">
                    <img src="/img/asset/logout.png" width="50" alt="">
                    <img src="/img/asset/logocom.png" width="50" alt="">
                    <img src="/img/asset/logo1.png" width="50" alt="">
                </div>
                <h1 class="text-primary mb-2">Tentang kami                        </h1>
                <h3 class="mb-4">UKM PENDIDIKAN RISET & TEKNOLOGI UT BOGOR                        </h3>
                <p>UKM Pendidikan Riset dan Teknologi adalah lembaga yang memfasilitasi dan mengakselerasi Mahasiswa Universitas Terbuka dibidang akademis dan non-akademis.
                </p>
                <p class="mb-4">UKM PENRISTEK terbuka kepada para Mahasiswa UT yang ingin mengimplementasikan keilmuannya dalam mencipatkan karya maupun penyebaran Ilmu Pengetahuan.
                </p>
                <button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-warning rounded-pill carousel-content-btn1 animated fadeInLeft text-light">Bergabung sebagai anggota</button>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<!-- visi misi -->
<div class="container-fluid py-5 ">
    <div class="container">
        <div class="row g-5 ">
            <div class="col-lg-5 hp-ilang col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                <div class="h-100 position-relative">
                    <img src="img/fotbar.jpg" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                    <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                        <img src="img/piala.jpg" class="img-fluid w-100 rounded" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                
                <h1 class="text-primary mb-3">VISI & MISI                        </h1>
                <h3 class="mb-4">VISI UKM PENDIDIKAN RISET & TEKNOLOGI UT BOGOR                        </h3>
                <p>Menjadi lembaga riset dan pendidikan yang mampu mencetak mahasiswa cerdas, kritis, kompeten, dapat mennghasilkan karya larya kreatif, inovatif, inspiratif dan sikap budi pekerti luhur dan turut serta dalam pengabdian masyarakat.</p>
                <h3 class="mb-4 mt-4">Misi UKM PENDIDIKAN RISET & TEKNOLOGI UT BOGOR                        </h3>
                <ul>
                    <li>Menjadi ekosistem yang mewadahi dan menumbuhkan pola pikir anggota ukm riset dan pendidikan agar menjadi lebih kritis, kreatif dan inovatif.
                    </li>
                    <li>Mengembangkan wawasan, keintelektualan, kemampuan dan keterampilan anggota ukm riset dan pendidikan.</li>
                    <li>Menjungjung dan memelihara kesatuan dan kekeluargaan di ukm riset dan pendidikan.</li>
                    <li>Turut serta dalam pengabdian masyarakat, khususnya dibidang pendidikan.x</li>
                    
                </ul class="mb-5">
                
                <h1 class="text-primary mt-5 ">Program Unggulan                        </h1>
                <h3 class="mb-4">Proker UKM PENDIDIKAN RISET & TEKNOLOGI UT BOGOR                        </h3>
                <ul>
                    <li> Rapat bulanan bersama anggota</li>
                    <li>Meet up</li>
                    <li>Peningkatkan wawasan</li>
                    <li>Materi edukasi</li>
                    <li> Membuat kegiatan dan penelitian yang mendukung kreativitas dan inovasi</li>
                    <li>Peningkatkan kemampuan dan daya saing</li>
                    <li>Teknologi informasi dan komunikasi</li>
                    <li>Pengabdian di masyarakat</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end visi misi -->

<!-- Team End -->
@include('misah.footer')
@endsection