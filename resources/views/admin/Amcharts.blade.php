   @extends('layouts.admin')
	<!-- start page content -->
	@section('main')
			<div class="page-bar">
			<div class="page-title-breadcrumb">
			<div class=" pull-left">
            <div class="page-title">amChart</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="/admin-dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Charts</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">amChart</li>
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
										<div id="barChart"></div>
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
										<div id="barchart2"></div>
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
										<div id="lineChart"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
							<div class="card">
								<div class="card-head">
									<header>Donut Chart</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body">
									<div class="recent-report__chart">
										<div id="donutChart"></div>
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
										<div id="pieChart"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
							<div class="card">
								<div class="card-head">
									<header>Gauge Chart</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body">
									<div class="recent-report__chart">
										<div id="gaugeChart"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
							<div class="card">
								<div class="card-head">
									<header>Radial line Chart</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body">
									<div class="recent-report__chart">
										<div id="radialLineChart"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
							<div class="card">
								<div class="card-head">
									<header>Map With Bubble</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body">
									<div class="recent-report__chart">
										<div id="dumbbellPlotChart"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
							<div class="card">
								<div class="card-head">
									<header>Radial line Chart</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body">
									<div class="recent-report__chart">
										<div id="mapBubble"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            @endsection