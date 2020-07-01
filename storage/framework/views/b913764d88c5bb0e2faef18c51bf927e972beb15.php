<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>
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

                <form action="<?php echo e(route('travel-packages.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="title" value="<?php echo e(old('title')); ?>">
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea name="about" rows="10" class="d-block w-100 form-control"><?php echo e(old('about')); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="detailtrip">detail trip</label>
                        <textarea name="detailtrip" rows="10" class="d-block w-100 form-control"><?php echo e(old('detailtrip')); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pricetour">pricetour</label>
                        <textarea name="pricetour" rows="10" class="d-block w-100 form-control"><?php echo e(old('pricetour')); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="facilities">facilities</label>
                        <textarea name="facilities" rows="10" class="d-block w-100 form-control"><?php echo e(old('facilities')); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="rundown">rundown</label>
                        <textarea name="rundown" rows="10" class="d-block w-100 form-control"><?php echo e(old('rundown')); ?></textarea>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Afan\Documents\pbw\pbw-git\pbw\resources\views/pages/admin/travel-package/create.blade.php ENDPATH**/ ?>