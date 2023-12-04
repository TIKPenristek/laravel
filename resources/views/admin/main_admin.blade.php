<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>{{ $tittle }}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel="icon" type="image/x-icon" href="img/asset/logo1.png" />


        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner1" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-dark py-2 d-none d-md-flex bg-topbar fixed-top mb-5">
            <div class="container">
                <div class="d-flex justify-content-between topbar">
                    <div class="top-info">
                        <small class="me-3 text-info"></a>Segera lapor bila ada bug</small>
                        <small class=" ilang-mobile me-3 text-success">YUKKK SEMANGAT UPLOAD KONTENNYA</small>
                    </div>
                    <div id="note1" class="text-secondary d-none d-xl-flex"><small>TETAP SEMANGAT</small></div>
                    <div class="top-link">
                        <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-twitter text-primary"></i></a>
                        <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-instagram text-primary"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <div class="container-fluid bg-start bg-danger fixed-top mt-5 pb-1">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <!-- <a href="index.html" class="navbar-brand">
                        
                        <h3 class="text-white fw-bold d-block">UKM <span class="text-secondary">jurnalishumas</span> </h3>
                    </a> -->
                    <a class="navbar-brand d-flex" href="#">
                        <img src="img/asset/logo1.png" alt="" width="50" height="48" class=" align-text-top rounded-circle">
                        <h3 class="mx-2 mt-2 text-white fw-bold">Admin UKM <span class="text-secondary">PENRISTEK</span> </h3>
                      </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                        <div class="navbar-nav ms-auto mx-xl-auto p-0">
                            <a href="/admin_divtikpenristek" class="nav-item nav-link {{ ($tittle=='Admin')? 'active': '' }} ">Beranda</a>
                            <a href="/admin_divtikpenristek_dokumentasi" class="nav-item nav-link  {{ ($tittle=='Dokumentasi')? 'active': '' }}">Dokumentasi</a>
                            <a href="/admin_divtikpenristek_berita" class="nav-item nav-link {{ ($tittle=='Berita')? 'active': '' }}">Berita</a>
                            <a href="/admin_divtikpenristek_sa" class="nav-item nav-link {{ ($tittle=='sa')? 'active': '' }}">Super Admin</a>
                            <a href="/admin_divtikpenristek_keluar" class="nav-item nav-link">Keluar</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
      @yield('isi')


      
        
        <!-- Back to Top -->
        <a href="#" class="btn btn-ukm btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>