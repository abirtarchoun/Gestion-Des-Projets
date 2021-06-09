 @extends('layouts.admin')
 <!-- start page content -->
@section('main')
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Responsive Carousel Slider</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="{{ route('admin.dashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">UI Elements</a>&nbsp;<i
										class="fa fa-angle-right"></i>
								</li>
								<li class="active">Carousel</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div id="owl-demo" class="owl-carousel">
								<div class="item"><img src="{{asset('assets/img/slider/fullimage1.jpg')}}" alt="The Last of us">
								</div>
								<div class="item"><img src="{{asset('assets/img/slider/fullimage2.jpg')}}" alt="GTA V">
								</div>
								<div class="item"><img src="{{asset('assets/img/slider/fullimage3.jpg')}}" alt="Mirror Edge">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>One More Example</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div id="owl-demo2" class="owl-carousel">
								<div class="item"><img src="{{asset('assets/img/slider/owl1.jpg')}}" alt="">
								</div>
								<div class="item"><img src="{{asset('assets/img/slider/owl2.jpg')}}" alt="">
								</div>
								<div class="item"><img src="{{asset('assets/img/slider/owl3.jpg')}}" alt="">
								</div>
								<div class="item"><img src="{{asset('assets/img/slider/owl4.jpg')}}" alt="">
								</div>
								<div class="item"><img src="{{asset('assets/img/slider/owl5.jpg')}}" alt="">
								</div>
								<div class="item"><img src="{{asset('assets/img/slider/owl6.jpg')}}" alt="">
								</div>
								<div class="item"><img src="{{asset('assets/img/slider/owl7.jpg')}}" alt="">
								</div>
								<div class="item"><img src="{{asset('assets/img/slider/owl8.jpg')}}" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
@endsection