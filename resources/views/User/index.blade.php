@extends('layouts.main')
@section('isi')
    
        <!-- Carousel Start -->
        <div class="container-fluid bg-awal px-0 mt-5 pt-5">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                </ol>
                <div class="carousel-inner " role="listbox">
                    <div class="carousel-item bg-full active">
                        <img src="img/jb1.jpg" class="img-fluid" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text-secondary h3 animated fadeInUp mt-3">UKM PENDIDIKAN RISET DAN TEKNOLOGI UT BOGOR</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInLeft">DIVISI TEKNOLOGI INFORMASI & KOMUNIKASI</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">Minat bakat yang dapat disalurkan pada UKM Penristek dalam dunia teknologi, cenderung diarahkan agar tersosialisasi sesuai dengan kebutuhan layaknya seorang Programmer sebagaimana seharusnya</p>
                                <a href="/tentang-kami" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-warning rounded-pill carousel-content-btn1 animated fadeInLeft">Lihat Details</button></a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item bg-full">
                        <img src="img/carousel-2.jpg" class="img-fluid" alt="Second slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text-secondary h3 animated fadeInUp mt-3">UKM PENDIDIKAN RISET DAN TEKNOLOGI UT BOGOR</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInLeft">DIVISI PENDIDIKAN</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown ">Pengembangan skill dan pengetahuan di bidang pendidikan dan penelitian yang mencakup kemampuan personal dan interpersonal para anggota penristek</p>
                                <a href="/tentang-kami" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-warning rounded-pill carousel-content-btn1 animated fadeInLeft">Lihat Details</button></a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="bg-primary carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Fact Start -->
        <div class="container-fluid  bg-danger py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-light counter-value">6</h1>
                            <h5 class="text-white mt-1">DEMISIONER</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-light counter-value">13</h1>
                            <h5 class="text-white mt-1">Badan pengurus harian</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-light counter-value">70</h1>
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
            <div class="container pt-5">
                <div class="row g-5">
                    <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                        <div class="h-100 position-relative">
                            <img src="img/bg-kom.jpg" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                            <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                                <img src="img/meetup2.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                        <h1 class="text-primary mb-2">Tentang kami</h1>
                        <h3 class="mb-4 text-dark">UKM PENDIDIKAN RISET & TEKNOLOGI UT BOGOR</h3>
                        <p>UKM Pendidikan Riset dan Teknologi adalah lembaga yang memfasilitasi dan mengakselerasi Mahasiswa Universitas Terbuka dibidang akademis dan non-akademis.</p>
                        <p class="mb-4">UKM PENRISTEK terbuka kepada para Mahasiswa UT yang ingin mengimplementasikan keilmuannya dalam mencipatkan karya maupun penyebaran Ilmu Pengetahuan.           </p>
                        <a href="/tentang-kami" class="btn btn-ukm rounded-pill px-5 py-3 text-white">Lihat Details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Services Start -->
        <div class="container-fluid services py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h1 class="text-primary mb-2">2 DIVISI PENRISTEK</h1>
                    <h3>Ada divisi apa aja sih?</h3>
                </div>
                <div class="row g-5 services-inner">
                    <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fa fa-code fa-7x mb-4 text-svg"></i>
                                    <h4 class="mb-3">DIVISI TIK</h4>
                                    <p class="mb-4">Div tik penristek Bergerak untuk mewadahi belajar bareng seputar teknologi seperti programming foundation dan cyber security
                                        Meskipun semua yang di bahas berkaitan dengan prodi sistem informasi, tik penristek juga terbuka untuk seluruh prodi. <br>Jadi programming foundation itu kaya simpelnya kita belajar dasar dan materi nya dulu sebelum kita Nemu material tersebut di perkuliahan ut , untuk yang udah menempuh nyajuga bisa di tingkatkan lagi ke jenjang yang lebih profesional atau dunia kerja,
                                        Karena yang di ajarkan di perkuliahan itu hanya basicnya aja.</p>
                                    <a href="" class="btn btn-ukm text-white px-5 py-3 rounded-pill">Lihat Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="services-item bg-light">
                            <div class="p-2 text-center services-content">
                                <div class="services-content-icon">
                                    <svg class="text-biru" xmlns="http://www.w3.org/2000/svg" height="200" width="180" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5V78.6c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8V454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5V83.8c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11V456c0 11.4 11.7 19.3 22.4 15.5z"/></svg>
                                    <h4 class="mb-3">DIVISI PENDIDIKAN</h4>
                                    <p class="mb-4">Divisi ini merupakan divisi yg bertugas untuk membuat dan menjalankan program yang nantinya bertujuan untuk mengembangkan wawasan dan skill para anggota penristek. Beberapa contoh program yang kita buat adalah program diskusi interaktif , sosialisasi, pengembangan kemampuan skill baik secara internal maupun external . Dan juga melakukan kegiatan sosial berupa pengabdian masyarakat.
                                        </p>
                                    <a href="" class="btn btn-ukm text-white px-5 py-3 rounded-pill">Lihat Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Services End -->


        <!-- Project Start -->
        <div class="container-fluid project py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h1 class="text-primary mb-2">DOKUMENTASI</h1>
                    <h3>UKM PENDIDIKAN RISET & TEKNOLOGI</h3>
                </div>
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="img/project-1.jpg" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-dark">Web design</h4>
                                        <p class="m-0 text-white">Web Analysis</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="img/project-2.jpg" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-dark">Cyber Security</h4>
                                        <p class="m-0 text-white">Cyber Security Core</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="img/project-3.jpg" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-dark">Mobile Info</h4>
                                        <p class="m-0 text-white">Upcomming Phone</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="img/project-4.jpg" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-dark">Web Development</h4>
                                        <p class="m-0 text-white">Web Analysis</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="img/project-5.jpg" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-dark">Digital Marketing</h4>
                                        <p class="m-0 text-white">Marketing Analysis</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="img/project-6.jpg" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-dark">keyword Research</h4>
                                        <p class="m-0 text-white">keyword Analysis</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project End -->
        <!-- Team Start -->
        <div class="container-fluid py-5 mb-5 team">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h1 class="text-primary mb-2">STRUKTUR KEPENGURUSAN</h1>
                    <h3>UKM PENDIDIKANN RISET & TEKNOLOGI PERIODE 2023-2024                    </h3>
                </div>
                <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="img/team-1.jpg" class="img-fluid w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class="">Full Name</h4>
                                    <p class="m-0">Designation</p>
                                </div>
                                <div class="team-icon d-flex justify-content-center pb-4">
                                    <a class="btn btn-square btn-ukm text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-ukm text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-ukm text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-ukm text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="img/team-2.jpg" class="img-fluid w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class="">Full Name</h4>
                                    <p class="m-0">Designation</p>
                                </div>
                                <div class="team-icon d-flex justify-content-center pb-4">
                                    <a class="btn btn-square btn-ukm text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-ukm text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-ukm text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-ukm text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="img/team-3.jpg" class="img-fluid w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class="">Full Name</h4>
                                    <p class="m-0">Designation</p>
                                </div>
                                <div class="team-icon d-flex justify-content-center pb-4">
                                    <a class="btn btn-square btn-ukm text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-ukm text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-ukm text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-ukm text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="img/team-4.jpg" class="img-fluid w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class="">Full Name</h4>
                                    <p class="m-0">Designation</p>
                                </div>
                                <div class="team-icon d-flex justify-content-center pb-4">
                                    <a class="btn btn-square btn-ukm text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-ukm text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-ukm text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-ukm text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h1 class="text-primary">KATA MEREKA TENTANG </h1>
                    <h3>UKM PENDIDIKAN RISET & TEKNOLOGI
                    </h3>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
                    <div class="testimonial-item border p-4">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <img src="img/testimoni/tri.jpg" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-secondary">Tri aditiawan</h4>
                                <p class="m-0 pb-3">4 Bulan bersama penristek</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-3">
                            <p class="mb-0">Unit Kegiatan Mahasiswa (UKM) Penristek benar-benar rumah kedua bagi saya. Saya merasa sangat puas dengan pengalaman bergabung di sini. Suasana kekeluargaan yang terbangun di antara anggota UKM benar-benar luar biasa. Kami bekerja sama layaknya keluarga, saling mendukung dan menginspirasi. Hal ini sungguh memotivasi saya untuk terus aktif dalam berbagai kegiatan di UKM Penristek. Saya yakin, pengalaman berharga ini akan membekas dalam ingatan saya selamanya. Terima kasih UKM Penristek!</p>
                        </div>
                    </div>
                    <div class="testimonial-item border p-4">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <img src="img/testimoni/elsa.jpg" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-secondary">Elsa Agustin Sunarya</h4>
                                <p class="m-0 pb-3">4 Bulan bersama penristek</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-3">
                            <p class="mb-0">Ukm Penristek adalah unit kegiatan mahasiswa di Universitas Terbuka yang berfokus pada bidang pendidikan, riset dan teknologi, sebenernya sebelum saya masuk UT, saya memang sudah cari tau ada ukm apa aja di UT, dan salah satunya ada Ukm Penristek, kemudian saya sangat tertarik dengan ukm itu setelah liat profilnya di website, disitu saya pokoknya kalo masuk UT harus masuk Ukm Penristek karena menurut saya ukm ini sangat cocok untuk saya mengembangkan bakat ataupun minat saya, cuman waktu itu belum buka oprec huhu, dan gak lama oprec, dan mulai terjun di ukm ini, seneng bangeet sekaligus bangga dengan orang-orang di dalamnya, banyak banget ilmu yang saya dapat, membuat saya bisa berkembang, saya menemukan relasi disini dengan orang-orang yang sangat hebat, dan mau saling belajar satu sama lain, dan tentunya kepercayaan diri saya ikut bertumbuh karena Ukm Penristek🙏❤</p>
                        </div>
                    </div>
                    <div class="testimonial-item border p-4">
                        <div class=" d-flex align-items-center">
                            <div class="">
                                <img src="img/testimoni/hanafi.jpg" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-secondary">Hanafiasri</h4>
                                <p class="m-0 pb-3">5 Bulan bersama Penristek</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-3">
                            <p class="mb-0">Berbagai event telah telah dilaksanakan oleh UKM penristek, beberapa event sudah di ikuti. Sangat senang bisa berkumpul dengan teman-teman baru dan sangat menjunjung tinggi nilai-nilai kekeluargaan. Semoga UKM penristek bisa lebih maju lagi. Terima Kasih. </p>
                        </div>
                    </div>
                    <div class="testimonial-item border p-4">
                        <div class=" d-flex align-items-center">
                            <div class="">
                                <img src="img/testimoni/putri.jpeg" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-secondary">Putri Dewantari </h4>
                                <p class="m-0 pb-3">6 Bulan bersama penristek</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-3">
                            <p class="mb-0">"UKM PENRISTEK, bukan hanya sekadar wadah, tapi tempat di mana passion kita ditempa dan prestasi dibuat! Saya betul-betul suka dengan suasana kompetisi yang positif di PENRISTEK. Selama ini, berhasil 'borong' piala-piala dalam berbagai ajang lomba di Penristek terutama di lomba public speaking yang benar-benar keren!

                                Tidak hanya itu, saya sangat menantikan Batch 2 nih. Saya yakin PENRISTEK akan menghadirkan lebih banyak kejutan dan inspirasi baru. Bergabunglah dengan PENRISTEK, di mana setiap kata menjadi langkah menuju kemenangan. Let's aim for more trophies and make Batch 2 even more spectacular! 🏆</p>
                        </div>
                    </div>
                    <div class="testimonial-item border p-4">
                        <div class=" d-flex align-items-center">
                            <div class="">
                                <img src="img/testimoni/rifki.png" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-secondary">Rifki Bahrul Ulumudin</h4>
                                <p class="m-0 pb-3">12 Bulan bersama penristek</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-3">
                            <p class="mb-0">Awalnya ikut penristek untuk cari tahu tentang karil. Ternyata di UKM ini bukan hanya karil yg saya dapatkan, tapi lebih dari itu. Banyak ilmu, pelajaran, relasi, humor dan percintaan yg saya dengar di UKM ini. Saya percaya niat baik akan mendatangkan kebaikan lainnya.</p>
                        </div>
                    </div>
                    <div class="testimonial-item border p-4">
                        <div class=" d-flex align-items-center">
                            <div class="">
                                <img src="img/testimoni/arwi.jpg" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-secondary">Siti Arwiyah</h4>
                                <p class="m-0 pb-3">12 Bulan bersama penristek</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-3">
                            <p class="mb-0">Selama saya di penristek, banyak sekali pengalaman - pengalaman baru yang saya pelajari, UKM ini tidak hanya membahas tentang pengetahuan, atau seputar perkuliahan saja, melainkan ada banyak hal didalamnya. Pertemanan layaknya keluarga, belajar layaknya persahabatan, dan berdebat layaknya orang cerdas. Termasuk belajar tentang, etika, sopan, santun, dan cara menghargai orang lain.

                                Semoga penristek terus melangkah maju menjadi lebih baik dan terus berkembang dalam hal positif.</p>
                        </div>
                    </div>
                    <div class="testimonial-item border p-4">
                        <div class=" d-flex align-items-center">
                            <div class="">
                                <img src="img/testimoni/dian.jpg" alt="">
                            </div>
                            <div class="ms-4">Dian Nurjanah </h4>
                                <p class="m-0 pb-3">10 Bulan bersama penristek</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-3">
                            <p class="mb-0">Menjadi bagian dari penristek merupakan hal yang paling membanggakan , dan unexpected karena disini saya mendapatkan banyak sekali ilmu , relasi, dan skill yang membuat saya merasa lebih percaya diri dan berani dalam menyampaikan pendapat. Penristek ini merupakan tempat yang terbaik untuk meningkatkan kualitas diri , dan meningkatkan kesadaran pentingnya hidup bersosialisasi dan berorganisasi sebagai seorang mahasiswa.</p>
                        </div>
                    </div>
                    <div class="testimonial-item border p-4">
                        <div class=" d-flex align-items-center">
                            <div class="">
                                <img src="img/testimoni/aca.png" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-secondary">Natasya Aulia (aca)</h4>
                                <p class="m-0 pb-3">12 Bulan bersama penristek</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-3">
                            <p class="mb-0">Penristek adalah keluarga kedua ku :v aku bersyukur banget bisa gabung dipenristek karena dipertemukan dengan orang² yang hebat dan ahli dalam bidang nya masing², dan baik banget, selalu terbuka dan saling ngerangkul anggota nya, dari penristek aku belajar banyak hal selain tentang pendidikan dan teknologi, disini juga aku belajar memahami banyak sekali karakter dari setiap anggota ada yg kadang bikin kesel, lucu, gemes dan sebagainya, selain itu juga aku yg dulu nya takut bertemu orng baru sekarang jadi udah mulai beraniii, banyak hal yg aku ga tau skrng jadi tau, karena di penristek kita saling sharing pengetahuan masing² (ga pelit ilmu) pokonya penristek terdabest, jaya terus penristek, lopyu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="container-fluid py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h1 class="text-primary">KONTAK KAMI</h1>
                    <h3 class="mb-3">Hubungi kami untuk pertanyaan apa pun
                    </h3>
                </div>
                <div class="contact-detail position-relative">
                    <div class="row g-5 mb-5 justify-content-center">
                        <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                            <div class="d-flex bg-light p-3 rounded">
                                <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="text-primary">Address</h4>
                                    <a href="https://maps.app.goo.gl/sjiuVt2xBLXvE64s9" target="_blank" class="h5">Bogor, Indonesia</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                            <div class="d-flex bg-light p-3 rounded">
                                <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="fa fa-phone text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="text-primary">Kontak humas </h4>
                                    <a class="h5" href="tel:+0123456789" target="_blank">+012 3456 7890</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                            <div class="d-flex bg-light p-3 rounded">
                                <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="fa fa-envelope text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="text-primary">Email Us</h4>
                                    <a class="h5" href="mailto:ukmjurnal.humasut@gmail.com" target="_blank">ukmpenristekutbogor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                            <div class="p-5 h-100 rounded contact-map">
                                
                                <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126805.42210525573!2d106.73569641147645!3d-6.687804941504118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b7ad0f824b%3A0x4c71fd1b0b8ae76d!2sKota%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1701340209339!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="p-5 rounded contact-form">
                        <h1 class="text-secondary mb-3">Kirim pesan</h1>

                                <div class="mb-4">
                                    <input type="text" class="form-control border-0 py-3" placeholder="Nama ">
                                </div>
                                <div class="mb-4">
                                    <input type="email" class="form-control border-0 py-3" placeholder="Email">
                                </div>
                                <div class="mb-4">
                                    <input type="text" class="form-control border-0 py-3" placeholder="Tujuan">
                                </div>
                                <div class="mb-4">
                                    <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" placeholder="pesan"></textarea>
                                </div>
                                <div class="text-start">
                                    <button class="btn bg-primary text-white py-3 px-5" type="button">Kirim pesan   </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!-- Contact End -->
        @include('misah.footer')
@endsection
  
