@extends('layouts.admin')
<!-- start page content -->
@section('main')
			
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Notifications</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="{{ route('admin.dashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">UI</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Notifications</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Toast Type</header>
								</div>
								<div class="card-body ">
									<div class="row clearfix jsdemo-notification-button">
										<div class="col-sm-12 col-md-4 col-lg-3">
											<button class="tstInfo btn btn-info">Info Message</button>
										</div>
										<div class="col-sm-12 col-md-4 col-lg-3">
											<button class="tstWarning btn btn-warning">Warning Message</button>
										</div>
										<div class="col-sm-12 col-md-4 col-lg-3">
											<button class="tstSuccess btn btn-success">Success Message</button>
										</div>
										<div class="col-sm-12 col-md-4 col-lg-3">
											<button class="tstError btn btn-danger">Error Message</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>More Options</header>
								</div>
								<div class="card-body ">
									<div class="row clearfix jsdemo-notification-button">
										<div class="col-sm-12 col-md-4 col-lg-3">
											<button class="tstSimple btn btn-info">Simple</button>
										</div>
										<div class="col-sm-12 col-md-4 col-lg-3">
											<button class="tstArray btn btn-info">Text Array</button>
										</div>
										<div class="col-sm-12 col-md-4 col-lg-3">
											<button class="tstHtml btn btn-info">Html Text</button>
										</div>
										<div class="col-sm-12 col-md-4 col-lg-3">
											<button class="tstSticky btn btn-info">Sticky</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Toast Animations</header>
								</div>
								<div class="card-body ">
									<div class="row clearfix jsdemo-notification-button">
										<div class="col-sm-12 col-md-4 col-lg-3">
											<button class="tstFade btn btn-info">Fade</button>
										</div>
										<div class="col-sm-12 col-md-4 col-lg-3">
											<button class="tstSlide btn btn-info">Slide</button>
										</div>
										<div class="col-sm-12 col-md-4 col-lg-3">
											<button class="tstPlain btn btn-info">Plain</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Toast Position</header>
								</div>
								<div class="card-body ">
									<div class="row clearfix jsdemo-notification-button">
										<div class="col-sm-12 col-md-4 col-lg-3 p-b-20">
											<button class="tstBtmLeft btn btn-info">Bottom Left</button>
										</div>
										<div class="col-sm-12 col-md-4 col-lg-3 p-b-20">
											<button class="tstBtmRight btn btn-info">Bottom Right</button>
										</div>
										<div class="col-sm-12 col-md-4 col-lg-3 p-b-20">
											<button class="tstBtmCenter btn btn-info">Bottom Center</button>
										</div>
										<div class="col-sm-12 col-md-4 col-lg-3 p-b-20">
											<button class="tstTopLeft btn btn-info">Top Left</button>
										</div>
										<div class="col-sm-12 col-md-4 col-lg-3">
											<button class="tstTopRight btn btn-info">Top Right</button>
										</div>
										<div class="col-sm-12 col-md-4 col-lg-3">
											<button class="tstTopCenter btn btn-info">Top Center</button>
										</div>
										<div class="col-sm-12 col-md-4 col-lg-3">
											<button class="tstMidCenter btn btn-info">Middle Center</button>
										</div>
										<div class="col-sm-12 col-md-4 col-lg-3">
											<button class="tstCustom btn btn-info">Custom Positon</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->

            
            @endsection