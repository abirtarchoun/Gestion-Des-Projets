
	@extends('layouts.admin')
	<!-- start page content -->
	@section('main')
			<div class="page-bar">
			<div class="page-title-breadcrumb">
			<div class=" pull-left">
								<div class="page-title">Dashboard</div>
							</div>
							<br>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="/admin-dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>
					<!-- start widget -->
					<div class="state-overview">
						<div class="row">
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-green">
									<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Total Students</span>
										<span class="info-box-number">450</span>
										<div class="progress">
											<div class="progress-bar" style="width: 45%"></div>
										</div>
										<span class="progress-description">
											45% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-yellow">
									<span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
									<div class="info-box-content">
										<span class="info-box-text">New Students</span>
										<span class="info-box-number">155</span>
										<div class="progress">
											<div class="progress-bar" style="width: 40%"></div>
										</div>
										<span class="progress-description">
											40% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-blue">
									<span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Total Course</span>
										<span class="info-box-number">52</span>
										<div class="progress">
											<div class="progress-bar" style="width: 85%"></div>
										</div>
										<span class="progress-description">
											85% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-pink">
									<span class="info-box-icon push-bottom"><i
											class="material-icons">monetization_on</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Fees Collection</span>
										<span class="info-box-number">13,921</span><span>$</span>
										<div class="progress">
											<div class="progress-bar" style="width: 50%"></div>
										</div>
										<span class="progress-description">
											50% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
						</div>
					</div>
					<!-- end widget -->
					<!-- chart start -->
					<div class="row">
						<div class="col-sm-6">
							<div class="card card-box">
								<div class="card-head">
									<header>University Survey</header>
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
						<div class="col-sm-6">
							<div class="card card-box">
								<div class="card-head">
									<header>University Survey</header>
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
					<!-- Chart end -->
					<!-- start course list -->
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12 col-sm-6">
							<div class="blogThumb">
								<div class="thumb-center"><img class="img-responsive" alt="user"
										src="../assets/img/course/course1.jpg"></div>
								<div class="course-box">
									<h4>PHP Development Course</h4>
									<div class="text-muted"><span class="m-r-10">April 23</span>
										<a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>
									</div>
									<p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
									<p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
									<p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
									<button type="button"
										class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read
										More</button>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12 col-sm-6 ">
							<div class="blogThumb">
								<div class="thumb-center"><img class="img-responsive" alt="user"
										src="../assets/img/course/course2.jpg"></div>
								<div class="course-box">
									<h4>PHP Development Course</h4>
									<div class="text-muted"><span class="m-r-10">April 23</span>
										<a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>
									</div>
									<p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
									<p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
									<p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
									<button type="button"
										class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read
										More</button>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12 col-sm-6">
							<div class="blogThumb">
								<div class="thumb-center"><img class="img-responsive" alt="user"
										src="../assets/img/course/course3.jpg"></div>
								<div class="course-box">
									<h4>PHP Development Course</h4>
									<div class="text-muted"><span class="m-r-10">April 23</span>
										<a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>
									</div>
									<p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
									<p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
									<p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
									<button type="button"
										class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read
										More</button>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12 col-sm-6">
							<div class="blogThumb">
								<div class="thumb-center"><img class="img-responsive" alt="user"
										src="../assets/img/course/course4.jpg"></div>
								<div class="course-box">
									<h4>PHP Development Course</h4>
									<div class="text-muted"><span class="m-r-10">April 23</span>
										<a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>
									</div>
									<p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
									<p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
									<p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
									<button type="button"
										class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read
										More</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End course list -->
		</div>
		<!-- end page container -->
        @endsection