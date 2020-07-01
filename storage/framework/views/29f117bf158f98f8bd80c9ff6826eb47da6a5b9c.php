<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Booking</h1>
        <a href="<?php echo e(route('booking.create')); ?>" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Booking
        </a>
        </div>


        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No Telpon</th>
                                <th>Usia</th>
                                <th>No KTP</th>
                                <th>Tgl Trip</th>
                                <th>Pilihan Trip</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($item->id); ?></td>
                                <td><?php echo e($item->nama); ?></td>
                                <td><?php echo e($item->email); ?></td>
                                <td><?php echo e($item->no_telp); ?></td>
                                <td><?php echo e($item->usia); ?></td>
                                <td><?php echo e($item->no_ktp); ?></td>
                                <td><?php echo e($item->tgl_trip); ?></td>
                                <td><?php echo e($item->pilihan_trip); ?></td>
                                <td>
                                    <a href="<?php echo e(route('booking.edit', $item->id)); ?>" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="<?php echo e(route('booking.destroy', $item->id)); ?>" method="POST" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="8" class="text-center">
                                        Data Kosong
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>





    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Afan\Documents\pbw\pbw-git\resources\views/pages/admin/booking/index.blade.php ENDPATH**/ ?>