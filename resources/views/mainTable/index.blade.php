@extends('layouts.mainTable')

@section('content')

<!--===============================
=            Hero Area Master Slider            =
================================-->

<div class="slider-content">
        <div class="master-slider ms-skin-black-2 round-skin" id="masterslider"> 
          
          <!-- new slide -->
          <div class="ms-slide"> 
            <!-- slide background --> 
            <img src="{{ url('images/banner/feature-bg.jpg') }}"  alt=""> 
            <!-- slide text layer -->
            
            <div class="ms-layer ms-caption text-center" style="">
              <h1>The <span>Right</span> place</h1>
              <br/>
              <h2>For business</h2>
            </div>
          </div>
          
          <!-- new slide -->
          <div class="ms-slide"> 
            <!-- slide background --> 
            
            <img src="{{ url('images/banner/price-listing-heading-bg.jpg') }}" alt=""> 
            <!-- slide text layer -->
            <div class="ms-layer ms-caption text-center" style="">
              <h1>The <span>Right</span> place</h1>
              <br>
              <h2>For business</h2>
            </div>
          </div>
          <!-- end of slide --> 
        </div>
        <!-- end of masterslider --> 

        <!-- Advance Search -->
                <div class="advance-search">
                    {!! Form::open([ 'action' => 'HomePageController@table', 'method' => 'get']) !!}
                    <div class="container">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                {!! Form::text('search', old('search'), ['class' => 'form-control', 'placeholder' => 'Search company']) !!}
                                <p class="help-block"></p>
                                @if($errors->has('name'))
                                    <p class="help-block">
                                        {{ $errors->first('name') }}
                                    </p>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                {!! Form::select('categories', $search_categories, null , ['placeholder' => 'Category', 'class' => 'form-control form-control-lg']) !!}
                                <p class="help-block"></p>
                                @if($errors->has('categories'))
                                    <p class="help-block">
                                        {{ $errors->first('categories') }}
                                    </p>
                                @endif
                            </div>
                            <div class="form-group col-md-3">
                                {!! Form::select('city_id', $search_cities, null, ['placeholder' => 'City', 'class' => 'form-control form-control-lg']) !!}
                                <p class="help-block"></p>
                                @if($errors->has('city_id'))
                                    <p class="help-block">
                                        {{ $errors->first('city_id') }}
                                    </p>
                                @endif
                            </div>
                            
                            <div class="form-group col-md-1">
                                <button type="submit"
                                        class="btn btn-default">
                                        <i class="fa fa-search"> </i>
                                </button>
                            </div>
                        </div>


                    {!! Form::close() !!}
                    </div>
                    
                </div>
      </div>

<div id="header">
<div class="container">
      <div class="header-nav-bar home-slide">
        <nav>
          <button><i class="fa fa-bars"></i></button>
          <ul class="primary-nav list-unstyled">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li class="dropdown"><a href="#">Company<i class="fa fa-angle-down"></i></a>
              <ul>
                <li><a href="{{URL::to('/aboutus')}}">About Us</a></li>
                <li><a href="{{URL::to('/whyChooseUs')}}">Why Choose Us</a></li>
                <li><a href="{{URL::to('/ourmission')}}">Our Mission &amp; Vision</a></li>
              </ul>
            </li>
            <li><a href="{{URL::to('/services')}}">Services</a></li>
            <li><a href="{{URL::to('/pricing')}}">Price Listing</a></li>
            <li><a href="{{URL::to('/howitworks')}}">How It Work</a> </li>
            <li><a href="{{URL::to('/careers')}}">Careers</a></li>
            <li><a href="{{URL::to('/postadd')}}">Post Free Add</a></li>
            <li class="bg-color"><a href="{{URL::to('/contactus')}}">Contact Us</a></li>
          </ul>
        </nav>
      </div>
      <!-- end .header-nav-bar --> 
    </div>
</div>
<!--==========================================
=            All Category Section            =
===========================================-->

<section class="category_section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
                <div class="category_listing section_small">
				<div class="section-title">
					<h2>All Categories</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident!</p>
				</div>
                <div class="row">
                    @foreach ($categories_all->take(8) as $category_all)
                        <!-- Category list -->
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                            <div class="category-block">
                                <div class="header">
                                    <i class="{{ $category_all->icon }} icon-bg-{{ $category_all->id }}"></i> 
                                    <h4>
                                        <a href="{{ route('category', [$category_all->id]) }}">{{ $category_all->name }} <p style="display: inline">({{ $category_all->companies->count() }})</p></a> 
                                        
                                    </h4>
                                </div>
                                <ul class="category-list">
                                    @foreach ( $category_all->companies->shuffle()->take(4) as $singleCompany)
                                        <li><a href="{{ route('company', [$singleCompany->id]) }}">{{ $singleCompany->name}} </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div> <!-- /Category List -->               
                    @endforeach
                </div>
            </div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>



<div class="featured-listing" id="featured-list">
    <div class="container">
        <h2><strong>Featured</strong> Advertisments</h2>
      <div class="row clearfix">
        <div class="col-md-3 col-sm-4 col-xs-6">
          <div class="single-product">
            <figure> <img src="{{ url('images/home/post-img-1.jpg') }}" alt="">
              
              
              <figcaption>
                <div class="bookmark"> <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a> </div>
                <div class="read-more"> <a href="#"><i class="fa fa-angle-right"></i> Read More</a> </div>
              </figcaption>
            </figure>
            <h4><a href="#">Featured Cars</a></h4>
            <h5><a href="#">Buy handpicked cars with the best deals.</a></h5>
          </div>
          <!-- end .single-product --> 
          
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <div class="single-product">
            <figure> <img src="{{ url('images/home/post-img-2.jpg') }}" alt="">
              
              
              <figcaption>
                <div class="bookmark"> <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a> </div>
                <div class="read-more"> <a href="#"><i class="fa fa-angle-right"></i> Read More</a> </div>
              </figcaption>
            </figure>
            <h4><a href="#">BPO Jobs</a></h4>
            <h5><a href="#">Find your dream job in BPO industry. </a></h5>
          </div>
          <!-- end .single-product --> 
          
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <div class="single-product">
            <figure> <img src="{{ url('images/home/post-img-3.jpg') }}" alt="">
              
              
              <figcaption>
                <div class="bookmark"> <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a> </div>
                <div class="read-more"> <a href="#"><i class="fa fa-angle-right"></i> Read More</a> </div>
              </figcaption>
            </figure>
            <h4><a href="#">Teacher Jobs</a></h4>
            <h5><a href="#">Find a better paying teaching job opportunity.</a></h5>
          </div>
          <!-- end .single-product --> 
          
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <div class="single-product">
            <figure> <img src="{{ url('images/home/post-img-4.jpg') }}" alt="">
              
              
              <figcaption>
                <div class="bookmark"> <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a> </div>
                <div class="read-more"> <a href="#"><i class="fa fa-angle-right"></i> Read More</a> </div>
              </figcaption>
            </figure>
            <h4><a href="#">Interior Design</a></h4>
            <h5><a href="#">Connect with interior design expert today.</a></h5>
          </div>
          <!-- end .single-product --> 
          
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <div class="single-product">
            <figure> <img src="{{ url('images/home/post-img-5.jpg') }}" alt="">
              
              
              <figcaption>
                <div class="bookmark"> <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a> </div>
                <div class="read-more"> <a href="#"><i class="fa fa-angle-right"></i> Read More</a> </div>
              </figcaption>
            </figure>
            <h4><a href="#">Laptops &amp; Computers</a></h4>
            <h5><a href="#">Buy electronic devices at good price.</a></h5>
          </div>
          <!-- end .single-product --> 
          
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <div class="single-product">
            <figure> <img src="{{ url('images/home/post-img-6.jpg') }}" alt="">
              
              
              <figcaption>
                <div class="bookmark"> <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a> </div>
                <div class="read-more"> <a href="#"><i class="fa fa-angle-right"></i> Read More</a> </div>
              </figcaption>
            </figure>
            <h4><a href="#">Clothing</a></h4>
            <h5><a href="#">Search from a wide rand of indian and western wear.</a></h5>
          </div>
          <!-- end .single-product --> 
          
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <div class="single-product">
            <figure> <img src="{{ url('images/home/post-img-7.jpg') }}" alt="">
              
              
              <figcaption>
                <div class="bookmark"> <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a> </div>
                <div class="read-more"> <a href="#"><i class="fa fa-angle-right"></i> Read More</a> </div>
              </figcaption>
            </figure>
            <h4><a href="#">Latest Car</a></h4>
            <h5><a href="#">Buy your dream and latest car today</a></h5>
          </div>
          <!-- end .single-product --> 
          
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <div class="single-product">
            <figure> <img src="{{ url('images/home/post-img-8.jpg') }}" alt="">
              
              
              <figcaption>
                <div class="bookmark"> <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a> </div>
                <div class="read-more"> <a href="#"><i class="fa fa-angle-right"></i> Read More</a> </div>
              </figcaption>
            </figure>
            <h4><a href="#">RTO Services</a></h4>
            <h5><a href="#">Transfer your vechile paper at affordable price.</a></h5>
          </div>
          <!-- end .single-product --> 
          
        </div>
      </div>
      <!-- end .row -->
      
      <div class="discover-more"> <a class="btn btn-default text-center" href="#"><i class="fa fa-plus-square-o"></i>Discover More</a> </div>
    </div>
    <!-- end .container --> 
  </div>





  <div class="register-content">
    <div class="reg-heading">
      <h1><strong>Register</strong> now</h1>
    </div>
    <div class="registration-details">
      <div class="container">
        <div class="box regular-member ">
          <h2><strong>Regular</strong> Member</h2>
          <p><i class="fa fa-check-circle-o"></i> Free 1 Year Silver Mebership.</p>
          <p><i class="fa fa-check-circle-o"></i> 500 Advertisment Post Per Day.</p>
          <p><i class="fa fa-check-circle-o"></i> 24/7 Customer Support &amp; Tracking.</p>
          <a href="#" class="btn btn-default-inverse"><i class="fa fa-plus"></i> Register Now</a> </div>
        <div class="alternate">
          <h2>OR</h2>
        </div>
        <div class="box business-member">
          <h2><strong>Business</strong> Member</h2>
          <p><i class="fa fa-check-circle-o"></i> Free 2 Year Gold Mebership.</p>
          <p><i class="fa fa-check-circle-o"></i> 2000 Advertisment Post Per Day.</p>
          <p><i class="fa fa-check-circle-o"></i> 24/7 Customer Support &amp; Tracking.</p>
          <a href="#" class="btn btn-default-inverse"><i class="fa fa-plus"></i> Register Now</a> </div>
      </div>
      <!-- END .CONTAINER --> 
    </div>
    <!-- END .REGISTRATION-DETAILS --> 
  </div>





   <!-- OUR PARTNER SLIDER BEGIN -->
  <div class="our-partners">
    <div class="container">
      <h4>Our Partners</h4>
      <div id="partners-slider" class="owl-carousel owl-theme">
        <div class="item"><a href="#"><img src="{{ url('images/home/partner1.png') }}" alt=""></a></div>
        <div class="item"><a href="#"><img src="{{ url('images/home/partner2.png') }}" alt=""></a></div>
        <div class="item"><a href="#"><img src="{{ url('images/home/partner3.png') }}" alt=""></a></div>
        <div class="item"><a href="#"><img src="{{ url('images/home/partner4.png') }}" alt=""></a></div>
        <div class="item"><a href="#"><img src="{{ url('images/home/partner5.png') }}" alt=""></a></div>
        <div class="item"><a href="#"><img src="{{ url('images/home/partner6.png') }}" alt=""></a></div>
        <div class="item"><a href="#"><img src="{{ url('images/home/partner1.png') }}" alt=""></a></div>
        <div class="item"><a href="#"><img src="{{ url('images/home/partner5.png') }}" alt=""></a></div>
        <div class="item"><a href="#"><img src="{{ url('images/home/partner1.png') }}" alt=""></a></div>
        <div class="item"><a href="#"><img src="{{ url('images/home/partner2.png') }}" alt=""></a></div>
        <div class="item"><a href="#"><img src="{{ url('images/home/partner3.png') }}" alt=""></a></div>
        <div class="item"><a href="#"><img src="{{ url('images/home/partner4.png') }}" alt=""></a></div>
      </div>
    </div>
  </div>
  <!-- END OUR PARTNER SLIDER -->


@stop