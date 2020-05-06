@extends('layouts.app')
@section('title')
Menjangan & Tabuhan | Paket Tour Wisata Malang Bromo Murah Terbaik
@endsection
@section('content')
<!-- Jumbotron -->
<div id="carouselExampleIndicators" class=" carousel slide" data-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="../../frontend/images/katalog/1D_Tour/jumbotron1.JPG" alt="First slide">
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
            <p class="font-weight-bold">Pulau Menjangan dan Tabuhan</p>
            <p style="font-weight: lighter;">Pulau Menjangan merupakan pulau kecil yang terletak di 5 mil barat laut pulau Bali dan merupakan bagian dari Taman Nasional Bali Barat. "Menjangan" dalam bahasa setempat berarti "rusa / kijang" dikarenakan pulau ini di huni kawanan rusa atau kijang liar. Banyak wisatawan yang belum Tau tentang pulau menjangan ini, kebanyakan yang mengetahui adalah turis yang hobi Diving. di pulau menjangan ini di terkenal dengan <strong style="font-style: italic;font-weight: bold;"> Wall Diving </strong> terbaik di Bali.</p>
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-detail-tab" data-toggle="tab" href="#nav-detailtrip" role="tab" aria-controls="nav-detailtrip" aria-selected="true">Detail Trip</a>
                <a class="nav-item nav-link" id="nav-hargatour-tab" data-toggle="tab" href="#nav-hargatour" role="tab" aria-controls="nav-hargatour" aria-selected="false">Price Trip</a>
                <a class="nav-item nav-link" id="nav-fasilitas-tab" data-toggle="tab" href="#nav-fasilitas" role="tab" aria-controls="nav-fasilitas" aria-selected="false">Facility Include&Exclude</a>
                <a class="nav-item nav-link" id="nav-jadwalperjalanan-tab" data-toggle="tab" href="#jadwalperjalanan" role="tab" aria-controls="jadwalperjalanan" aria-selected="false">Itinerary</a>
                <a class="nav-item nav-link" id="nav-termcon-tab" data-toggle="tab" href="#termcond" role="tab" aria-controls="termcond" aria-selected="false">Term & Condition</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-detailtrip" role="tabpanel" aria-labelledby="nav-detailtrip-tab"><br>
               <strong> Jadwal </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-weight: lighter;">: Penentuan waktu bebas </span> <br>
               <strong>Sifat Trip </strong>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-weight: lighter;">: Private dan tidak digabung dengan peserta lainnya</span>  <br>
               <strong> Meeting Point </strong> ,<span style="font-weight: lighter;">: Banyuwangi (bebas dalam kota)</span>
               <br><br>
               <p style="font-weight: lighter;">
                 <strong style="font-weight: bold;">Destinasi Wisata Tour Bromo</strong><br>
                    - Coral Garden <br>
                    - Sandy Slope <br>
                    - Ganesha <br>
                    - Pulau Menjangan <br>
                    - Pulau Tabuhan
               </p>
              </div>
              <div class="tab-pane fade" id="nav-hargatour" role="tabpanel" aria-labelledby="nav-hargatour-tab"><br>
                <strong>Price :</strong>
                <p  style="font-weight: lighter;">
                  7 orang : 425.000,- /orang<br>
                  6 orang : 450.000,- / orang<br>
                  5 orang : 500.000,- / orang<br>
                  4 orang : 650.000,- / orang<br>
                  3 orang : 750.000,- / orang<br>
                  2 orang : 950.000,- / orang<br><br>
                </p>
                <p style="font-style: italic; font-weight: lighter;">*jumlah perserta trip diatas 6 orang silakan menghubungi CS kami
                </p>
              </div>
              <div class="tab-pane fade" id="nav-fasilitas" role="tabpanel" aria-labelledby="nav-fasilitas-tab"><br>
                <p style="font-weight: lighter;">
                  <strong style="font-weight: bold;">Price Include : </strong> <br>
                      √ Transport dari Meeting Point – GWD Watudodol (Avanza / Luxio) <br>
                   <strong style="font-weight: bold;"> √ Private Boat & Pelampung </strong> <br>
                      √ Driver, BBM & Parkir <br>
                      √ Tiket entrance kawasan Menjangan Tabuhan <br>
                  <strong style="font-weight: bold;"> √ Makan Siang </strong> <br>
                      √ Alat Snorkeling (masker dan snorkel) <br>
                      √ Air Mineral & Masker <br>
                      √ Driver Jeep as Guide <br>
                      √ P3K Ringan <br>
                      √ Asuransi Taman Nasional <br> <br>

                  <Strong style="font-weight: bold;">Price Exclude : </Strong> <br>
                      √ Makan di luar jadwal <br>
                      √ Fin / Kaki Katak ( extra Rp. 20.000,-/set) <br>
                      √ Guide Snorkeling ( extra Rp. 100.000,-/boat) <br>
                      √ DokumentasiUnderwater ( extra Rp. 100.000,-/boat)
                </p>
              </div>
              <div class="tab-pane fade" id="jadwalperjalanan" role="tabpanel" aria-labelledby="jadwalperjalanan"><br>
                <p style="font-weight: lighter;">
                  <strong style="font-weight: bold;">Day 1</strong><br>
                    07.00 : Penjemputan di meeting point <br>
                    07.30 : Menuju Pulau Menjangan <br>
                    08.20 : Pos 1 Pulau Menjangan, untuk registrasi Kunjungan <br>
                    09.00 : Kegiatan Snorkeling di spot yang sudah ditentukan <br>
                    11.30 : Makan siang <br>
                    12.00 : Menuju Pulau Tabuhan <br>
                    13.00 : Tiba di Pulau Tabuhan, acara bebas explore Pantai <br>
                    15.00 : Kembali Ke dermaga penyebrangan <br>
                    16.00 : Bersih diri dan persiapan kembali menuju meeting point <br>
                    17.00 : Trip berakhir, dan sampai jumpa <br> <br>

                    <i>*jadwal diatas tidak baku, jadwal sewaktu-waktu bisa berubah sesuai kodisi di lapangan tanpa mengganggu agenda secara keseluruhan</i>
                </p>
              </div>
              <div class="tab-pane fade" id="termcond" role="tabpanel" aria-labelledby="termcond"><br>
                <p style="font-weight: lighter;" >
                  - Tanda jadi trip peserta diwajibkan melakukan transfer <strong style="font-weight: bold;">Down Payment</strong>  minimal sebesar <strong style="font-weight: bold;"> 50% </strong> dari total keseluruhan dan sisa pembayaran dilakukan saat penjemputan peserta Tour Bromo Sunrise <br>
                  - Setelah melakukan trasnfer, peserta diminta untuk mengirimkan bukti trasnfer, data peserta, alamat email dan alamat jemput sebagai konfirmasi kepada pihak kami atas tanda jadi trip <br>
                  - Apabila destinasi tujuan idak memungkinkan untuk dikunjungi karena bencana, cuaca yang tidak mendukung, penutupan tempat wisata, atau sebab lain di luar kendali kami, maka peserta tidak berhak meminta kompensasi atau pengembalian biaya yang telah dibayarkan dan diadakan musyawarah mufakat antara pihak Travel dan Peserta Tour Bromo Sunrise <br>
                  - Jika terjadi force majeur oleh pihak kami, DP kami kembalikan sepenuhnya <br>
                  - Jika terjadi Force Majeur yang disebabkan peserta (ketinggalan kereta, pesawat dan lainnya), peserta dianggap cancel trip dan pembayaran yang sudah dibayarkan hangus <br>
                  - Reschedule Tanggal Trip Bromo hanya bisa dilakukan minimal H-10 dari tanggal keberangakatan <br>
                  - <strong style="font-weight: bold;">Cancel trip</strong>  oleh peserta sebelum <strong style="font-weight: bold;">H-5</strong> , kami melakukan refund sebesar <strong style="font-weight: bold;">20%</strong>  dari semua yang telah dibayarkan <br>
                  - <strong style="font-weight: bold;">Cancel trip</strong>  oleh peserta lebih dari <strong style="font-weight: bold;">H-5</strong> , semua yang sudah dibayarkan menjadi hak kami (semua DP hangus) <br>
                  - Anak <strong style="font-weight: bold;">usia 2 tahun keatas </strong>  kami kenakan biaya penuh <br>
                  - Kami baru akan memasukkan sebagai list peserta apbila sudah melakukan pembayaran DP <br>
                  - Untuk Down Payment dapat dibayarkan ke Rekening dibawah ini : <br><br>
                  - <strong style="font-weight: bold;">
                  135-008-111-5758 <br></strong>
                  An. <strong style="font-weight: bold;">PT Jagad Mahakarya Wisata </strong>
                </p>
              </div>
            </div>
          </div>
        </div>
        <a href="https://api.whatsapp.com/send?phone=6281233314803">
          <button class="fl btn-default" type="button" role="button" style="background: linear-gradient(to bottom,#def54b 0%,#c0d72d 100%); margin-top: 50px; margin-left: 750px; border-color: #b4cb21; border-width: 1px; border-radius: 4px; line-height: 30px; height: 40px;">
            <span class="fl-button-text">Ask now! </span>
            <i class="fl-button-icon fl-button-icon-after fa fa fa-whatsapp"></i>
          </button>
        </a>
        <!-- table -->

      </div>
      <div class="col-lg-4">
        <div class="card-profile">
          <a class="katalog" href="../../halaman/Tour2D1N/TourBromo&KotaBatu.html">
            <img src="../../frontend/images/katalog/detail5.jpg" width="280" height="280" alt="">
          </a>
        </div>
        <div class="card-profile pt-5">
          <a class="katalog" href="  ../../halaman/Tour3D2N/TourBromoIjen&Baluran.html">
            <img src="../../frontend/images/katalog/detail6.jpg" width="280" height="280" alt="">
          </a>
        </div>
        <div class="card-profile pt-5">
          <a class="katalog" href=" ../../halaman/Tour1D/BromoMidnight.html">
            <img src="../../frontend/images/katalog/detail3.jpg" width="280" height="280" alt="">
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
