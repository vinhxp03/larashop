@extends('master')

{{-- push css --}}
@push('styles')
    <link rel="stylesheet" type="text/css" href="source/plugins/slick-1.8.0/slick.css">
    <link rel="stylesheet" type="text/css" href="source/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="source/styles/responsive.css">
    <style>
    	.carousel-inner img {
		    width: 100%;
		    height: 100%;
		}
    </style>
@endpush

{{-- push js --}}
@push('scripts')
	<script src="source/js/custom.js"></script>
@endpush

@section('content')
<!-- Banner -->
@include('pages.home.banner')

<!-- Characteristics -->
@include('pages.home.characteristics')

<!-- Deals of the week -->
@include('pages.home.deals')

<!-- Popular Categories -->
@include('pages.home.popular')

<!-- Banner 2 -->
@include('pages.home.banner_2')

<!-- Hot New Arrivals -->
@include('pages.home.new_arrivals')

<!-- Best Sellers -->
@include('pages.home.best_sellers')

<!-- Adverts -->
@include('pages.home.adverts')

<!-- Trends -->
@include('pages.home.trends')

<!-- Reviews -->
@include('pages.home.reviews')

<!-- Recently Viewed -->
@include('pages.home.viewed')

<!-- Brands -->
<div class="brands">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="brands_slider_container">
					
					<!-- Brands Slider -->

					<div class="owl-carousel owl-theme brands_slider">
						
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="source/images/brands_1.jpg" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="source/images/brands_2.jpg" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="source/images/brands_3.jpg" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="source/images/brands_4.jpg" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="source/images/brands_5.jpg" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="source/images/brands_6.jpg" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="source/images/brands_7.jpg" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="source/images/brands_8.jpg" alt=""></div></div>

					</div>
					
					<!-- Brands Slider Navigation -->
					<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
					<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

				</div>
			</div>
		</div>
	</div>
</div>

@endsection
