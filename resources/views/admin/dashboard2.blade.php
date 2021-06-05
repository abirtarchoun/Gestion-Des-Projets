@extends('layouts.admin')
@section('main')
			<div class="page-bar">
			<div class="page-title-breadcrumb">
			<div class=" pull-left">
			<div class="page-title">Dashboard</div>
			</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="/admin-dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>
					<!-- start widget -->
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="row clearfix">
								<div class="col-md-6 col-sm-6 col-12">
									<div class="card">
										<div class="panel-body">
											<h3>Total Students</h3>
											<div
												class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope active">
												<div class="progress-bar progress-bar-success" role="progressbar"
													aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"
													style="width: 65%;"></div>
											</div>
											<span class="text-small margin-top-10 full-width">14% higher than last
												month</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-12">
									<div class="card">
										<div class="panel-body">
											<h3>New Students</h3>
											<div
												class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope active">
												<div class="progress-bar progress-bar-danger" role="progressbar"
													aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"
													style="width: 68%;"></div>
											</div>
											<span class="text-small margin-top-10 full-width">7% higher than last
												month</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-12">
									<div class="card">
										<div class="panel-body">
											<h3>Total Course</h3>
											<div
												class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope active">
												<div class="progress-bar progress-bar-warning" role="progressbar"
													aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"
													style="width: 52%;"></div>
											</div>
											<span class="text-small margin-top-10 full-width">34% higher than last
												month</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-12">
									<div class="card">
										<div class="panel-body">
											<h3>Visitors</h3>
											<div
												class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope active">
												<div class="progress-bar progress-bar-info" role="progressbar"
													aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"
													style="width: 56%;"></div>
											</div>
											<span class="text-small margin-top-10 full-width">20% higher than last
												month</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Income/Expense Report</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row">
										<canvas id="bar-chart"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end widget -->
					<div class="row">
						<div class="col-md-4 col-sm-12 col-12">
							<div class="white-box border-gray">
								<h4 class="box-title"><small class="pull-right m-t-10 text-success"><i
											class="fa fa-sort-asc"></i> 25% High
										then last month</small> Bronze medal</h4>
								<div class="stats-row">
									<div class="stat-item">
										<h6>Overall Growth</h6> <b>35.80%</b>
									</div>
									<div class="stat-item">
										<h6>Montly</h6> <b>45.20%</b>
									</div>
									<div class="stat-item">
										<h6>Day</h6> <b>5.50%</b>
									</div>
								</div>
								<div id="sparkline13"><canvas height="50"
										style="display: inline-block; width: 378px; height: 50px; vertical-align: top;"></canvas>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-12">
							<div class="white-box border-gray">
								<h4 class="box-title"><small class="pull-right m-t-10 text-danger"><i
											class="fa fa-sort-desc"></i> 30% Low then
										last month</small>Silver Medal</h4>
								<div class="stats-row">
									<div class="stat-item">
										<h6>Overall Growth</h6> <b>20.60%</b>
									</div>
									<div class="stat-item">
										<h6>Montly</h6> <b>65.30%</b>
									</div>
									<div class="stat-item">
										<h6>Day</h6> <b>4.90%</b>
									</div>
								</div>
								<div id="sparkline15"><canvas height="50"
										style="display: inline-block; width: 378px; height: 50px; vertical-align: top;"></canvas>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-12">
							<div class="white-box border-gray">
								<h4 class="box-title"><small class="pull-right m-t-10 text-success"><i
											class="fa fa-sort-asc"></i> 20% High
										then last month</small>Gold Medal</h4>
								<div class="stats-row">
									<div class="stat-item">
										<h6>Overall Growth</h6> <b>38.40%</b>
									</div>
									<div class="stat-item">
										<h6>Montly</h6> <b>52.49%</b>
									</div>
									<div class="stat-item">
										<h6>Day</h6> <b>4.70%</b>
									</div>
								</div>
								<div id="sparkline14"><canvas height="50"
										style="display: inline-block; width: 378px; height: 50px; vertical-align: top;"></canvas>
								</div>
							</div>
							</div>
						
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
        @endsection