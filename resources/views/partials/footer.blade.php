<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-info">
          <img src="img/logo.png" alt="TheEvenet">
           <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p> 
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            @guest
              <li><i class="fa fa-angle-right"></i> <a href="{{ route('login') }}">Login</a></li>
            @endguest
            @auth
              <li><i class="fa fa-angle-right"></i> <a href="{{ route('dashboard.dashboard') }}">Admin Panel</a></li>
            @endauth
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            @guest
              <li><i class="fa fa-angle-right"></i> <a href="{{ route('login') }}">Login</a></li>
            @endguest
             @auth
               <li><i class="fa fa-angle-right"></i> <a href="{{ route('dashboard.dashboard') }}">Admin Panel</a></li> 
            @endauth 
          </ul>
        </div>

         <div class="col-lg-3 col-md-6 footer-contact">
          <h4>Contact Us</h4>
          <p>
            Csikszereda <br> Szabadság tér, 1. szám<br> Romania <br> 
            <strong>Phone:</strong> 063123213<br>
            <strong>Email:</strong> kocsislaszlo@uni.sapientia.ro<br>
          </p>

          <div class="social-links">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>

        </div> 

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong>SapiEconf</strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</footer><!-- #footer -->
