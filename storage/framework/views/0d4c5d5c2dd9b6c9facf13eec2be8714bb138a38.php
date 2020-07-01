<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Gallery </h1>
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
                
                <form action="<?php echo e(route('gallery.update', $item->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="tour_packages_id">Paket Travel</label>
                    <select name="tour_packages_id" required class="form-control">
                        <option value="<?php echo e($item->tour_packages_id); ?>">Jangan diubah</option>
                        <?php $__currentLoopData = $tour_packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $travel_package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($travel_package->id); ?>">
                        <?php echo e($travel_package->title); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" placeholder="Image">
                </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Ubah
                    </button>
                </form>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Afan\Documents\pbw\pbw-uas\jendelawisata\resources\views/pages/admin/gallery/edit.blade.php ENDPATH**/ ?>