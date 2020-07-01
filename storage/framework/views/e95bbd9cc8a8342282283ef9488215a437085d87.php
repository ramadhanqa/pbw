<?php $__env->startSection('title'); ?>
Booking | Paket Tour Wisata Malang Bromo Murah Terbaik
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Booking</h1>
    </div>

    
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    
    <div class="card shadow">
        <div class="card-body">

            <form action="<?php echo e(route('booking.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="email">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="nama" value="<?php echo e(old('nama')); ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="email" value="<?php echo e(old('email')); ?>">
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telpon</label>
                    <input type="number" class="form-control" name="no_telp" placeholder="no_telp" value="<?php echo e(old('no_telp')); ?>">
                </div>
                <div class="form-group">
                    <label for="usia">Usia</label>
                    <input type="number" class="form-control" name="usia" placeholder="usia" value="<?php echo e(old('usia')); ?>">
                </div>
                <div class="form-group">
                    <label for="no_ktp">No KTP</label>
                    <input type="number" class="form-control" name="no_ktp" placeholder="no_ktp" value="<?php echo e(old('no_ktp')); ?>">
                </div>
                <div class="form-group">
                    <label for="tgl_trip" style="font-weight: bold; padding-bottom: -15px;">Tanggal Trip :</label>
                    <br>
                    <input  type="date" name="tgl_trip"  value="" placeholder="tgl_trip" class="form-control" style="font-weight: bold;">
                </div>
                <div class="form-group">
                    <label for="pilihan_trip" style="font-weight: bold; padding-bottom: -15px;">Pilihan Trip:</label>
                    <select name="pilihan_trip" class="form-control" style="font-weight: bold;">
                    <option value="">Pilihan Trip</option>
                    <?php $__currentLoopData = $tour_packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour_package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($tour_package->title); ?>">
                        <?php echo e($tour_package->title); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_peserta_lain">Nama Peserta Lain & Usia</label>
                    <textarea name="nama_peserta_lain" rows="10" class="d-block w-100 form-control"><?php echo e(old('nama_peserta_lain')); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="jml_org">Jumlah Orang</label>
                    <input type="number" class="form-control" name="jml_org" placeholder="jml_org" value="<?php echo e(old('jml_org')); ?>">
                </div>
                <div class="form-group">
                    <label for="req_jemput">Request Penjemputan</label>
                    <textarea name="req_jemput" rows="10" class="d-block w-100 form-control"><?php echo e(old('req_jemput')); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="req_antar">Request Antar</label>
                    <textarea name="req_antar" rows="10" class="d-block w-100 form-control"><?php echo e(old('req_antar')); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea name="pesan" rows="10" class="d-block w-100 form-control"><?php echo e(old('pesan')); ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>


</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('about'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Afan\Documents\pbw\pbw-git\pbw\resources\views/pages/booking.blade.php ENDPATH**/ ?>