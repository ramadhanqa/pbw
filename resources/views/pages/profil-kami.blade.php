@extends('layouts.app')
@section('title')
Profil Kami | Paket Tour Wisata Malang Bromo Murah Terbaik
@endsection
{{-- Content --}}
@section('content')
<main>
    <div class="row main">
      <div class="col-lg-8 pl-lg-5">
        <div class="card card-profile">
          <img src="frontend/images/profil-kami/Banner-Jendelajnk-1.gif" width="100%" height="100%" alt="">
          <div class="profile-text pl-lg-2">
            <p class="font-weight-bold" style="font-size: 24px;">Sedikit Cerita Tentang Kami !</p>
            <p style="font-weight: lighter;"> <strong style="font-weight: bold;">Jendela Wisata </strong> adalah perusahaan yang bergerak di Bidang Jasa sebagai Tour Organizer Perjalanan Wisata yang melayani <strong style="font-weight: bold;">Tour Bromo Malang dan Batu / Paket Wisata Bromo Malang dan Batu / Tour Kawah Ijen Banyuwangi dan Sekitarnya </strong> khususnya di Jawa Timur.</p>
            <p style="font-weight: lighter;">Melayani dengan baik adalah salah satu dari tujuan kami untuk menciptakan liburan para pelanggan kami menjadi berkesan dan nyaman. Kami menyediakan fasilitas Armada terbaik dan layak yang sangat nyaman dan aman untuk melakukan perjalanan jauh mapun dekat. </p>
            <p style="font-weight: lighter;">Pelayanan yang terbaik dalam dunia parawisata tentunya melibatkan beberapa pekerja profesional seperti <strong style="font-weight: bold;"> Guide, Driver </strong> dan <strong style="font-weight: bold;"> Customer Service. </strong> Driver dan Guide yang berpengalaman kami berikan untuk menciptakan situasi yang menyenangkan dan aman dalam perjalanan wisata anda. Memberikan tanggapan semua pertanyaan dengan cepat, sopan, santun dan profesional agar rencana liburan anda berjalan dengan <strong style="font-weight: bold;"> Nyaman dan Aman.</strong> </p>
            <p style="font-weight: lighter;">Kami optimis bahwasanya Mampu dan Yakin memberikan kepuasan dalam berlibur dan merencanakan liburan kepada pelanggan kami dengan pelayanan terbaik dari <strong style="font-weight: bold;"> Jendela Wisata.</strong> </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card-profile">
          <a class="katalog" href=" ../../halaman/Tour2D1N/TourBromo&KotaBatu.html">
            <img src="frontend/images/katalog/Bromo-Batu.jpg" width="280" height="280" alt="">
          </a>
        </div>
        <div class="card-profile pt-5">
          <a class="katalog" href="../../halaman/Tour1D/TourKawahIjen.html">
            <img src="frontend/images/katalog/Ijen-Midnight.jpg" width="280" height="280" alt="">
          </a>
        </div>
      </div>
    </div>

      <div class="fl-map">
        <iframe src="https://maps.google.com/maps?q=Jalan+Dahlia%2C+No.+15%2C+sengkaling+malang&amp;iwloc=near&amp;output=embed" width="100%" height="500px" frameborder="0" style="border:0"></iframe>
      </div>
  </main>
@endsection
{{-- Testimonial --}}
@section('about')
<!-- About -->
<div class="row">
    <div class="col-lg-7 pl-lg-5">
      <div class="card card-instgram">
        <h3 style="font-weight: lighter;">Our Instagram</h3>
        <img class="rounded-circle" width="65px" height="65px" src="../../frontend/images/logoig.JPG" alt=""><p style="font-weight: lighter; padding-left: 90px; width: 1000px; margin-top: -50px; padding-bottom: 30px;">jendelawisata</p>
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-bbb74814-eb19-4ec3-aa2f-5541b877b9e7"></div>
      </div>
    </div>
    <div class="col-lg-5">
      <div class="card-instagram card-testimoni">
        <h3 style="font-weight: lighter;">Testimonials</h3>
        <div id="carouselExampleIndicators" class=" carousel jumb-testimoni slide" data-ride="carousel">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="fa fa-chevron-circle-left" style="margin-left: 890px; margin-top: -425px;" ></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">

            <span class="fa fa-chevron-circle-right" style="margin-top: -425px;" ></span>
          </a>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <p style="font-weight: lighter;">Tripnya Seru Banget ! Guidenya tadi sama mas Iwan, Orangnya seru banget dan lusu. Terimakasih banyak, kapan - kapan kalau mau ke Malang saya ikut Jendela Wisata lagi</p>
              <br>
              <br>
              <strong>Hanika Try Semarang</strong>
            </div>
            <div class="carousel-item">
              <p style="font-weight: lighter;">Mas Hary Jon Good Service(Driver)</p>
              <br>
              <br>
              <strong>Ian Oktaviani - Bandung</strong>
            </div>
          </div>

        </div>
    </div>
  </div>
  </div>
@endsection
