<!-- navbar info -->
<div class="row head justify-content-center">
    <p class="">Office : 03415051441 | WhatsApp : 08113507073 | Mobile : 08113507073</p>
  </div>
  <!-- navbar menu -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" id="main_navbar">
    <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
      <img src="<?php echo e(url('frontend/images/logo.png')); ?>" width="330" height="60" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-4 ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(route('home')); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo e(route('profil')); ?>">Profil Kami <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Tour Malang Bromo<span class="sr-only">(current)</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li class="nav-item dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Paket Tour 1D
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <li><a class="dropdown-item" href="<?php echo e(route('TourBromoMidnight')); ?>">Paket Tour Bromo Midnight</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('TourKawahIjen')); ?>">Paket Tour Bromo Kawah Ijen</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('MenjanganTabuhan')); ?>">Paket Tour Menjangan& Tabuhan</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('OpenTrip')); ?>">Open Trip Bromo</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              Paket Tour 2D1N
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                              <li><a class="dropdown-item" href="<?php echo e(route('BromoInap')); ?>">Paket Tour Bromo Inap</a></li>
                              <li><a class="dropdown-item" href="<?php echo e(route('BromoBatu')); ?>">Paket Tour Bromo & Kota Batu</a></li>
                              <li><a class="dropdown-item" href="<?php echo e(route('TourKawahIjen&Baluran')); ?>">Paket Tour Kawah Ijen & Baluran</a></li>
                              <li><a class="dropdown-item" href="<?php echo e(route('TourKawahIjen&Menjangan')); ?>">Paket Tour Ijen & Menjangan</a></li>
                          </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Paket Tour 3D2N
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="<?php echo e(route('BromoMalang')); ?>">Paket Tour Bromo & Malang Batu</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('IjenBaluran')); ?>">Paket Tour Bromo Ijen & Baluran</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('BaluranIjen')); ?>">Paket Tour Baluran & Ijen</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('RequestTrip')); ?>">Request Trip</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Tour Banyuwangi<span class="sr-only">(current)</span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li class="nav-item dropdown">
                  <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      One Day Tour
                  </a>
                  <ul class="dropdown-menu left" aria-labelledby="navbarDropdown2">
                      <li><a class="dropdown-item" href="halaman/OneDayTour/TrekingKawahIjen.html">Treking Kawah Ijen</a></li>
                      <li><a class="dropdown-item" href="halaman/OneDayTour/EksplorPulauMenjangan&Tabuhan.html">Explore Pulau Menjangan dan Tabuhan</a></li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Paket Tour 2 Hari 1 Malam
                </a>
                <ul class="dropdown-menu left" aria-labelledby="navbarDropdown2">
                    <li><a class="dropdown-item" href="halaman/PaketTour2H1M/PesonaKawahIjen.html">Pesona Kawah Ijen</a></li>
                    <li><a class="dropdown-item" href="halaman/PaketTour2H1M/PesonaBanyuwangi.html">Pesona Banyuwangi</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Paket Tour 3 Hari 2 Malam
              </a>
              <ul class="dropdown-menu left" aria-labelledby="navbarDropdown2">
                  <li><a class="dropdown-item" href="halaman/PaketTour3H2M/EksplorBanyuwangi.html">Explore Banyuwangi</a></li>
                  <li><a class="dropdown-item" href="halaman/PaketTour3H2M/KelilingBanyuwangi.html">Keliling Banyuwangi</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Paket Tour 4 Hari 3 Malam
              </a>
              <ul class="dropdown-menu left" aria-labelledby="navbarDropdown2">
                  <li><a class="dropdown-item" href="halaman/PaketTour4H3M/KelilingBanyuwangi.html">Menjelajahi Banyuwangi</a></li>
                  <li><a class="dropdown-item" href="halaman/PaketTour4H3M/EksotiskaBanyuwangi.html">Exotisca Banyuwangi</a></li>
              </ul>
          </li>
              </ul>
          </li>
          <!-- Navbarbaru -->
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Contact Us
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a href="<?php echo e(route('booking')); ?>" class="dropdown-item">Booking</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
            <ul class="dropdown-menu left" aria-labelledby="navbarDropdown">
              <input class="form-control form-control-sm mr-0 w-0" type="text" placeholder="Search" aria-label="Search">
            </ul>
          </li>
        </ul>
    </div>
</nav>
<?php /**PATH C:\Users\Afan\Documents\pbw\pbw-uas\jendelawisata\resources\views/includes/navbar.blade.php ENDPATH**/ ?>