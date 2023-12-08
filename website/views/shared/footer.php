<?php
$options_category = array(
    'order_by' => 'Id'
);
$categories = get_all('categories', $options_category);
$contactinfo = get_a_record('contactinfo',1);
?>

<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <!-- <img height="45" width="auto" src="public/asset/images/logo3.png" alt=""> -->
          <h2 class="success">Coffee-store</h2>
      
          <!-- description -->
          <address>
                <p class="mb-0"><i class="fa fa-home pr-10"></i> Address: <?php echo  $contactinfo['Address']?></p>
                <p class="mb-0"><i class="fa fa-globe pr-10"></i> <?php echo  $contactinfo['Country']?>, <?php echo  $contactinfo['Address']?></p>
                <p class="mb-0"><i class="fa fa-phone pr-10"></i> Phone : <?php echo  $contactinfo['Phone']?></p>
                <!-- <p class="mb-0"><i class="fa fa-envelope pr-10"></i> Email : <a class="text-light" href="javascript:;"><?php echo  $contactinfo['Email']?></a></p> -->
                <p class="mb-0"><i class="fa fa-skype pr-10"></i> Skype :<a  class="text-light" href="javascript:;"><?php echo  $contactinfo['Skype']?></a></p>
                <p class="mb-0"><i class="fa fa-skype pr-10"></i> Liên lạc qua :<a  class="text-light" href="">Fanpage</a></p>
            </address>
          <p class="alt-color">Chúng tôi luôn đem tới khách hàng trải nghiệm tốt nhất.</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
          <h4>Các trang</h4>
          <ul>
            <li><a href="about">Về chúng tôi</a></li>
            <li><a href="contact">Liên hệ</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
      </div>
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <div class="mobile d-flex">
            <a href="">
              <!-- Icon -->
              <img src="public/asset/images/footer/phone-icon.png" alt="mobile-icon">
            </a>
            <p>Get the Dealsy Mobile App and Save more</p>
          </div>
          <div class="download-btn d-flex my-3">
            <a href="#"><img src="public/asset/images/apps/google-play-store.png" class="img-fluid" alt=""></a>
            <a href="#" class=" ml-3"><img src="public/asset/images/apps/apple-app-store.png" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-12">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright © <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. All Rights Reserved, theme by <a class="text-primary" href="#" target="_blank">Website</a></p>
        </div>
      </div>
      <div class="col-sm-6 col-12">
        <!-- Social Icons -->
        <ul class="social-media-icons text-right">
          <li><a class="fa fa-facebook" href="#" target="_blank"></a></li>
          <li><a class="fa fa-twitter" href="#" target="_blank"></a></li>
          <li><a class="fa fa-pinterest-p" href="#" target="_blank"></a></li>
          <li><a class="fa fa-vimeo" href=""></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>

<!-- JAVASCRIPTS -->
<script src="public/asset/plugins/jQuery/jquery.min.js"></script>
<script src="public/asset/plugins/bootstrap/js/popper.min.js"></script>
<script src="public/asset/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="public/asset/plugins/bootstrap/js/bootstrap-slider.js"></script>
  <!-- tether js -->
<script src="public/asset/plugins/tether/js/tether.min.js"></script>
<script src="public/asset/plugins/raty/jquery.raty-fa.js"></script>
<script src="public/asset/plugins/slick-carousel/slick/slick.min.js"></script>
<script src="public/asset/plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="public/asset/plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="public/asset/plugins/smoothscroll/SmoothScroll.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="public/asset/plugins/google-map/gmap.js"></script>
<script src="public/asset/js/script.js"></script>
</body>
</html>
