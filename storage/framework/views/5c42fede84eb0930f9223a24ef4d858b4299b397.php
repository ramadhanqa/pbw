<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Booking <?php echo e($item->title); ?></h1>
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
                
                <form action="<?php echo e(route('booking.update', $item->id)); ?>" method="POST">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="nama" value="<?php echo e($item->nama); ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <textarea name="email" rows="10" class="d-block w-100 form-control"><?php echo e($item->email); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">Nomor Telpon</label>
                        <textarea name="no_telp" rows="10" class="d-block w-100 form-control"><?php echo e($item->no_telp); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="usia">Usia</label>
                        <textarea name="usia" rows="10" class="d-block w-100 form-control"><?php echo e($item->usia); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_ktp">No KTP</label>
                        <textarea name="no_ktp" rows="10" class="d-block w-100 form-control"><?php echo e($item->no_ktp); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tgl_trip"  style="font-weight: bold; padding-bottom: -15px;">Tanggal Trip :</label>
                        <br>
                        <input  type="date" rows="10" class="d-block w-100 form-control" style="font-weight: bold;"><?php echo e($item->tgl_trip); ?>

                    </div>
                    <div class="form-group">
                        <label for="pilihan_trip" style="font-weight: bold; padding-bottom: -15px;">Pilihan Trip:</label>
                        <br>
                        <select class="form-control" style="font-weight: bold;">
                        <option value=""><?php echo e($item->pilihan_trip); ?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_peserta_lain" style="font-weight: bold; padding-bottom: -15px;">Nama peserta lain & Usia :</label>
                        <br>
                        <textarea style="resize: both;" rows="10" class="form-control d-block w-100" style="font-weight: bold;"><?php echo e($item->nama_peserta_lain); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="jml_org" style="font-weight: bold; padding-bottom: -15px;">Jumlah orang :</label>
                        <br>
                        <textarea style="resize: both;" rows="10" class="form-control d-block w-100" style="font-weight: bold;"><?php echo e($item->jml_org); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="req_jemput" style="font-weight: bold; padding-bottom: -15px;">Request Penjemputan:</label>
                        <br>
                        <textarea style="resize: both;" rows="10" class="form-control d-block w-100" style="font-weight: bold;"><?php echo e($item->req_jemput); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="req_antar" style="font-weight: bold; padding-bottom: -15px;">Request Antar:</label>
                        <br>
                        <textarea style="resize: both;" rows="10" class="form-control d-block w-100" style="font-weight: bold;"><?php echo e($item->req_antar); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pesan" style="font-weight: bold; padding-bottom: -15px;">Pesan:</label>
                        <br>
                        <textarea style="resize: both;" rows="10" class="form-control d-block w-100" style="font-weight: bold;"><?php echo e($item->pesan); ?></textarea>
                    </div>
                    <div class="item">
                    <button type="submit" class="btn btn-primary btn-block">
                        Ubah
                    </button>
                </form>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Afan\Documents\pbw\pbw-git\pbw\resources\views/pages/admin/booking/edit.blade.php ENDPATH**/ ?>