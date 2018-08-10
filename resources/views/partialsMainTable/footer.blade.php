<footer id="footer">
    <div class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="about-globo">
              <h3>About Dials 1800</h3>
              <div> <a href="#"></a><h2><a href="#"></a><a href="index.html">DIALS <i class="fa fa-globe"></i> 1800</a></h2> <span></span> <!-- This content for overlay effect --> 
              </div>
              <p>DIALS 1800 is a free local classifieds site. Submit ads for free and without creating an account. If you want to buy or sell something, here you can buy or sell items in the store. Start buying and selling in the most easy way on DIALS 1800.</p>
            </div>
            <!-- End .about-globo --> 
          </div>
          <!-- end Grid layout-->
          
          <div class="col-md-3 col-sm-6">
            <h3>Latest From Blog</h3>
            <div class="latest-post clearfix">
              <div class="post-image"> <img src="{{ url('images/home/latest_post_1.jpg') }}" alt="">
                <p><span>12</span>Sep</p>
              </div>
              <h4><a href="#">What’s Your Credit Card Personality?</a></h4>
              <p>Finding the right credit card for oneself is a fine amalgamation...</p>
            </div>
            <div class="latest-post clearfix">
              <div class="post-image"> <img src="{{ url('images/home/latest_post_2.jpg') }}" alt="">
                <p><span>09</span>Sep</p>
              </div>
              <h4><a href="#">Do up your walls – Textured Style!</a></h4>
              <p>Have you ever thought of the blank walls at home as canvases...</p>
            </div>
          </div>
          <!-- end Grid layout-->
          
          <div class="col-md-3 col-sm-6 clearfix">
            <div class="popular-categories">
              <h3>Popular Categories</h3>
              <ul>
                <li><a href="#"><i class="fa fa-shopping-cart"></i>E-commerce</a></li>
                <li><a href="#"><i class="fa fa-paper-plane-o"></i>Entertainment</a></li>
                <li><a href="#"><i class="fa fa-cogs"></i>Industry</a></li>
                <li><a href="#"><i class="fa fa-book"></i>Libraries &amp; Public Office</a></li>
                <li><a href="#"><i class="fa fa-building-o"></i>Real Estate</a></li>
              </ul>
            </div>
            <!-- end .popular-categories--> 
          </div>
          <!-- end Grid layout-->
          
          <div class="col-md-3 col-sm-6">
            <div class="newsletter">
              <h3>Newsletter</h3>
              <form action="#">
                <input type="Email" placeholder="Email address">
                <button><i class="fa fa-plus"></i></button>
              </form>
              <h3>Keep In Touch</h3>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
            <!-- end .newsletter--> 
            
          </div>
          <!-- end Grid layout--> 
        </div>
        <!-- end .row --> 
      </div>
      <!-- end .container --> 
    </div>
    <!-- end .main-footer -->
    
    <div class="copyright">
      <div class="container">
        <p>Copyright 2018 © Dials 1800. All rights reserved. </p>
        <ul class="list-inline">
          <li><a href="{{URL::to('/')}}">Home</a></li>
          <li><a href="{{URL::to('/aboutus')}}">About Us</a></li>
          <li><a href="{{URL::to('/services')}}">Services</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="{{URL::to('/careers')}}">Careers</a></li>
          <li><a href="{{URL::to('/pricing')}}">Pricing</a></li>
          <li><a href="{{URL::to('/contactus')}}">Contact</a></li>
        </ul>
      </div>
      <!-- END .container --> 
    </div>
    <!-- end .copyright--> 
  </footer>

<script type="text/javascript" src="{{ url('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ url('js/jquery-ui.js') }}"></script>
<script type="text/javascript" src="{{ url('js/jquery.ba-outside-events.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/masterslider.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/gomap.js') }}"></script>
<script type="text/javascript" src="{{ url('js/gmaps.js') }}"></script>
<script type="text/javascript" src="{{ url('js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ url('js/scripts.js') }}"></script>

<script>
  var slider = new MasterSlider();
  slider.setup('masterslider', {
   width: 1140,
   height: 920,
   space: 5,
   fullwidth: true,
   speed: 25,
   view: 'flow',
   centerControls: false
  });
  slider.control('arrows', {
   autohide: false
  });


</script>