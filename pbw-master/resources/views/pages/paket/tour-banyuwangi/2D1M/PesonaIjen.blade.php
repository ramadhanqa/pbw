@extends('layouts.detail')
@section('title')
Tour Ijen-Baluran-Jawatan Benculuk | Paket Tour Wisata Malang Bromo Murah Terbaik
@endsection
@section('content')

    <!-- Jumbotron -->
    <div id="carouselExampleIndicators" class=" carousel slide" data-ride="carousel" style="height:600px;">
      <ol class="carousel-indicators" style="height: 800px;">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="rounded-circle active" style="width: 10px; height: 10px; background-color: black; margin-top: 900px; margin-left: 0px;"></li>
        
        
      </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{url('../../frontend/images/Trekking-Banyuwangi.jpg')}}" alt="First slide">
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
        <div class="row textmain" style="padding-top: 90px;">
          <div class="col-lg-8 pl-lg-5">
            <div class="card card-profile-main">
              
              <div class="profile-text-main pl-lg-2">
                <p class="font-weight-bold">Pesona Kawah Ijen</p>
                <p style="font-weight: lighter;">Pilih Paket Tour Banyuwangi, Paket Wisata Kawah Ijen, Bromo Malang Batu / Paket Wisata Malang Batu / Paket Liburan Keluarga di Bromo Malang, Batu dan Banyuwangi sesuai dengan renacana dan keinginan anda. Kami menyediakan paket wisata dengan tempat wisata terlengkap di Bromo Malang, Batu dan Banyuwangi tentunya berpengalaman dalam melayani anda ketika liburan di Banyuwangi, kawah Ijen, Baluran dll. Kalian ingin liburan di Banyuwangi ? Jangan bingung, kami mempunya solusi dengan memberikan Peket Banyuwangi, Paket Tour Kawah Ijen dan Baluran dll. Dengan pengalaman kami selama melayani Paket Tour Banyuwangi / Paket Wisata Kawah Ijen, kami yakin anda akan sangat puas ketika bergabung atau memilih kami sebagai teman liburan anda selama di Banyuwangi.</p>
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-detail-tab" data-toggle="tab" href="#nav-detailtrip" role="tab" aria-controls="nav-detailtrip" aria-selected="true">Detail Trip</a>
                    <a class="nav-item nav-link" id="nav-hargatour-tab" data-toggle="tab" href="#nav-hargatour" role="tab" aria-controls="nav-hargatour" aria-selected="false">Harga Tour</a>
                    <a class="nav-item nav-link" id="nav-fasilitas-tab" data-toggle="tab" href="#nav-fasilitas" role="tab" aria-controls="nav-fasilitas" aria-selected="false">Fasilitas Trip</a>
                    <a class="nav-item nav-link" id="nav-jadwalperjalanan-tab" data-toggle="tab" href="#jadwalperjalanan" role="tab" aria-controls="jadwalperjalanan" aria-selected="false">Jadwal Perjalanan</a>
                    <a class="nav-item nav-link" id="nav-termcon-tab" data-toggle="tab" href="#termcond" role="tab" aria-controls="termcond" aria-selected="false">Term & Condition</a>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-detailtrip" role="tabpanel" aria-labelledby="nav-detailtrip-tab">
                    <br>
                   <strong> Jadwal </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-weight: lighter;">: Penentuan waktu bebas</span>  <br>
                   <strong>Sifat Trip </strong>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-weight: lighter;">: Private dan tidak digabung dengan peserta lainnya</span>  <br>
                   <strong> Meeting Point </strong> <span style="font-weight: lighter;">: Kota Banyuwangi</span> 
                   <br><br>
                   <strong>Spot wisata yang dikunjungi :</strong><br><br>
                   <strong>Hari ke 1</strong><br>
                   <p style="font-weight: lighter;">
                    - Wisata Taman Nasional Baluran<br>
                    - Taman Jawatan Benculuk<br>
                   </p>
                   <strong>Hari ke 2</strong><br>
                   <p style="font-weight: lighter;">
                    - All Spot Kawah Ijen ( Spot Blue Fire, Penambang Blerang & Puncak Kawah ijen )<br>
                    - Wisata Oleh - oleh Banyuwangi, Osing Delles
                   </p>
                  </div>
                  <div class="tab-pane fade" id="nav-hargatour" role="tabpanel" aria-labelledby="nav-hargatour-tab">
                    <table class="table text-center" ><br>
                      <thead>
                        <th>Jumlah Peserta</th>
                        <th>Hotel 2</th>
                        <th>Hotel 3</th>
                      </thead>
                      <tbody style="font-weight: lighter;">
                        <tr>
                          <td>1 Org</td>
                          <td>6.650.000/Org</td>
                          <td>7.000.000/Org</td>
                        </tr>
                        <tr>
                          <td>2 Org</td>
                          <td>3.625.000/Org</td>
                          <td>3.825.000/Org</td>
                        </tr>
                        <tr>
                          <td>3 Org</td>
                          <td>2.895.000/Org</td>
                          <td>3.095.000/Org</td>
                        </tr>
                        <tr>
                          <td>4 Org</td>
                          <td>2.415.000/Org</td>
                          <td>2.615.000/Org</td>
                        </tr>
                        <tr>
                          <td>5 Org</td>
                          <td>2.175.000/Org</td>
                          <td>2.375.000/Org</td>
                        </tr>
                        <tr>
                          <td>6 Org</td>
                          <td>2.015.000/Org</td>
                          <td>2.200.000/Org</td>
                        </tr>
                      </tbody>
                    </table><br>
                    <p>
                      <strong style="font-style: italic;">Pilihan Hotel *2 : Mahkota Plengkung, Blambangan Hotel, Ijen Homestay<br>
                        Pilihan Hotel *3 : Ketapang Indah Hotel, Grand Harvest Hotel, illira Hotel, Aston in Hotel<br><br>
                        *Peserta diatas 6 Orang Silahkan menghubungi kontak kami<br><br>
                      *Harga diatas tidak berlaku di Periode High Season (Libur Lebaran, Natal dan Tahun Baru) </strong>
                    </p>
                  </div>
                  <div class="tab-pane fade" id="nav-fasilitas" role="tabpanel" aria-labelledby="nav-fasilitas-tab">
                    <br>
                    <p style="font-weight: lighter;">
                      <strong style="font-weight: bold;">Biaya Termasuk : </strong> <br>
                      √ Transportasi Selama Tour (1-6 Orang <strong style="font-weight: bold;">Innova</strong> , 7-12 <strong style="font-weight: bold;">Toyota Hiace</strong>  dan seterusnya)<br>
                      √ BBM, Parkir & Tol<br>
                      √ Tiket Masuk Semua Obyek Wisata<br>
                      √ Akomodasi 2 Malam (pilihan Hotel di menu <strong style="font-style: italic;font-weight: bold;">Harga Tour</strong> )<br>
                      √ Makan Selama Tour ( All you can eat )<br>
                      √ Masker Perlindungan dari Asap Belerang<br>
                      √ Welcome Snack & Air Mineral Selama Tour<br>
                      √ Driver us Guide dan Lokal Guide Kawah Ijen<br>
                      √ P3K Ringan<br>
                      √ Asuransi All Risk
                      <br><br>
                      
                      <Strong style="font-weight: bold;">Biaya Tidak Termasuk : </Strong> <br>
                      √ Makan di luar Jadwal<br>
                      √ Sewa Jaket dan Ojek Kawah ijen<br>
                      √ Tiket Pulang dan Pergi dari Kota Asal
                    </p>
                  </div>
                  <div class="tab-pane fade" id="jadwalperjalanan" role="tabpanel" aria-labelledby="jadwalperjalanan"><br>
                    <p style="font-weight: lighter;">
                      <strong style="font-weight: bold;">Day 1 (B, L & D) </strong><br>
                      08.00 : Penjemputan peserta di meeting point (Bandara atau Stasiun Banyuwangi)<br>
                      08.30 : Makan pagi di Lokal Resto<br>
                      09.30 : Taman Nasional Baluran, mengekplorasi keindahan Savana Bekol dari Menara Pandang dilanjutkan menuju Pantai Bama<br>
                      12.30 : Makan siang di Sego Tempong Mbok Wah, Kuliner khas Banyuwangi<br>
                      13.30 : Wisata Taman Hutan Djawatan Benculuk, Hutan Kota ini memiliki populasi pepohonan yang usianya sudah ribuan tahun. Disini kalian bisa mendapatkan foto-foto terbaik.<br>
                      16.00 : Check In Hotel, bersih diri dan istirahat<br>
                      19.00 : Makan malam di Lokal Resto <br><br>
                      <strong style="font-weight: bold;">Day 2 (B & D) </strong><br>
                      00.00 : Morning call dan persiapan tracking Gunung Ijen<br>
                      00.30 : Perjalanan menuju Shelter Kawah Ijen<br>
                      02.30 : Tiba di Shelter, persiapan administasi dan briefing tracking Ijen<br>
                      03.00 : Memulai tracking Kawah Ijen dengan estimasi waktu 1 sd 1,5 jam<br>
                      04.30 : Spot Blue Fire<br>
                      05.30 : Matahari telah terbit saatnya kita menyaksikan aktivitas penambang belerang Kawah Ijen, hasil Tambang belerang terbesar di pulau Jawa<br>
                      06.30 : Spot puncak Gunung Ijen, dari atas sini kita dapat menyaksikan kaldera dan danau sulfur Kawah Ijen yang berwarna hijau tosca<br>
                      07.30 : Sudah puas dengan keindahan Kawah Ijen, kita kembali menuju shelter<br>
                      08.30 : Tiba di shelter dan melanjutkan perjalanan kembali ke hotel<br>
                      09.30 : Tiba di hotel, Breakfast hotan dan istirahat<br>
                      12.00 : Check Out hotel, melanjutkan perjalanan menuju Osing Deles. Tempat ini merupakan pusat oleh-oleh khas Banyuwangi, setelah berbelanja oleh-oleh kita lanjutkan agenda makan siang di resto Osing Deles<br>
                      13.30 : Pengantaran peserta menuju meting point (Bandara atau Stasiun Banyuwangi)<br>
                      14.00 : tiba di meeting point dan tour berakhir<br><br>
                      <strong style="font-style: italic; font-weight: bold;">*Jadwal di atas tidaklah baku, semua tergantung dengan kondisi trafic dan jadwal kedatangan / kepulangan<br>
                        *Obyek Wisata di atas dapat di ubah sesuai dengan keinginan anda, hubungi customer service untuk perubahan obyek wisata pilihan anda</strong>

                    </p>

                  </div>
                  <div class="tab-pane fade" id="termcond" role="tabpanel" aria-labelledby="termcond"><br>
                    <p style="font-weight: lighter;">
                      - Tanda jadi peserta paket <strong style="font-weight: bold;">Tour</strong>  diharapkan melakukan transfer <strong style="font-weight: bold;">Down Payment</strong>  minimal sebesar <strong style="font-weight: bold;">30%</strong>  dari total keseluruhan dan sisa pembayaran dilakukan saat penjemputan peserta<br>
                      - Setelah melakukan trasnfer, peserta Tour  diminta untuk mengirimkan bukti trasnfer, data peserta, alamat email dan alamat jemput sebagai konfirmasi kepada pihak kami atas tanda jadi trip<br>
                      - Apabila destinasi tujuan tidak memungkinkan untuk dikunjungi karena bencana, cuaca yang tidak mendukung, penutupan tempat wisata, atau sebab lain di luar kendali kami, maka peserta Tour   tidak berhak meminta kompensasi atau pengembalian biaya yang telah dibayarkan dan diadakan musyawarah mufakat antara pihak Travel dan peserta Tour<br>
                      - Jika terjadi force majeur oleh pihak kami, DP kami kembalikan sepenuhnya<br>
                      - Jika terjadi Force Majeur yang disebabkan peserta (ketinggalan kereta, pesawat dan lainnya), peserta dianggap cancel trip<br>
                      - Reschedule Tanggal Tour  hanya dapat dilakukan minimal <strong>H-10</strong>  tanggal keberangkatan<br>
                      - <strong style="font-weight: bold;">Cancel trip</strong>  oleh peserta sebelum <strong style="font-weight: bold;">H-10</strong> , kami hanya melakukan pemotongan biaya administrasi dan biaya lainnya yang sudah kami gunakan untuk kepentingan perjalanan anda dari yang sudah dibayarkan<br>
                      - <strong style="font-weight: bold;">Cancel trip</strong>  oleh peserta lebih dari <strong style="font-weight: bold;">H-5</strong> , semua yang sudah dibayarkan menjadi hak kami (semua DP hangus)<br>
                      - <strong style="font-weight: bold;">Anak usia 4 th</strong>  keatas kami kenakan biaya penuh<br>
                      - Kami baru akan memasukkan sebagai list peserta Tour apabila sudah melakukan pembayaran DP<br>
                      - Untuk Down Payment dapat dibayarkan ke Rekening dibawah ini :<br><br>
                      - <strong style="font-weight: bold;">
                      135-008-111-5758 <br></strong>
                      An. <strong style="font-weight: bold;"> PT Jagad Mahakarya Wisata </strong>
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
              <a class="katalog" href=" {{route('BromoBatu')}}">
                <img src="{{url('../../frontend/images/katalog/detail5.jpg')}}" width="280" height="280" alt="">
              </a>
            </div>
            <div class="card-profile pt-5">
              <a class="katalog" href=" {{route('TourBromoMidnight')}}">
                <img src="{{url('../../frontend/images/katalog/detail3.jpg')}}" width="280" height="280" alt="">
              </a>
            </div>
            <div class="card-profile pt-5">
              <a class="katalog" href="{{route('BromoInap')}}">
                <img src="{{url('../../frontend/images/katalog/detail4.jpg')}}" width="280" height="280" alt="">
              </a>
            </div>
          </div>
        </div>

      </main>
      
@endsection