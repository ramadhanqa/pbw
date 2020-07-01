<?php $__env->startSection('title'); ?>
Profil Kami | Paket Tour Wisata Malang Bromo Murah Terbaik
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main>
    <div class="row main">
      <div class="col-lg-8 pl-lg-5">
        <div class="card card-profile">
          <img src="<?php echo e(url('frontend/images/profil-kami/Banner-Jendelajnk-1.gif')); ?>" width="100%" height="100%" alt="">
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
          <a class="katalog" href="<?php echo e(route('BromoBatu')); ?>">
            <img src="<?php echo e(url('frontend/images/katalog/Bromo-Batu.jpg')); ?>" width="280" height="280" alt="">
          </a>
        </div>
        <div class="card-profile pt-5">
          <a class="katalog" href="<?php echo e(route('TourKawahIjen')); ?>">
            <img src="<?php echo e(url('frontend/images/katalog/Ijen-Midnight.jpg')); ?>" width="280" height="280" alt="">
          </a>
        </div>
      </div>
    </div>

      <div class="fl-map">
        <iframe src="https://maps.google.com/maps?q=Jalan+Dahlia%2C+No.+15%2C+sengkaling+malang&amp;iwloc=near&amp;output=embed" width="100%" height="500px" frameborder="0" style="border:0"></iframe>
      </div>
  </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Afan\Documents\pbw\pbw-git\pbw\resources\views/pages/profil-kami.blade.php ENDPATH**/ ?>