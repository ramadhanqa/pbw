 <!-- Rating -->
 <div class="row rating">
    <form action="#" id="rating-form-4-1">
    <p id="commentt" style="font-weight: lighter;">Nilai Kualitas Konten</p>
    <div id="starmark2" class="item">
      <span style="font-weight: bold; margin-left: -22px;">Berikan Rating</span>
      <span  onmouseover="starmark(this)" onclick="starmark(this)" id="1one" style="font-size:12px;cursor:pointer;"  class="fa fa-star checked"></span>
      <span onmouseover="starmark(this)" onclick="starmark(this)" id="2one"  style="font-size:12px;cursor:pointer;" class="fa fa-star "></span>
      <span onmouseover="starmark(this)" onclick="starmark(this)" id="3one"  style="font-size:12px;cursor:pointer;" class="fa fa-star "></span>
      <span onmouseover="starmark(this)" onclick="starmark(this)" id="4one"  style="font-size:12px;cursor:pointer;" class="fa fa-star"></span>
      <span onmouseover="starmark(this)" onclick="starmark(this)" id="5one"  style="font-size:12px;cursor:pointer;" class="fa fa-star"></span>
      <br/>
      <button  onclick="result()" type="button" style="margin-top:10px;margin-left:5px; border-width: 1px; border-color: grey; margin-bottom: 20px; margin-left: -22px;" class="btn btn-default save-rating">Kirim Rating</button>
    </div>
  </form>
  </div>
</div>

<div class="row footer justify-content-center">
    <p class="">© 2015 Jendela Wisata <a href="<?php echo e(route('OpenTrip')); ?>">Open trip Bromo</a> |<a href="<?php echo e(route('TourBromoMidnight')); ?>"> Tour Bromo</a> |<a href="<?php echo e(route('TourBromoMidnight')); ?>"> Paket Wisata Bromo</a> |<a href="<?php echo e(route('home')); ?>"> Paket Wisata Malang</a> |<a href="<?php echo e(route('BromoMalang')); ?>"> Paket Tour Malang Bromo</a> |<a href="<?php echo e(route('BromoMalang')); ?>"> Paket Tour Bromo Malang</a> All right reserved.
    </p>
  </div>
<?php /**PATH C:\Users\Afan\Documents\pbw\pbw-git\pbw\resources\views/includes/footer.blade.php ENDPATH**/ ?>