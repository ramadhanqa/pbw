@extends('layouts.detail')
@section('title')
Bromo Ijen & Baluran | Paket Tour Wisata Malang Bromo Murah Terbaik
@endsection
@section('content')
<!-- Jumbotron -->
<div id="carouselExampleIndicators" class=" carousel slide" data-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ url('../../frontend/images/Bannerumum.jpg') }}" alt="First slide">
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
            <p class="font-weight-bold">Paket Tour Bromo Ijen & Baluran</p>
            <p style="font-weight: lighter;">Gunung Bromo berasal dari <a href="https://id.wikipedia.org/wiki/Bahasa_Sanskerta">bahasa Sanskerta</a>: <a href="https://id.wikipedia.org/wiki/Brahma">Brahma</a>, salah seorang Dewa Utama dalam agama<a href="https://id.wikipedia.org/wiki/Hindu"> Hindu</a>), adalah sebuah<a href="https://id.wikipedia.org/wiki/Gunung_berapi"> gunung berapi</a> aktif di <a href="https://id.wikipedia.org/wiki/Jawa_Timur">Jawa Timur</a>,<a href="https://id.wikipedia.org/wiki/Indonesia"> Indonesia</a>. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah <a href="https://id.wikipedia.org/wiki/Kabupaten">kabupaten</a>, yakni<a href="https://id.wikipedia.org/wiki/Kabupaten_Probolinggo"> Kabupaten Probolinggo</a>,<a href="https://id.wikipedia.org/wiki/Kabupaten_Pasuruan"> Kabupaten Pasuruan</a>,<a href="https://id.wikipedia.org/wiki/Kabupaten_Lumajang"> Kabupaten Lumajang</a>, dan<a href="https://id.wikipedia.org/wiki/Kabupaten_Malang"> Kabupaten Malang</a>. Gunung Ijen adalah sebuah<a href="https://id.wikipedia.org/wiki/Gunung_berapi"> gunung berapi</a> aktif yang terletak di perbatasan antara<a href="https://id.wikipedia.org/wiki/Kabupaten_Banyuwangi"> Kabupaten Banyuwangi</a> dan<a href="https://id.wikipedia.org/wiki/Kabupaten_Bondowoso"> Kabupaten Bondowoso</a>,<a href="https://id.wikipedia.org/wiki/Jawa_Timur"> Jawa Timur</a>,<a href="https://id.wikipedia.org/wiki/Indonesia"> Indonesia</a>. Gunung ini memiliki ketinggian 2.443<a href="https://id.wikipedia.org/wiki/Mdpl"> mdpl</a> dan terletak berdampingan dengan <a href="https://id.wikipedia.org/wiki/Gunung_Merapi_(Jawa_Timur)">Gunung Merapi</a>.  </p>
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-detail-tab" data-toggle="tab" href="#nav-detailtrip" role="tab" aria-controls="nav-detailtrip" aria-selected="true">Detail Trip</a>
                <a class="nav-item nav-link" id="nav-hargatour-tab" data-toggle="tab" href="#nav-hargatour" role="tab" aria-controls="nav-hargatour" aria-selected="false">Harga Trip</a>
                <a class="nav-item nav-link" id="nav-fasilitas-tab" data-toggle="tab" href="#nav-fasilitas" role="tab" aria-controls="nav-fasilitas" aria-selected="false">Fasilitas Trip</a>
                <a class="nav-item nav-link" id="nav-jadwalperjalanan-tab" data-toggle="tab" href="#jadwalperjalanan" role="tab" aria-controls="jadwalperjalanan" aria-selected="false">Jadwal Perjalanan</a>
                <a class="nav-item nav-link" id="nav-termcon-tab" data-toggle="tab" href="#termcond" role="tab" aria-controls="termcond" aria-selected="false">Term Condition</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-detailtrip" role="tabpanel" aria-labelledby="nav-detailtrip-tab"><br>
               <strong> Jadwal </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-weight: lighter;">: Setiap hari dan Penentuan waktu bebas</span>  <br>
               <strong>Sifat Trip </strong>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-weight: lighter;">: Private dan tidak digabung dengan peserta lainnya</span>  <br>
               <strong> Meeting Point </strong> <span style="font-weight: lighter;">: Kota Malang, Banyuwangi & Surabaya</span> <br>
               <i style="font-weight: lighter;">*khusus penjemputan Surabaya dikenakan biaya tambahan </i>
               <br><br>
               <p style="font-weight: lighter;">
                 <strong style="font-weight: bold;">Destinasi Wisata Tour Kawah Ijen dan Gunung Bromo</strong><br>
              - Penanjakan 1 Sunrise ( Penanjakan / bukit kingkong / Cinta ) <br>
              - Bukit Widodaren <br>
              - Kawah Bromo & Pura Luhur Poten <br>
              - Pasir Berbisik <br>
              - Savana Bukit Teletubies <br>
              - Taman Nasional Baluran <br>
              - Pantai Bama <br>
              - Kawah Ijen <br>
              - Blue Fire <br>
              - Spot Penambangan Blerang
               </p>
              </div>
              <div class="tab-pane fade" id="nav-hargatour" role="tabpanel" aria-labelledby="nav-hargatour-tab">
                <table class="table text-center" >
                  <thead>
                    <th>Jumlah Orang</th>
                    <th>Hotel*3</th>
                    <th>Hotel*4</th>
                  </thead>
                  <tbody style="font-weight: lighter;">
                    <tr>
                      <td>1 Org</td>
                      <td>5.330.000/Pax</td>
                      <td>7.025.000/Pax</td>
                    </tr>
                    <tr>
                      <td>2 Org</td>
                      <td>3.595.000/Pax</td>
                      <td>4.825.000/Pax</td>
                    </tr>
                    <tr>
                      <td>3 Org</td>
                      <td>2.600.000/Pax</td>
                      <td>3.870.000/Pax</td>
                    </tr>
                    <tr>
                      <td>4 Org</td>
                      <td>2.210.000/Pax</td>
                      <td>3.400.000/Pax</td>
                    </tr>
                    <tr>
                      <td>5 Org</td>
                      <td>1.900.000/Pax</td>
                      <td>3.120.000/Pax</td>
                    </tr>
                    <tr>
                      <td>6 Org</td>
                      <td>1.750.000/Pax</td>
                      <td>2.930.000/Pax</td>
                    </tr>
                  </tbody>
                </table>
                <i  style="font-weight: lighter;"><strong  style="font-weight: bold;">Pilihan Hotel *3</strong> :Hotel Sahid Osing Banyuwangi & Lava View Lodge Bromo <br>
                  <strong  style="font-weight: bold;">Pilihan Hotel *4</strong> : Ijen Resort Banyuwangi & Jiwa Jawa Resort Bromo <br><br>

                  <strong  style="font-weight: bold;">
                  *Harga tidak berlaku di Periode High Season yaitu Libur Hari Raya Idul Fitri, Kemerdekaan RI, Natal dan Tahun Bru</strong>
                  </i>
              </div>
              <div class="tab-pane fade" id="nav-fasilitas" role="tabpanel" aria-labelledby="nav-fasilitas-tab"><br>
                <p style="font-weight: lighter;">
                  <strong style="font-weight: bold;">Harga Termasuk : </strong> <br>
                  √ Transport Selama Perjalanan (<strong style="font-weight: bold;"> 1-5 Orang dengan Innova, 7-8 dengan Elf Short, 9-10 dengan Hiace </strong>) <br>
                  √ Jeep 4x4 selama di Bromo <br>
                  √ Akomodasi 2 Malam (<strong style="font-style: italic;font-weight: bold;" >pilihan hotel ada di menu Harga Trip</strong>) <br>
                  √ Tiket entrance kawasan Bromo, Ijen & Baluran <br>
                  √ Local Guide Ijen <br>
                  √ Makan 6X Sesuai Jadwal <br>
                  √ BBM, Parkir & Tol <br>
                  √ Welcome snack, Air Mineral & Masker <br>
                  √ Driver as Guide <br>
                  √ P3K Ringan <br>
                  √ <strong>Asuransi Perjalanan Wisata</strong>  <br> <br>

                  <Strong style="font-weight: bold;">Harga Tidak Termasuk : </Strong> <br>
                  √ Makan di luar jadwal <br>
                  √ Sewa Jaket <br>
                  √ Coffee Morning <br>
                  √ Dokumentasi
                </p>
              </div>
              <div class="tab-pane fade" id="jadwalperjalanan" role="tabpanel" aria-labelledby="jadwalperjalanan"><br>
                <p style="font-weight: lighter;">
                  <strong style="font-weight: bold;">Day 1</strong><br>
                  07.00 : Penjemputan peserta di meeting point yang diinginkan <br>
                  07.30 : Start menuju Kawah ijen <br>
                  14.00 : Diperkirakan tiba di Taman Nasional Baluran and Go Explore <br>
                  17.00 : Tiba di Hotel, cek in <br>
                  16.00 : Free program di Hotel <br>
                  18.00 : Dinner di sekitaran hotel <br>
                  19.00 : Istirahat <br><br>
                  <strong style="font-weight: bold;">Day 2 </strong><br>
                  00.30 : Morning call <br>
                  02.00 : start Trekking mengejar blue fire <br>
                  03.00 : Enjoy Blue Fire, Sunrise dan Panorama Gunung Ijen <br>
                  06.30 : Perjalanan kembali ke rest area Paltuding <br>
                  08.00 : Makan Pagi di hotel dan bersih diri dan istirahat <br>
                  10.00 : Perjalanan menuju ke Bromo <br>
                  15.00 : Tiba di Hotel, cek in dan free program di sekitaran hotel <br>
                  17.30 : Dinner <br>
                  18.30 : Istirahat <br><br>
                  <strong style="font-weight: bold;">Day 3</strong><br>
                  02.30 : Morning call <br>
                  02.45 : Prepare dan oper jeep 4x4 <br>
                  03.00 : Menuju ke Penanjakan 1 spot Golden Sunrise <br>
                  04.00 : Coffee Morning <br>
                  05.00 : Enjoy sunrise Bromo, Capture it. (Jika spot penanjakan masih kurang puas, bisa ke spot Bukit Kingkong / Bukit Cinta) <br>
                  06.00 : Menuju ke Lautan Pasir <br>
                  06.30 : Spot foto di Blok Widodaren <br>
                  07.00 : Explore Spot Kawah Bromo dan Pura Poten <br>
                  08.30 : Spot Pasir Berbisik <br>
                  09.00 : Spot di savana Bukit Teletubies sampe puas <br>
                  10.00 : Kembali ke Penginapan <br>
                  11.00 : Makan di Hotel dan bersih diri <br>
                  11.45 : Cek Out dan kembali ke Malang / Surabaya <br>
                  15.00 : Tiba di Meeting point yang disepakati, thanks and see you soon <br><br>
                  <i>* Itinerary diatas tidak baku, jadwal sewaktu-waktu bisa berubah sesuai kodisi di lapangan tanpa mengganggu agenda secara keseluruhan <br>
                    * Jika drop out Malang, setelah check out langsung menuju Malang, diperkirakan tiba pukul 15.30 <br>
                    * Jadwal bisa kami sesuaikan dengan Jam kedatangan dan Kepulangan Anda</i>

                </p>
              </div>
              <div class="tab-pane fade" id="termcond" role="tabpanel" aria-labelledby="termcond"><br>
                <p style="font-weight: lighter;">
                  - Tanda jadi trip peserta diwajibkan melakukan transfer <strong style="font-weight: bold;">Down Payment</strong> minimal sebesar <strong style="font-weight: bold;">40%</strong> dari total keseluruhan dan sisa pembayaran dilakukan saat penjemputan peserta Tour Bromo Sunrise <br>
                  - Setelah melakukan trasnfer, peserta Trip diminta untuk mengirimkan bukti trasnfer, data peserta, alamat email dan alamat jemput sebagai konfirmasi kepada pihak kami atas tanda jadi trip <br>
                  - Apabila destinasi tujuan tidak memungkinkan untuk dikunjungi karena bencana, cuaca yang tidak mendukung, penutupan tempat wisata, atau sebab lain di luar kendali kami, maka peserta tidak berhak meminta kompensasi atau pengembalian biaya yang telah dibayarkan dan diadakan musyawarah mufakat antara pihak Travel dan Peserta Tour Bromo Sunrise <br>
                  - Jika terjadi force majeur oleh pihak kami, DP kami kembalikan sepenuhnya <br>
                  - Jika terjadi Force Majeur yang disebabkan peserta (ketinggalan kereta, pesawat dan lainnya), peserta dianggap cancel trip dan pembayaran yang sudah dibayarkan hangus <br>
                  - Kami tidak melayani Reschedule Tanggal Trip <br>
                  - <strong style="font-weight: bold;">Cancel trip</strong> oleh peserta sebelum <strong style="font-weight: bold;">H-5</strong>, kami melakukan refund sebesar <strong style="font-weight: bold;">20%</strong> dari semua yang telah dibayarkan <br>
                  - <strong style="font-weight: bold;">Cancel trip</strong> oleh peserta lebih dari <strong style="font-weight: bold;">H-5</strong>, semua yang sudah dibayarkan menjadi hak kami (semua DP hangus) <br>
                  - Kami baru akan memasukkan sebagai list peserta Tour Bromo Sunrise apabila sudah melakukan pembayaran DP <br>
                  - Untuk Down Payment dapat dibayarkan ke Rekening dibawah ini : <br><br>
                  - <strong  style="font-weight: bold;">
                  135-008-111-5758 <br></strong>
                  An.<strong style="font-weight: bold;"> PT Jagad Mahakarya Wisata </strong><strong></strong>
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
          <a class="katalog" href="{{ route('BromoBatu') }}">
            <img src="{{ url('../../frontend/images/katalog/detail5.jpg') }}" width="280" height="280" alt="">
          </a>
        </div>
        <div class="card-profile pt-5">
          <a class="katalog" href="{{ route('BromoMalang') }}">
            <img src="{{ url('../../frontend/images/katalog/detail1.jpg') }}" width="280" height="280" alt="">
          </a>
        </div>
        <div class="card-profile pt-5">
          <a class="katalog" href="{{ route('TourKawahIjen&Baluran') }}">
            <img src="{{ url('../../frontend/images/katalog/detail2.jpg') }}" width="280" height="280" alt="">
          </a>
        </div>
      </div>
    </div>

  </main>
@endsection

