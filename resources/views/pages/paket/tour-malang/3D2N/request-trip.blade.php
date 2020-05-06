@extends('layouts.app')
@section('title')
Custom Trip | Paket Tour Wisata Malang Bromo Murah Terbaik
@endsection
@section('content')
<!-- Jumbotron -->
<div id="carouselExampleIndicators" class=" carousel slide" data-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="../../frontend/images/Bannerumum.jpg" alt="First slide">
      </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- Main text table -->
  <main>
    <div class="row textmain">
      <div class="col-lg-8 pl-lg-5">
        <div class="card card-profile-main">

          <div class="profile-text-main pl-lg-2">
            <p class="font-weight-bold">Custom Trip</p>
            <p style="font-weight: lighter;">Custom Trip adalah menggabungkan dari beberapa lokasi wisata dengan jadwal dan destinasi sesuai dengan permintaan yang anda berikan. Dengan mengcustom jadwal anda dapat menentukan sendiri jadwal kedatangan dan kepulangan yang nantinya akan coba kami sesuaikan dengan kondisi lapang.</p>
            <p style="font-weight: lighter;">Beberapa tahun terakhir antusias wisatawan baik lokal maupun mancanegara sangat tinggi, hal itu dibuktikan semakin banyaknya wisatawan yang mengunjungi destinasi Favorite di Indonesia. Berpacu dalam hal itu, kami Jendela Wisata ingin terus berupaya berprogress dan berinovasi untuk tetap mempertahankan posisi sebagai referensi pertama untuk perjalanan Anda di Jawa Timur dan sekitarnya.</p>

            <nav>
              <div class="nav nav-tabs flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-detail-tab" data-toggle="pill" href="#nav-detailtrip" role="tab" aria-controls="nav-detailtrip" aria-selected="true">Detail Trip</a>
                <a class="nav-link" id="v-pills-hargatour-tab" data-toggle="pill" href="#nav-hargatour" role="tab" aria-controls="nav-hargatour" aria-selected="false">Price Trip</a>
                <a class="nav-link" id="v-pills-termcon-tab" data-toggle="pill" href="#termcond" role="tab" aria-controls="termcond" aria-selected="false">Term Condition</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane2 fade show active" id="nav-detailtrip" role="tabpanel" aria-labelledby="v-pills-detail-tab">
               <p style="font-weight: lighter;">
                 <strong style="font-weight: bold;">Bagaimana Request Trip?</strong><br>
                  √ Tentukan waktu Kedatangan dan Keberangkatan <br>
                  √ Pilih tujuan wisata yang di inginkan <br>
                  √ Konsultasikan tujuan wisata kepada Customer Service kami, nantinya akan kami atur dan sesuaikan dengan kondisi lapang <br>
                  √ Setalah kami mengatur jadwal kunjungan wisata yang diinginkan <br>
                  √ Kami akan mengirimkan secara detail atau lengkap harga, itenanry dan fasilitas di kontak atau email anda yang diberikan kepada kami <br>
                  √  Setelah semua deal, silahkan menghubungi kami untuk reservasi atau langsung booking Trip di Menu Booking <br>
               </p>
              </div>
              <div class="tab-pane3 fade" id="nav-hargatour" role="tabpanel" aria-labelledby="nav-hargatour-tab">
                <p style="font-weight: lighter;">
                  <strong style="font-weight: bold;">Berapa Jumlah biaya yang dikeluarkan?</strong>
                  √ Harga disesuaikan dengan jumlah perserta <br>
                  √ Harga disesuaikan dengan lama perjalanan singkat atau panjang <br>
                  √ Harga yang kami tawarkan sesuai dengan fasilitas dan service dari kami kepada anda <br>
                </p>
                <p><strong>*Peserta diatas 6 Orang Silahkan menghubungi kontak kami<br>
                  *Harga diatas tidak berlaku di Periode High Season (Libur Lebaran, Natal dan Tahun Baru </strong>
                </p>
              </div>
              <div class="tab-pane4 fade" id="termcond" role="tabpanel" aria-labelledby="termcond">
                <p style="font-weight: lighter;">
                  - Custom Trip tidak terjadwal untuk jadwal Kedatangan dan jadwal Keberangkatan<br>
                  - Semua destinasi Wisata yang akan dikunjungi hasil dari permintaan customer, yang nantinya akan kami aturkan sesuai dengan kondisi lapang<br>
                  - Tanda jadi trip peserta diharapkan melakukan transfer <strong style="font-weight: bold;">Down Payment</strong>  minimal sebesar 3<strong style="font-weight: bold;">0%</strong> dari total keseluruhan dan sisa pembayaran dilakukan saat penjemputan peserta<br>
                  - Setelah melakukan trasnfer, peserta trip diminta untuk mengirimkan bukti trasnfer, data peserta, alamat email dan alamat jemput sebagai konfirmasi kepada pihak kami atas tanda jadi trip<br>
                  - Apabila destinasi tujuan tidak memungkinkan untuk dikunjungi karena bencana, cuaca yang tidak mendukung, penutupan tempat wisata, atau sebab lain di luar kendali kami, maka peserta tidak berhak meminta kompensasi atau pengembalian biaya yang telah dibayarkan dan diadakan musyawarah mufakat<br>
                  - Jika terjadi force majeur oleh pihak kami, DP kami kembalikan sepenuhnya<br>
                  - Jika terjadi Force Majeur yang disebabkan peserta (ketinggalan kereta, pesawat dan lainnya), peserta dianggap cancel trip dan pembayaran yang sudah dibayarkan hangus<br>
                  - Kami tidak melayani Reschedule Tanggal Trip<br>
                  - <strong style="font-weight: bold;">Cancel trip oleh</strong> peserta sebelum<strong style="font-weight: bold;"> H-5</strong>, kami melakukan refund sebesar<strong style="font-weight: bold;"> 20%</strong> dari semua yang telah dibayarkan<br>
                  - <strong style="font-weight: bold;">Cancel trip oleh </strong>peserta lebih dari<strong style="font-weight: bold;"> H-5</strong>, semua yang sudah dibayarkan menjadi hak kami (semua DP hangus)<br>
                  - Kami baru akan memasukkan sebagai list peserta apbila sudah melakukan pembayaran DP<br>
                  - Untuk Down Payment dapat dibayarkan ke Rekening dibawah ini :<br><br>
                  -  <br><br>
                  - <strong style="font-weight: bold;">
                  135-008-111-5758 <br></strong>
                  An.<strong style="font-weight: bold;"> PT Jagad Mahakarya Wisata </strong>
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- table -->

      </div>
      <div class="col-lg-4">
        <div class="card-profile">
          <a class="katalog" href="../../halaman/Tour1D/BromoMidnight.html">
            <img src="../../frontend/images/katalog/detail3.jpg" width="280" height="280" alt="">
          </a>
        </div>
        <div class="card-profile pt-5">
          <a class="katalog" href="../../halaman/Tour3D2N/TourBromo&MalangBatu.html">
            <img src="../../frontend/images/katalog/detail1.jpg" width="280" height="280" alt="">
          </a>
        </div>
        <div class="card-profile pt-5">
          <a class="katalog" href=" ../../halaman/Tour3D2N/TourBromoIjen&Baluran.html">
            <img src="../../frontend/images/katalog/detail6.jpg" width="280" height="280" alt="">
          </a>
        </div>
      </div>
    </div>

  </main>
@endsection
@section('about')
<!-- About -->
<div class="row three">
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
              <p style="font-weight: lighter;">Seru banget mas, viewnya juga keren. Drivernya juga ramah dan baik, terimakasih yaa Jendela Wisata</p>
              <br>
                 <br>
                <br>
                 <br>
                <br>
              <strong>Indah Cahya - Jakarta</strong>
            </div>
            <div class="carousel-item">
              <p style="font-weight: lighter;">Pelayanannya ramah dan berusaha memuaskan pelanggan dengan memberi lokasi setiap tmpt wisata spot yg terbaik...the best deh pokoke "duajempol" sukses selalu jendela wisata
                <br>
                 <br>
                <br>
                 <br>
                <br>
                </p>

              <strong>Tjanaddi KFR - Tangerang</strong>
            </div>
            <div class="carousel-item">
              <p style="font-weight: lighter;">Mas Hary Jon Good Service(Driver)</p>
              <br>
                 <br>
                <br>
                 <br>
                <br>
              <strong>Ian Oktaviani - Pekan Baru</strong>
            </div>
          </div>
        </div>
    </div>
  </div>
  </div>
@endsection
