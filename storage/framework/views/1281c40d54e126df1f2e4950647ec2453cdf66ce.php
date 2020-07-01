
    <!-- script jquery, file download di jquery harus ditaruh di atas boostrap -->
    <script src="<?php echo e(url('frontend/libraries/jquery/jquery-3.4.1.min.js')); ?>"></script>
    <!-- popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- js di taruh di bagian body , link script -->
    <script src="<?php echo e(url('frontend/libraries/bootstrap/js/bootstrap.js')); ?>"></script>

    <!-- bootnavbar -->
    <script src="<?php echo e(url('frontend/libraries/bootstrap/js/bootnavbar.js')); ?>" ></script>
    <script>
        $(function () {
            $('#main_navbar').bootnavbar({
              // options

              // animation: false

            });
        })
    </script>
    <script>
      var count;

      function starmark(item)
      {
      count=item.id[0];
      sessionStorage.starRating = count;
      var subid= item.id.substring(1);
      for(var i=0;i<5;i++)
      {
      if(i<count)
      {
      document.getElementById((i+1)+subid).style.color="orange";
      }
      else
      {
      document.getElementById((i+1)+subid).style.color="black";
      }


      }

      }

      function result()
      {

      //Rating : Count
      //Review : Comment(id)
      document.getElementById("commentt").innerHTML = "√Terima Kasih Telah Memberi Nilai : "+count+"/5";
      var x = document.getElementById("starmark2");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
      }
      </script>
<?php /**PATH C:\Users\Afan\Documents\pbw\pbw-git\pbw\resources\views/includes/script.blade.php ENDPATH**/ ?>