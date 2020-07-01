@extends('layouts.detail')
@section('title')
Keliling Banyuwangi 2 | Paket Tour Wisata Malang Bromo Murah Terbaik
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
        <div class="row textmain" style="padding-top: 120px;">
          <div class="col-lg-8 pl-lg-5">
            <div class="card card-profile-main">
              
              <div class="profile-text-main pl-lg-2">
                <p class="font-weight-bold">
                  Paket Tour Exotiska Banyuwangi
                  </p>
                <p style="font-weight: lighter;">Pilih Paket Tour Banyuwangi, Paket Wisata Kawah Ijen, Bromo Malang Batu / Paket Wisata Malang Batu / Paket Liburan Keluarga di Bromo Malang, Batu dan Banyuwangi sesuai dengan renacana dan keinginan anda. Kami menyediakan paket wisata dengan tempat wisata terlengkap di Bromo Malang, Batu dan Banyuwangi tentunya berpengalaman dalam melayani anda ketika liburan di Banyuwangi, kawah Ijen, Baluran dll. Kalian ingin liburan di Banyuwangi ? Jangan bingung, kami mempunya solusi dengan memberikan Peket Banyuwangi, Paket Tour Kawah Ijen dan Baluran dll. Dengan pengalaman kami selama melayani Paket Tour Banyuwangi / Paket Wisata Kawah Ijen, kami yakin anda akan sangat puas ketika bergabung atau memilih kami sebagai teman liburan anda selama di Banyuwangi.</p>
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-detail-tab" data-toggle="tab" href="#nav-detailtrip" role="tab" aria-controls="nav-detailtrip" aria-selected="true">Detail Tour</a>
                    <a class="nav-item nav-link" id="nav-hargatour-tab" data-toggle="tab" href="#nav-hargatour" role="tab" aria-controls="nav-hargatour" aria-selected="false">Harga Tour</a>
                    <a class="nav-item nav-link" id="nav-fasilitas-tab" data-toggle="tab" href="#nav-fasilitas" role="tab" aria-controls="nav-fasilitas" aria-selected="false">Fasilitas Tour</a>
                    <a class="nav-item nav-link" id="nav-jadwalperjalanan-tab" data-toggle="tab" href="#jadwalperjalanan" role="tab" aria-controls="jadwalperjalanan" aria-selected="false">Jadwal Perjalanan</a>
                    <a class="nav-item nav-link" id="nav-termcon-tab" data-toggle="tab" href="#termcond" role="tab" aria-controls="termcond" aria-selected="false">Term & Condition</a>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-detailtrip" role="tabpanel" aria-labelledby="nav-detailtrip-tab">
                    <br>
                   <strong> Jadwal </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-weight: lighter;">: Penentuan waktu bebas </span>  <br>
                   <strong>Sifat Trip </strong>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span style="font-weight: lighter;">: Private dan tidak digabung dengan peserta lainnya</span>  <br>
                   <strong> Meeting Point </strong> <span style="font-weight: lighter;">: Kota Banyuwangi</span> 
                   <br><br>
                   <strong>Destinasi Favorit Tour Bromo Malang Batu :</strong><br><br>
                   <strong>Hari ke 1</strong><br>
                   <p style="font-weight: lighter;">
                    - Wisata Petik Apel<br>
                    - Wisata Taman Bunga Selecta<br>
                    - Jatim Park 2 (Museum Satwa & Batu Secret Zoo) / Jatim Park 3 (The Legend Star dan Dino Park )<br>
                   </p>
                   <strong>Hari ke 2</strong><br>
                   <p style="font-weight: lighter;">
                    - Museum Angkut and Movie Star<br>
                    - Gunung Bromo All Spot ( Penanjakan, Kawah Bromo, Pure Lohor Poten, Widodaren Hill, Pasir Berbisik dan Savana Bukit Teletubis )<br>
                    - Alun - alun Wisata Kota Batu<br>
                    - Kuliner Ketan Legenda khas Kota Batu<br>
                   </p>
                   <strong>Hari ke 3</strong><br>
                   <p style="font-weight: lighter;">
                    - Wisata Coban Rondo dan Taman Labirin<br>
                    - Wisata Oleh - oleh Khas Malang & Batu<br>
                    - Wisata Kuliner Bakso President khas Malang<br><br></p>
                    <strong>Hari ke 4</strong><br>
                   </p>
                    - <br>
                    - <br>
                   </p>
                  </div>
                  <div class="tab-pane fade" id="nav-hargatour" role="tabpanel" aria-labelledby="nav-hargatour-tab">
                    <table class="table text-center" ><br>
                      <thead>
                        <th>Jumlah Peserta</th>
                        <th>Hotel 2</th>
                        <th>Hotel 3</th>
                      </thead>
                      <tbody>
                        <tr style="font-weight: lighter;">
                          <td>1 Org</td>
                          <td>6.650.000/Org</td>
                          <td>7.000.000/Org</td>
                        </tr>
                        <tr style="font-weight: lighter;">
                          <td>2 Org</td>
                          <td>3.625.000/Org</td>
                          <td>3.825.000/Org</td>
                        </tr>
                        <tr style="font-weight: lighter;">
                          <td>3 Org</td>
                          <td>2.895.000/Org</td>
                          <td>3.095.000/Org</td>
                        </tr>
                        <tr style="font-weight: lighter;">
                          <td>4 Org</td>
                          <td>2.415.000/Org</td>
                          <td>2.615.000/Org</td>
                        </tr>
                        <tr style="font-weight: lighter;">
                          <td>5 Org</td>
                          <td>2.175.000/Org</td>
                          <td>2.375.000/Org</td>
                        </tr>
                        <tr style="font-weight: lighter;">
                          <td>6 Org</td>
                          <td>2.015.000/Org</td>
                          <td>2.200.000/Org</td>
                        </tr>
                      </tbody>
                    </table><br>
                    <p>
                      <strong style="font-style: italic;">Pilihan Hotel *2 : Seulawah Grand View Hotel Batu, Fave Hotel, Front One Boutique Batu. Maxone Hotel<br>
                        Pilihan Hotel *3 : Samara Resort Batu, Aston in hotel Batu, Swiss Bell Hotel, 101 Oj Hotel<br><br>
                        
                        *Peserta diatas 6 Orang Silahkan menghubungi kontak kami<br><br>
                        
                        *Harga diatas tidak berlaku di Periode High Season (Libur Lebaran, Natal dan Tahun Baru) </strong>
                    </p>
                  </div>
                  <div class="tab-pane fade" id="nav-fasilitas" role="tabpanel" aria-labelledby="nav-fasilitas-tab">
                    <br>
                    
                      <strong >Biaya Termasuk : </strong> <br>
                      <p style="font-weight: lighter;">
                      √ Transportasi Selama Tour (1-5 Orang <strong style="font-weight: bold;">Innova</strong> , 6 Orang <strong style="font-weight: bold;">Elf Short</strong> , 7-12 Toyota Hiace dan seterusnya)<br>
                      √ Private Jeep 4x4 selama di Bromo<br>
                      √ Tiket Masuk Semua Obyek Wisata ( Tiket Terusan )<br>
                      √ Akomodasi 2 Malam (pilihan Hotel di menu <strong style="font-style: italic;font-weight: bold;">Harga Tour</strong> )<br>
                      √ Makan Selama Tour ( All you can eat )<br>
                      √ Coffe Morning Bromo & Kursi Untuk Menikmati Suasana Bromo<br>
                      √ Welcome Snack, Air Mineral Selama Tour & Masker<br>
                      √ Driver us Guide, BBM & Parkir Tol<br>
                      √ P3K Ringan<br>
                      √ Asuransi All Risk
                    </p>
                      <br><br>
                      
                      <Strong>Biaya Tidak Termasuk : </Strong> <br>
                      <p style="font-weight: lighter;">
                      √ Makan di luar Jadwal<br>
                      √ Sewa Jaket dan Kuda saat di Bromo<br>
                      √ Tiket Pulang dan Pergi dari Kota Asal
                    </p>
                  </div>
                  <div class="tab-pane fade" id="jadwalperjalanan" role="tabpanel" aria-labelledby="jadwalperjalanan"><br>
                    <p style="font-weight: lighter;">
                      <strong style="font-weight: bold;">Day 1 (L & D) </strong><br>
                      08.00 : Penjemputan Peserta di Meeting Point yang di sepakati dan dilanjutkan menuju Wisata Petik Apel<br>
                      09.00 : <strong style="font-weight: bold;">Wisata Petik Apel</strong> , disni kita belajar dan berwisata di area perkebunan Apel khas Malang Batu<br>
                      10.00 : <strong style="font-weight: bold;">Wisata Taman Bunga Selecta</strong> , hamparan tumbuhan bunga dari ribuan macam jenis Bunga<br>
                      12.00 : Makan Siang di Lokal Resto<br>
                      13.00 : <strong style="font-weight: bold;">Wisata Jatim Park 2 (Batu Secret Zoo & Museum Satwa) / Wisata Jatim Park 3 (The Legend Star)</strong> <br>
                      17.30 : Menuju Hotel dan makan Malam<br>
                      18.30 : Tiba di Hotel, Istirahat persiapan untuk <strong style="font-weight: bold;">Tour Bromo</strong>  <br><br>
                      <strong style="font-weight: bold;">Day 2 (B, L & D) </strong><br>
                      00.30 : Morning call dan menuju Bromo<br>
                      02.30 : Tiba di Park Area Wonokitri Morning<br>
                      03.00 : Menuju ke Penanjakan 1 spot Golden Sunrise<br>
                      04.00 : Coffee Morning sambil menunggu sunrise<br>
                      05.00 : Enjoy sunrise Bromo, Capture it.<br>
                      (Jika spot penanjakan masih kurang puas, bisa ke spot Bukit Kingkong / Bukit Cinta)<br>
                      06.00 : Menuju ke Lautan Pasir dan Breakfast Parcel Hotel<br>
                      06.30 : Spot foto di Blok Widodaren dan Breakfast Parcel Hotel<br>
                      07.00 : Explore Spot Kawah Bromo dan Pura Poten<br>
                      08.30 : Spot Pasir Berbisik<br>
                      09.00 : Spot di savana Bukit Teletubies sampe puas<br>
                      10.30 : Kembali ke Rest Area wonokitri dan Makan Siang<br>
                      11.30 : Kembali menuju Hotel<br>
                      13.00 : Tiba di Hotel dan istirahat<br>
                      16.00 : <strong style="font-weight: bold;"> Wisata Museum Angkut & Pasar Apung</strong><br>
                      19.30 : Makan Malam di Lokal Resto<br>
                      20.00 : Kembali ke hotel atau ke <strong> Alun alun Kota Batu untuk menimati jajanan khas Kuliner Kota Batu yaitu Ketan Legenda</strong><br><br>
                      <strong style="font-weight: bold;">Day 3 (B & L) </strong><br>
                      07.00 : Breakfast Hotel kemudian Menikmati suasana dan fasilitas Hotel<br>
                      09.00 : Wisata <strong style="font-weight: bold;">Coban Rondo dan Taman Labirin</strong> , di tempat ini tersedia beberapa wahana permainan seperti Flying Fox, ATV, Memanah, Bersepeda Ria dll<br>
                      11.00 : <strong style="font-weight: bold;">Wisata Belanja Oleh - oleh Khas Malang dan Batu</strong> <br>
                      12.00 : <strong style="font-weight: bold;"> Wisata Kuliner Bakso President</strong><br>
                      13.00 : Sudah puas dengan Suguhan nikmatnya Bakso President waktunya kita mengantarkan peserta Tour Bromo Malang dan Batu<br>
                      14.00 : Tour Berakhir<br><br>
                      <strong style="font-style: italic;font-weight: bold;">*Jadwal di atas tidaklah baku, semua tergantung dengan kondisi trafic dan jadwal kedatangan / kepulangan<br>
                        *Obyek Wisata di atas dapat di ubah sesuai dengan keinginan anda, hubungi customer service untuk perubahan obyek wisata pilihan anda</strong>

                    </p>

                  </div>
                  <div class="tab-pane fade" id="termcond" role="tabpanel" aria-labelledby="termcond"><br>
                    <p style="font-weight: lighter;">
                      - Tanda jadi peserta paket <strong style="font-weight: bold;">Tour Bromo Malang Batu 3D2N</strong>  diharapkan melakukan transfer <strong style="font-weight: bold;">Down Payment</strong>  minimal sebesar <strong style="font-weight: bold;">30%</strong>  dari total keseluruhan dan sisa pembayaran dilakukan saat penjemputan peserta<br>
                      - Setelah melakukan trasnfer, peserta Tour Bromo Malang Batu 3D2N  diminta untuk mengirimkan bukti trasnfer, data peserta, alamat email dan alamat jemput sebagai konfirmasi kepada pihak kami atas tanda jadi trip<br>
                      - Apabila destinasi tujuan tidak memungkinkan untuk dikunjungi karena bencana, cuaca yang tidak mendukung, penutupan tempat wisata, atau sebab lain di luar kendali kami, maka peserta Tour Bromo Malang Batu 3D2N  tidak berhak meminta kompensasi atau pengembalian biaya yang telah dibayarkan dan diadakan musyawarah mufakat antara pihak Travel dan peserta Tour Bromo Malang Batu 3D2N<br>
                      - Jika terjadi force majeur oleh pihak kami, DP kami kembalikan sepenuhnya<br>
                      - Jika terjadi Force Majeur yang disebabkan peserta (ketinggalan kereta, pesawat dan lainnya), peserta dianggap cancel trip<br>
                      - Reschedule Tanggal Tour Bromo Malang Batu 3D2N hanya dapat dilakukan minimal <strong style="font-weight: bold;">H-10</strong>  tanggal keberangkatan<br>
                      - <strong style="font-weight: bold;">Cancel trip</strong>  oleh peserta sebelum <strong style="font-weight: bold;">H-10</strong> , kami hanya melakukan pemotongan biaya administrasi dan biaya lainnya yang sudah kami gunakan untuk kepentingan perjalanan anda dari yang sudah dibayarkan<br>
                      - <strong style="font-weight: bold;">Cancel trip</strong>  oleh peserta lebih dari <strong style="font-weight: bold;">H-5</strong> , semua yang sudah dibayarkan menjadi hak kami (semua DP hangus)<br>
                      - <strong style="font-weight: bold;">Anak usia 4 th</strong>  keatas kami kenakan biaya penuh<br>
                      - Kami baru akan memasukkan sebagai list peserta Tour Bromo Malang Batu 3D2N apabila sudah melakukan pembayaran DP<br>
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
              <a class="katalog" href="  {{route('BromoBatu')}}">
                <img src="{{url('../../frontend/images/katalog/detail5.jpg')}}" width="280" height="280" alt="">
              </a>
            </div>
            <div class="card-profile pt-5">
              <a class="katalog" href=" {{route('TourBromoMidnight')}}">
                <img src="{{url('../../frontend/images/katalog/detail3.jpg')}}" width="280" height="280" alt="">
              </a>
            </div>
            <div class="card-profile pt-5">
              <a class="katalog" href=" {{route('BromoInap')}}">
                <img src="{{url('../../frontend/images/katalog/detail4.jpg')}}" width="280" height="280" alt="">
              </a>
            </div>
          </div>
        </div>

      </main>
  @endsection