<!-- File: resources/views/home.blade.php -->



<?php $__env->startSection('content'); ?>
<section class="client_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-10 mx-auto">
          <div class="heading_container">
            <h2>
              Thành Viên
            </h2>
          </div>
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="detail-box">
                  <h4>
                    Phạm Hoàng Anh
                  </h4>
                  <p>
                    Không biết viết gì
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    Nguyễn Duy Sơn
                  </h4>
                  <p>
                    Không biết viết gì
                </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    Nguyễn Ngọc Phong
                  </h4>
                  <p>
                    Không biết viết gì               
                </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev"></a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"></a>
          </div>
        </div>
      </div>
    </div>
</section>

  <!-- end client section -->




 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Software\xampp\htdocs\Atmosphere\DoAnKi1Aptech\DoAnKi1\resources\views/home.blade.php ENDPATH**/ ?>