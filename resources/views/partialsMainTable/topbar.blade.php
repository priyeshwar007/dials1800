<div id="header">
<div class="header-top-bar">
      <div class="container"> 
        <!-- HEADER-LOGIN -->
        <div class="header-login"> 
        <ul class="navbar-nav ml-auto mt-10">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link login-button" href="{{ route('auth.login') }}"><i class="fa fa-power-off"></i>Login</a>
                                </li>
                                {{-- <li><a href="{{ route('auth.register') }}">Register</a></li> --}}
                            @else
                                <li class="dropdown">
                                    <a href="{{ url::to('/admin/home')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('auth.logout') }}"
                                                onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endguest
            </ul>
        </div>
        <!-- END .HEADER-REGISTER --> 
        
        <!-- HEADER-LOG0 -->
        <div class="header-logo text-center">
          <h2><a href="{{URL::to('/')}}">DIALS<i class="fa fa-globe"></i>1800</a></h2>
        </div>
        <!-- END HEADER LOGO --> 
        
        <!-- HEADER-SOCIAL -->
        <div class="header-social"> <a href="#"> <span><i class="fa fa-share-alt"></i></span> <i class="fa fa-chevron-down social-arrow"></i> </a>
          <ul class="list-inline">
            <li class="active"><a href="#"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
          </ul>
        </div>
        <!-- END HEADER-SOCIAL --> 
        
        <!-- HEADER-LANGUAGE -->
        <div class="header-language"> <a href="#"> <span>EN</span> <i class="fa fa-chevron-down"></i> </a>
          <ul class="list-unstyled">
            <li class="active"><a href="#">EN</a></li>
            <li><a href="#">FR</a></li>
            <li><a href="#">PT</a></li>
            <li><a href="#">IT</a></li>
          </ul>
        </div>
        <!-- END HEADER-LANGUAGE --> 
        
        <!-- CALL TO ACTION -->
        <div class="header-call-to-action"> <a href="{{URL::to('/postadd')}}" class="btn btn-default"><i class="fa fa-plus"></i> Post Ads</a> </div>
        <!-- END .HEADER-CALL-TO-ACTION --> 
        
      </div>
      <!-- END .CONTAINER --> 
    </div>
  </div>
@if(Request::segment(1) !='')
  <div class="page-heading contact-us-heading"> <span></span> <!-- for dark-overlay on the bg -->
        
        <div class="container">
          <h1><span>{{Request::segment(1) }}</span></h1>
          <div class="heading-link"> <a href="{{URL::to('/')}}">Home</a>
          @php
          $pageName = Request::segment(1)
          @endphp
           <i>/</i> <a href="{{URL::to('/'.$pageName)}}">{{Request::segment(1) }}</a> </div>
        </div>

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

      <div id="header" class="category_page_menu">
<div class="container">
      <div class="header-nav-bar home-slide">
        <nav>
          <button><i class="fa fa-bars"></i></button>
          <ul class="primary-nav list-unstyled">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li class="dropdown"><a href="#">Company<i class="fa fa-angle-down"></i></a>
              <ul>
                <li><a href="{{route('aboutus')}}">About Us</a></li>
                <li><a href="{{route('whyChooseUs')}}">Why Choose Us</a></li>
                <li><a href="{{route('ourmission')}}">Our Mission &amp; Vision</a></li>
              </ul>
            </li>
            <li><a href="{{route('services')}}">Services</a></li>
            <li><a href="{{route('pricing')}}">Price Listing</a></li>
            <li><a href="{{route('howitworks')}}">How It Work</a> </li>
            <li><a href="{{route('careers')}}">Careers</a></li>
            <li><a href="{{route('postadd')}}">Post Free Add</a></li>
            <li><a href="{{route('contactus')}}">Contact Us</a></li>
          </ul>
        </nav>
      </div>
      <!-- end .header-nav-bar --> 
    </div>
</div>

      @endif