
<div class="row three">
    <div class="col-lg-7 pl-lg-5">
      <div class="card card-instgram">
        <h3 style="font-weight: lighter;">Our Instagram</h3>
        <img class="rounded-circle" width="65px" height="65px" src="<?php echo e(url('../../frontend/images/logoig.JPG')); ?>" alt=""><p style="font-weight: lighter; padding-left: 90px; width: 1000px; margin-top: -50px; padding-bottom: 30px;">jendelawisata</p>
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
                <br>
                 <br>
                <br>
              <strong>Hanika Try Semarang</strong>
            </div>
            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="carousel-item">
                <p style="font-weight: lighter;"><?php echo e($testimonial->testimoni); ?></p>
                <br>
                   <br>
                  <br>
                   <br>
                  <br>
                <strong><?php echo e($testimonial->nick); ?></strong>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
    </div>
  </div>
  </div>
<?php /**PATH C:\Users\Afan\Documents\pbw\last uas'\pbw\resources\views/includes/detail_about.blade.php ENDPATH**/ ?>