<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
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

                <form action="<?php echo e(route('bookings.store')); ?>" method="POST">
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
                        <?php $__currentLoopData = $packets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $packet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($packet->title); ?>">
                            <?php echo e($packet->title); ?>

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
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Afan\Documents\pbw\pbw-git\pbw\resources\views/pages/bookinguser/create.blade.php ENDPATH**/ ?>