@extends('layouts.admin')
	<!-- start page content -->
	@section('main')
	<div class="page-bar">
		<div class="page-title-breadcrumb">
		           <div class=" pull-left">
								<div class="page-title">Apex Chart</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="{{ route('admin.dashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Charts</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Apex</li>
							</ol>
						</div>
					</div>
					<!-- start chart -->
					<div class="row clearfix">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
							<div class="card">
								<div class="card-head">
									<header>Bar Chart</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body">
									<div class="recent-report__chart">
										<div id="chart1"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
							<div class="card">
								<div class="card-head">
									<header>Bar Chart</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body">
									<div class="recent-report__chart">
										<div id="chart2"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
							<div class="card">
								<div class="card-head">
									<header>Line Chart</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body">
									<div class="recent-report__chart">
										<div id="chart3"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
							<div class="card">
								<div class="card-head">
									<header>Line Chart</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body">
									<div class="recent-report__chart">
										<div id="chart4"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
							<div class="card">
								<div class="card-head">
									<header>Line &amp; Column Chart</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body">
									<div class="recent-report__chart">
										<div id="chart5"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
							<div class="card">
								<div class="card-head">
									<header>Aria Chart</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body">
									<div class="recent-report__chart">
										<div id="chart6"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
							<div class="card">
								<div class="card-head">
									<header>Pie Chart</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body">
									<div class="recent-report__chart">
										<div id="chart7"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
							<div class="card">
								<div class="card-head">
									<header>Radar Chart</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body">
									<div class="recent-report__chart">
										<div id="chart8"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

    @endsection
