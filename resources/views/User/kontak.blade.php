@extends('layouts.main')
@section('isi')


    <!-- Contact Start -->
    <div class="container-fluid py-5 mb-5">
      <div class="container py-5">
          <div class="text-center mx-auto pb-2 py-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
              <h1 class="text-primary py-5">KONTAK KAMI</h1>
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