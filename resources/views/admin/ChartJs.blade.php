@extends('layouts.admin')
	<!-- start page content -->
	@section('main')
			<div class="page-bar">
			<div class="page-title-breadcrumb">
			<div class=" pull-left">
             <div class="page-title">ChartJs</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="/admin-dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Charts</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">ChartJs</li>
							</ol>
						</div>
					</div>
					<!-- start chart -->
					<div class="row">
						<div class="col-md-12">
							<div class="card card-topline-red">
								<div class="card-head">
									<header>LINE CHART</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body " id="chartjs_line_parent">
									<div class="row">
										<canvas id="chartjs_line"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-topline-lightblue">
								<div class="card-head">
									<header>PIE CHART</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body " id="chartjs_pie_parent">
									<div class="row">
										<canvas id="chartjs_pie" height="120"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-topline-lightblue">
								<div class="card-head">
									<header>BAR CHART</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body " id="chartjs_bar_parent">
									<div class="row">
										<canvas id="chartjs_bar"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-topline-lightblue">
								<div class="card-head">
									<header>POLAR AREA CHART</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body " id="chartjs_polar_parent">
									<div class="row">
										<canvas id="chartjs_polar" height="120"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-topline-lightblue">
								<div class="card-head">
									<header>DOUGHNUT CHART</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body " id="chartjs_doughnut_parent">
									<div class="row">
										<canvas id="chartjs_doughnut" height="120"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-topline-lightblue">
								<div class="card-head">
									<header>RADAR CHART</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body " id="chartjs_radar">
									<div class="row">
										<canvas id="radar_chart" height="120"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
            @endsection