	   @extends('layouts.admin')
	<!-- start page content -->
	@section('main')
    	<div class="page-bar">
			<div class="page-title-breadcrumb">
			<div class=" pull-left">
    <div class="page-title">Morris</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="/admin-dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Charts</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Morris</li>
							</ol>
						</div>
					</div>
					<!-- morris chart start -->
					<!-- start line chart -->
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
								<div class="card-body no-padding height-9">
									<div class="row">
										<div id="morris_chart_1" style="width:100%; height: 500px;"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- start area chart -->
					<div class="row">
						<div class="col-md-12">
							<div class="card card-topline-red">
								<div class="card-head">
									<header>AREA CHART</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row">
										<div id="morris_chart_2" style="width:100%; height: 500px;"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- start bar chart -->
					<div class="row">
						<div class="col-md-12">
							<div class="card card-topline-red">
								<div class="card-head">
									<header>BAR CHART</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row">
										<div id="morris_chart_3" style="width:100%; height: 500px;"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- start donut chart -->
					<div class="row">
						<div class="col-md-12">
							<div class="card card-topline-red">
								<div class="card-head">
									<header>DONUT CHART</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row">
										<div id="morris_chart_4" style="width:100%; height: 500px;"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- morris chart end -->
				</div>
			</div>
            @endsection