@extends('layouts.mainTable')

@section('content')



<!--===================================
=            Store Section            =
====================================-->
<section class="section_small bg-gray">
	<!-- Container Start -->
	<div class="container">
        <h1 class="product-title">{{ $company->name }}</h1>
        <div class="product-meta">
            <ul class="list-inline">
                @foreach ($company->categories as $singleCategories)
                    <li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Category<a href="{{ route('category', [$singleCategories->id]) }}">
                            <span class="label label-info label-many">{{ $singleCategories->name }}</span>
                    </a></li>
                @endforeach
                <li class="list-inline-item"><i class="fa fa-location-arrow"></i> Location<a href="{{ route('search', ['city_id' => $company->city->id]) }}">{{ $company->city->name }}</a></li>
            </ul>
        </div>
		<div class="row">
			<!-- Left sidebar -->
			<div class="col-md-8">
				<div class="product-details">
                    <br>

                    <div class="single_detail_category_page">
                        <div class="col-md-4">
                            @if($company->logo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $company->logo) }}" target="_blank"><img class="card-img-top img-fluid" src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $company->logo) }}"/></a>@endif
                        </div>
    					<div class="col-md-8 content">
    						<div class="tab-content" id="pills-tabContent">
    							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    								<h3 class="tab-title">About company</h3>
    								<p>{{ $company->description}}</p>
    							</div>
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    								<h3 class="tab-title">Where to find</h3>
    								<p>{{ $company->address}}</p>
    							</div>
    						</div>
    					</div>
                    </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<!-- User Profile widget -->
					<div class="widget user detail_page">
						<h4>Other companies in this category</h4>
                        @foreach ($company->categories as $singleCategories)
                            @foreach ($singleCategories->companies->shuffle()->take(10) as $singleCompany)
                            <li><a href="{{ route('company', [$singleCompany->id]) }}">{{ $singleCompany->name }}</a></li>
                            @endforeach
                        @endforeach
					</div>
					<!-- Map Widget -->
				</div>
			</div>
			
		</div>
	</div>
	<!-- Container End -->
</section>

@stop
