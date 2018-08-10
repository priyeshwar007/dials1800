@extends('layouts.mainTable')

@section('content')


<section class="section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					<h2>Results For "{{ $category->name }}"</h2>
					<p>{{ $category->companies->count() }} Results</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="category-sidebar page-sidebar">
                    <div class="custom-search">
                <div class="location-details">
                  <form action="#">
                    <div class="select-country">
                      <label>Country</label>
                      <select class="" data-placeholder="-Select-">
                        <option value="option1">option 1</option>
                        <option value="option2">option 2</option>
                        <option value="option3">option 3</option>
                        <option value="option4">option 4</option>
                      </select>
                    </div>
                    <!-- end .select-country -->
                    
                    <div class="select-state">
                      <label>State</label>
                      <select class="" data-placeholder="-Select-">
                        <option value="option1">option 1</option>
                        <option value="option2">option 2</option>
                        <option value="option3">option 3</option>
                        <option value="option4">option 4</option>
                      </select>
                    </div>
                    <!-- end .select-state -->
                    
                    <div class="zip-code">
                      <label>ZIP Code</label>
                      <input type="text" placeholder="Enter">
                    </div>
                    <!-- end .zip-code -->
                  </form>
                </div>
                <!-- end .location-details -->
                
                <div class="distance-range">
                  <p>
                    <label for="amount">Distance</label>
                    <input type="text" id="amount">
                  </p>
                  <div id="slider-range-min" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 41.4141%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 41.4141%;"></span></div>
                </div>
                <!-- end #distance-range --> 
              </div>


					<div class="widget category-list">
                        <h4 class="widget-header">All Category</h4>
                        <div id="categories">
                        <div class="accordion">
                        <ul class="category-list">
                            @foreach ( $categories_all as $category_all)
                                <li><a href="{{ route('category', [$category_all->id]) }}">{{ $category_all->name}} <span>{{$category_all->companies->count()}}</span></a></li>
                            @endforeach
                        </ul>
                        </div>
                        </div>
                    </div>
				</div>
			</div>
           
			<div class="col-md-9">
				<div class="product-grid-list">
                <h3>DIALS 1800 <span>Categories</span></h3>
					<div class="row mt-30">
                         
                        @foreach ($companies as $singleCompany)
                            <div class="col-sm-12 col-lg-4 col-md-6">
                            
                                <!-- product card -->
                        
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                        @if($singleCompany->logo)<a href="{{ route('company', [$singleCompany->id]) }}"><img class="card-img-top img-fluid" src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $singleCompany->logo) }}"/></a>@endif
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="{{ route('company', [$singleCompany->id]) }}">{{$singleCompany->name}}</a></h4>
                                            @foreach ($singleCompany->categories as $singleCategories)
                                                <ul class="list-inline product-meta">
                                                    <li class="list-inline-item">
                                                        <a href="{{ route('category', [$singleCategories->id]) }}"><i class="fa fa-folder-open-o"></i>{{ $singleCategories->name }}</a>
                                                    </li>
                                                </ul>
                                            @endforeach
                                            <p class="card-text">{{ substr($singleCompany->description, 0, 100) }}...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
					</div>
				</div>
                
                {{ $companies->render() }}
			</div>
		</div>
	</div>
</section>


@stop