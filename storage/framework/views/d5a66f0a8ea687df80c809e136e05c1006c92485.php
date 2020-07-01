<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel <?php echo e($item->title); ?></h1>
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
                
                <form action="<?php echo e(route('travel-packages.update', $item->id)); ?>" method="POST">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="title" value="<?php echo e($item->title); ?>">
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea name="about" rows="10" class="d-block w-100 form-control"><?php echo e($item->about); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="detailtrip">detail trip</label>
                        <textarea name="detailtrip" rows="10" class="d-block w-100 form-control"><?php echo e($item->detailtrip); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pricetour">pricetour</label>
                        <textarea name="pricetour" rows="10" class="d-block w-100 form-control"><?php echo e($item->pricetour); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="facilities">facilities</label>
                        <textarea name="facilities" rows="10" class="d-block w-100 form-control"><?php echo e($item->facilities); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="rundown">rundown</label>
                        <textarea name="rundown" rows="10" class="d-block w-100 form-control"><?php echo e($item->rundown); ?></textarea>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Afan\Documents\pbw\pbw-uas\jendelawisata\resources\views/pages/admin/travel-package/edit.blade.php ENDPATH**/ ?>