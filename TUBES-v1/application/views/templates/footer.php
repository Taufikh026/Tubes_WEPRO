<footer class="footer">
  <div class="footer_top">
      <div class="container">
          <div class="row">
              <div class="col-xl-4 col-md-6 col-lg-4 ">
                  <div class="footer_widget">
                      <div class="footer_logo">
                          <a href="#">
                              <img src="img/logoNew.png" alt="">
                          </a>
                      </div>
                      <p class="address_text">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit, sed do <br> eiusmod tempor incididunt ut labore.
                      </p>
                      <div class="socail_links">
                          <ul>
                              <li>
                                  <a href="#">
                                      <i class="ti-facebook"></i>
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                      <i class="ti-twitter-alt"></i>
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                      <i class="fa fa-dribbble"></i>
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                      <i class="fa fa-instagram"></i>
                                  </a>
                              </li>
                          </ul>
                      </div>

                  </div>
              </div>
              <div class="col-xl-2 col-md-6 col-lg-2">
                  <div class="footer_widget">
                      <h3 class="footer_title">
                          Services
                      </h3>
                      <ul class="links">
                          <li><a href="#">Sponsor</a></li>
                          <li><a href="#">Partner</a></li>
                      </ul>
                  </div>
              </div>
             
          </div>
      </div>
  </div>
<!-- footer_end  -->

<?php
    if ($_SESSION['status'] === 'login') {
        echo '<script>$("#login").hide();</script>';
    }else{
        echo '<script>$("#logout").hide();</script>';
        echo '<script>$("#pesan").hide();</script>';

    }
    if ($_SESSION['status_user'] === 'admin') {
        echo '<script>$("#readBali").hide();</script>';
        echo '<script>$("#readBorobudur").hide();</script>';
        echo '<script>$("#readRajaampat").hide();</script>';

    }else{
        echo '<script>$("#userpay").hide();</script>';
    }
    ?>
<!-- JS here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/gijgo.min.js"></script>

<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>

<script src="js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script>
  $('.datepicker').datepicker({
      iconsLibrary: 'fontawesome',
      icons: {
          rightIcon: '<span class="fa fa-calendar"></span>'
      }
  });

  $('.timepicker').timepicker({
      iconsLibrary: 'fontawesome',
      icons: {
          rightIcon: '<span class="fa fa-clock-o"></span>'
      }
  });
$(document).ready(function() {
$('.js-example-basic-multiple').select2();
$('#DataTable').DataTable();

});
</script>

</body>
</html>