@extends('layouts.detail')
@section('title')
Bromo & Kota Batu | Paket Tour Wisata Malang Bromo Murah Terbaik
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
            <p class="font-weight-bold">Paket Tour Bromo & Kota Batu</p>
            <p style="font-weight: lighter;">Pilih Paket Tour Bromo Malang Batu / Paket Wisata Malang Batu / Paket Liburan Keluarga di Bromo Malang dan Batu sesuai dengan renacana dan keinginan anda. Kami menyediakan paket wisata dengan tempat wisata terlengkap di Bromo Malang Batu dan tentunya berpengalaman dalam melayani anda ketika liburan di Bromo Malang dan Batu. Kalian ingin liburan di Bromo Malang dan Batu ? Jangan bingung, kami mempunya solusi dengan memberikan Peket Tour Bromo Malang Batu / Paket Wisata Malang Bromo Batu. Dengan pengalaman kami selama melayani Paket Tour Bromo Malang Batu / Paket Wisata Malang Batu dan Bromo, kami yakin anda akan sangat puas ketika bergabung atau memilih kami sebagai teman liburan anda selama di Bromo Malang dan Batu.</p>
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-detail-tab" data-toggle="tab" href="#nav-detailtrip" role="tab" aria-controls="nav-detailtrip" aria-selected="true">Detail Trip</a>
                <a class="nav-item nav-link" id="nav-hargatour-tab" data-toggle="tab" href="#nav-hargatour" role="tab" aria-controls="nav-hargatour" aria-selected="false">Harga Trip</a>
                <a class="nav-item nav-link" id="nav-fasilitas-tab" data-toggle="tab" href="#nav-fasilitas" role="tab" aria-controls="nav-fasilitas" aria-selected="false">Fasilitas Trip</a>
                <a class="nav-item nav-link" id="nav-jadwalperjalanan-tab" data-toggle="tab" href="#jadwalperjalanan" role="tab" aria-controls="jadwalperjalanan" aria-selected="false">Jadwal Perjalanan</a>
                <a class="nav-item nav-link" id="nav-termcon-tab" data-toggle="tab" href="#termcond" role="tab" aria-controls="termcond" aria-selected="false">Term & Condition</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-detailtrip" role="tabpanel" aria-labelledby="nav-detailtrip-tab"><br>
               <strong> Jadwal </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-weight: lighter;">:  Setiap hari dan Penentuan waktu bebas </span> <br>
               <strong>Sifat Trip </strong>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-weight: lighter;">: Private dan tidak digabung dengan peserta lainnya</span>  <br>
               <strong> Meeting Point </strong> <span style="font-weight: lighter;">: Kota Malang, Batu & Surabaya </spanstyle>
               <br><br>
               <p style="font-weight: lighter;">
                 <strong style="font-weight: bold;">Destinasi Wisata Tour Malang Batu & Gunung Bromo:</strong><br><br>
                 <strong style="font-weight: bold;">Hari ke 1</strong><br>
                 - Wisata Edukasi Petik Apel <br>
                 - Taman Bunga Selecta <br>
                 - Air Terjun Coban Rondo dan Taman Labirin <br>
                 - Museum Angkut Movie Star dan Pasar Apung <br><br>
                 <strong style="font-weight: bold;">Hari ke 2</strong><br>
                - Gunung Bromo ( Penanjakan 1/Bukit Kingkong/Bukit Cinta, Kawah Bromo & Pura Luhur Poten, Pasir Berbisik & Savana Bukit Teletubies ) <br>
                - Wisata Oleh - oleh khas Malang Batu <br>
                - Kuliner Bakso President, makanan khas Malang
               </p>
              </div>
              <div class="tab-pane fade" id="nav-hargatour" role="tabpanel" aria-labelledby="nav-hargatour-tab">
                <table class="table text-center" >
                  <thead>
                    <th>Jumlah Orang</th>
                    <th>Homestay</th>
                    <th>Hotel *3</th>
                  </thead>
                  <tbody style="font-weight: lighter;">
                    <tr>
                      <td>1 Org</td>
                      <td>4.200.000/Pax</td>
                      <td>5.050.000/Pax</td>
                    </tr>
                    <tr>
                      <td>2 Org</td>
                      <td>2.380.000/Pax</td>
                      <td>2.580.000/Pax</td>
                    </tr>
                    <tr>
                      <td>3 Org</td>
                      <td>1.800.000/Pax</td>
                      <td>2.375.000/Pax</td>
                    </tr>
                    <tr>
                      <td>4 Org</td>
                      <td>1.450.000/Pax</td>
                      <td>1.825.000/Pax</td>
                    </tr>
                    <tr>
                      <td>5 Org</td>
                      <td>1.280.000/Pax</td>
                      <td>1.655.000/Pax</td>
                    </tr>
                    <tr>
                      <td>6 Org</td>
                      <td>1.225.000/Pax</td>
                      <td>1.550.000/Pax</td>
                    </tr>
                  </tbody>
                </table>
                <p style="font-style: italic;"><strong>Pilihan Hotel *3</strong> :Lava View Lodge, Bromo Permai Hotel, Cemara Indah Hotel, Whiz Hotel Bromo & SM Hotel Bromo <br>
                 <strong> *Harga diatas tidak berlaku di Periode High Season (Libur Lebaran, Natal dan Tahun Baru </strong>
                </p>
              </div>
              <div class="tab-pane fade" id="nav-fasilitas" role="tabpanel" aria-labelledby="nav-fasilitas-tab"><br>
                <p style="font-weight: lighter;">
                  <strong style="font-weight: bold;">Harga Termasuk : </strong> <br>
                  √ Transport Selama Perjalanan ( <strong style="font-weight: bold;"> Innova untuk 1-5 peserta, Elf Short untuk 6-7 peserta, Toyota Hiace untuk 8-12 peserta </strong> ) <br>
                  √ Jeep 4x4 selama di Bromo <br>
                  √ Tiket all entrance kawasan wisata ( Tiket Terusan ) <br>
                  √ Akomodasi 1 Malam (pilihan ada di menu Harga Trip) <br>
                  √ Makan selama tour Sesuai Jadwal <br>
                  √ Welcome Snack, Air Mineral & Masker <br>
                  √ Driver as Guide <br>
                  √ BBM, Parkir & Tol <br>
                  √ P3K Ringan <br>
          <strong style="font-weight: bold;"> √ Asuransi Perjalanan Wisata </strong> <br> <br>

                  <Strong style="font-weight: bold;">Harga Tidak Termasuk : </Strong> <br>
                  √ Makan di luar jadwal <br>
                  √ Sewa Jaket dan Kuda saat di Bromo <br>
                  √ Tiket Pulang dan Pergi
                </p>
              </div>
              <div class="tab-pane fade" id="jadwalperjalanan" role="tabpanel" aria-labelledby="jadwalperjalanan">
                <p style="font-weight: lighter;"><br>
                  <strong style="font-weight: bold;">Hari ke 1 (L&D)</strong><br>
                  08.00 : Penjemputan peserta di Meeting Point yang telah disepakati <br>
                  09.00 : <strong style="font-weight: bold;">Wisata Edukasi Petik Apel</strong> , disni kita belajar dan berwisata di area perkebunan Apel khas Malang Batu <br>
                  10.00 : <strong style="font-weight: bold;">Wisata Taman Bunga Selecta</strong> , hamparan tumbuhan bunga dari ribuan macam jenis Bunga <br>
                  12.00 : Makan siang di Lokal Resto <br>
                  13.00 : Wisata <strong style="font-weight: bold;">Coban Rondo dan Taman Labirin</strong> , di tempat ini tersedia beberapa wahana permainan seperti Flying Fox, ATV, Memanah, Bersepeda Ria dll <br>
                  15.30 : <strong style="font-weight: bold;">Wisata Museum Angkut & Pasar Apung</strong>   <br>
                  19.00 : Makan Malam di Bebek Sinjay kuliner khas Madura dan di lanjut menuju penginapan bromo <br>
                  21.00 : Tiba di Penginapan, bersih diri dan Istirahat <br><br>
                  <strong style="font-weight: bold;">Hari ke 2 (B&L)</strong><br>
                  02.30 : Morning call <br>
                  02.45 : Prepare dan oper jeep 4x4 <br>
                  03.00 : Menuju ke Penanjakan 1 spot Golden Sunrise <br>
                  04.00 : Coffee Morning (biaya pribadi) <br>
                  05.00 : Enjoy sunrise Bromo, Capture it. (Jika spot penanjakan masih kurang puas, bisa ke spot Bukit Kingkong / Bukit Cinta) <br>
                  06.00 : Spot foto di Blok Widodaren <br>
                  07.00 : Explore Spot Kawah Bromo dan Pura Poten <br>
                  08.00 : Spot Pasir Berbisik dan Spot di savana Bukit Teletubies sampe puas <br>
                  09.00 : Kembali ke Penginapan <br>
                  11.00 : Makan Pagi dan bersih diri <br>
                  11.30 : Cek Out dan kembali ke Malang <br>
                  13.00 : Wisata Kuliner khas Malang Bakso President <br>
                  14.00 : Wisata Oleh - oleh khas Malang Batu <br>
                  15.00 : Pengantaran peserta menuju Meeting Point yang telah di sepakati dan tour berakhir <br><br>
                  <i>    *jadwal diatas tidak baku, jadwal sewaktu-waktu bisa berubah sesuai kodisi di lapangan tanpa mengganggu agenda secara keseluruhan</i>


                </p>
              </div>
              <div class="tab-pane fade" id="termcond" role="tabpanel" aria-labelledby="termcond"><br>
                <p style="font-weight: lighter;">
                  - Tanda jadi trip peserta diwajibkan melakukan transfer <strong style="font-weight: bold;">Down Payment</strong>  minimal sebesar <strong style="font-weight: bold;"> 30% </strong> dari total keseluruhan dan sisa pembayaran dilakukan saat penjemputan peserta Tour Bromo Sunrise <br>
                  - Setelah melakukan trasnfer, peserta diminta untuk mengirimkan bukti trasnfer, data peserta, alamat email dan alamat jemput sebagai konfirmasi kepada pihak kami atas tanda jadi trip <br>
                  - Apabila destinasi tujuan idak memungkinkan untuk dikunjungi karena bencana, cuaca yang tidak mendukung, penutupan tempat wisata, atau sebab lain di luar kendali kami, maka peserta tidak berhak meminta kompensasi atau pengembalian biaya yang telah dibayarkan dan diadakan musyawarah mufakat antara pihak Travel dan Peserta Tour Bromo Sunrise <br>
                  - Jika terjadi force majeur oleh pihak kami, DP kami kembalikan sepenuhnya <br>
                  - Jika terjadi Force Majeur yang disebabkan peserta (ketinggalan kereta, pesawat dan lainnya), peserta dianggap cancel trip dan pembayaran yang sudah dibayarkan hangus <br>
                  - Kami tidak melayani Reschedule Tanggal Trip <br>
                  - <strong style="font-weight: bold;">Cancel trip</strong>  oleh peserta sebelum <strong style="font-weight: bold;">H-5</strong> , kami melakukan refund sebesar <strong style="font-weight: bold;">20%</strong>  dari semua yang telah dibayarkan <br>
                  - <strong style="font-weight: bold;">Cancel trip</strong>  oleh peserta lebih dari <strong style="font-weight: bold;">H-5</strong> , semua yang sudah dibayarkan menjadi hak kami (semua DP hangus) <br>
                  - Anak <strong style="font-weight: bold;">usia 2 th</strong>  keatas kami kenakan biaya penuh <br>
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
          <a class="katalog" href="{{ route('BromoInap') }}">
            <img src="{{ url('../../frontend/images/katalog/detail4.jpg') }}" width="280" height="280" alt="">
          </a>
        </div>
        <div class="card-profile pt-5">
          <a class="katalog" href="{{ route('TourBromoMidnight') }}">
            <img src="{{ url('../../frontend/images/katalog/detail3.jpg') }}" width="280" height="280" alt="">
          </a>
        </div>
        <div class="card-profile pt-5">
          <a class="katalog" href=" {{ route('BromoMalang') }}">
            <img src="{{ url('../../frontend/images/katalog/detail5.jpg') }}" width="280" height="280" alt="">
          </a>
        </div>
      </div>
    </div>

  </main>
@endsection

