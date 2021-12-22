@include ('layouts/font_end/head')

<body>

  <!-- ======= Header ======= -->
  @include ('layouts/font_end/header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">

        <div class="col-9">
      <h1>หมวด<span>สินค้า</span></h1>
      <h2>ขนม - SNACK </h2>
    </div>

    <div class="col-3">
    <img src="{{asset('font_end/img/snack.png')}}" alt="coffee" width="200" style="float:right">
  </div> 

      </div>  
    </div> 
  </section>

  <!-- End Hero -->

  <!-- ======= Product_table1 Section ======= -->
  <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
        
        <div class="section-title">
          <h2>ขนม</h2>
          </div>

          <div class="container">
            <div class="row">
              
          <div class="col-4">
          <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="{{asset('font_end/img/s1.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">OAT choco ข้าวโอ๊ตอัดแท่ง</h5>
              <p class="card-text">
                ฿27</p>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="{{asset('font_end/img/s2.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">ไมโลคิวบ์ Milo Cube ไมโลอัดเม็ด 100 เม็ด</h5>
              <p class="card-text">฿135</p>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="{{asset('font_end/img/s3.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">คุกกี้สิงคโปร์ หอม กรอบ อร่อย</h5>
              <p class="card-text">฿45</p>
            </div>
          </div>
        </div>

        </div>
      </div>
                
    </div>
    </section>
    
      <!-- ======= Product_table2 Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
      
      <div class="container">
            <div class="row">
              
          <div class="col-4">
          <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="{{asset('font_end/img/s4.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">สาหร่าย สาหร่ายปรุงรสญี่ปุ่น M&K</h5>
              <p class="card-text">
              ฿35</p>
            </div>
          </div>
        </div>


        </div>
      </div>  

      </div>

      
      <!-- End Featured Services Section -->

   <!-- ======= Footer ======= -->
   @include ('layouts/font_end/footer')
<!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('font_end/vendor/aos/aos.js')}}"></script>
<script src="{{asset('font_end/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('font_end/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('font_end/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('font_end/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('font_end/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('font_end/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('font_end/vendor/waypoints/noframework.waypoints.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('font_end/js/main.js')}}"></script>

</body>

</html>