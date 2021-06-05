
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from radixtouch.in/templates/assets/smart/source/light/dashboard3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jun 2020 22:15:09 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive assets Template" />
	<meta name="author" content="SmartUniversity" />
	<title> Gestion des depots des projets </title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- icons -->
	<link href="{{asset('assets/fonts/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/fonts/material-design-icons/material-icon.css')}}" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<!-- data tables -->
	<link href="{{asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('assets/plugins/flatpicker/css/flatpickr.min.css')}}" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/material/material.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/material_style.css')}}">
	<!-- Theme Styles -->
	<link href="{{asset('assets/css/theme/light/theme_style.css')}}" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="{{asset('assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/theme/light/style.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/theme/light/theme-color.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/pages/formlayout.css')}}" rel="stylesheet" type="text/css" />
	
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/assets/smart/source/assets/img/favicon.ico" />
</head>
<!-- end head -->

{{------------------------------------------------Navigation ------------------------------------------------}}

     	@include('layouts.navbarAdmin')
		 
{{------------------------------------------------END Navigation ------------------------------------------------}}


<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
   
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span></span>
				</a>		
		<!-- start color quick setting--> 
		<div class="settingSidebar">
			<a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
			</a>
			<div class="settingSidebar-body ps-container ps-theme-default">
				<div class=" fade show active">
					<div class="setting-panel-header">Setting Panel
					</div>
					<div class="quick-setting slimscroll-style">
						<ul id="themecolors">
							<li>
								<p class="sidebarSettingTitle">Sidebar Color</p>
							</li>
							<li class="complete">
								<div class="theme-color sidebar-theme">
									<a href="#" data-theme="white"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="dark"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="blue"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="indigo"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="cyan"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="green"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="red"><span class="head"></span><span
											class="cont"></span></a>
								</div>
							</li>
							<li>
								<p class="sidebarSettingTitle">Header Brand color</p>
							</li>
							<li class="theme-option">
								<div class="theme-color logo-theme">
									<a href="#" data-theme="logo-white"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-dark"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-blue"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-indigo"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-cyan"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-green"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-red"><span class="head"></span><span
											class="cont"></span></a>
								</div>
							</li>
							<li>
								<p class="sidebarSettingTitle">Header color</p>
							</li>
							<li class="theme-option">
								<div class="theme-color header-theme">
									<a href="#" data-theme="header-white"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-dark"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-blue"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-indigo"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-cyan"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-green"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-red"><span class="head"></span><span
											class="cont"></span></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- end color quick setting -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
							data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left image">
										<img src="{{asset('assets/img/dp.jpg')}}" class="img-circle user-img-circle"
											alt="User Image" />
									</div>
									<div class="pull-left info">
										<p> Administrateur </p>
										<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
												Online</span></a>
									</div>
								</div>
							</li>
							<li class="nav-item start active open">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
									<span class="selected"></span>
									<span class="arrow open"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item   ">
										<a href="/admin-dashboard" class="nav-link ">
											<span class="title">Dashboard 1</span>
										</a>
									</li>
									<li class="nav-item ">
										<a href="/admin-dashboard2" class="nav-link ">
											<span class="title">Dashboard 2</span>
										</a>
									</li>
									<li class="nav-item active">
										<a href="/admin-dashboard3" class="nav-link ">
											<span class="title">Dashboard 3</span>
											<span class="selected"></span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="event.html" class="nav-link nav-toggle"> <i class="material-icons">event</i>
									<span class="title">Event Management</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
									<span class="title">Professors</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="/enseignants" class="nav-link "> <span class="title">All
												Professors</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('enseignants.create') }}" class="nav-link "> <span class="title">Add
												Professor</span>
										</a>
									</li>
									
							
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
									<span class="title">Students</span><span class="arrow"></span></a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_students.html" class="nav-link "> <span class="title">All
												Students</span>
										</a>
									</li>
											<li class="nav-item">
										<a href="#" class="nav-link "> <span class="title">ADD
												Student</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title">Courses</span> <span class="arrow"></span>
									<span class="label label-rouded label-menu label-success">new</span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_courses.html" class="nav-link "> <span class="title">All
												Courses</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_course.html" class="nav-link "> <span class="title">Add
												Course</span>
										</a>
									</li>
								</ul>
							</li>
						
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
									<span class="title">Departments</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_department.html" class="nav-link "> <span class="title">All
												Departments</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_department.html" class="nav-link "> <span class="title">Add
												Department</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">email</i>
									<span class="title">Email</span>
									<span class="arrow"></span>
									<span class="label label-rouded label-menu label-danger">new</span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="email_inbox.html" class="nav-link ">
											<span class="title">Inbox</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="email_view.html" class="nav-link ">
											<span class="title">View Mail</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="email_compose.html" class="nav-link ">
											<span class="title">Compose Mail</span>
										</a>
									</li>
								</ul>
							</li>
						
							
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i class="material-icons">list</i>
									<span class="title">Data Tables</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="basic_table.html" class="nav-link ">
											<span class="title">Basic Tables</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="advanced_table.html" class="nav-link ">
											<span class="title">Advance Tables</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="export_table.html" class="nav-link ">
											<span class="title">Export Tables</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="child_row_table.html" class="nav-link ">
											<span class="title">Child Row Tables</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="group_table.html" class="nav-link ">
											<span class="title">Grouping</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="tableData.html" class="nav-link ">
											<span class="title">Tables With Sourced Data</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i class="material-icons">timeline</i>
									<span class="title">Charts</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="/admin-Apexchart" class="nav-link ">
											<span class="title">Apex chart</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="charts_amchart.html" class="nav-link ">
											<span class="title">amChart</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="charts_echarts.html" class="nav-link ">
											<span class="title">eCharts</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="charts_morris.html" class="nav-link ">
											<span class="title">Morris Charts</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="charts_chartjs.html" class="nav-link ">
											<span class="title">Chartjs</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i class="material-icons">map</i>
									<span class="title">Maps</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="google_maps.html" class="nav-link ">
											<span class="title">Google Maps</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="/admin-vectorMaps" class="nav-link ">
											<span class="title">Vector Maps</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle"> <i
										class="material-icons">description</i>
									<span class="title">Extra pages</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item  ">
										<a href="login.html" class="nav-link "> <span class="title">Login</span>
										</a>
									</li>
									<li class="nav-item  ">
										<a href="sign_up.html" class="nav-link "> <span class="title">Sign Up</span>
										</a>
									</li>
									<li class="nav-item  ">
										<a href="forgot_password.html" class="nav-link "> <span class="title">Forgot
												Password</span>
										</a>
									</li>
									<li class="nav-item"><a href="user_profile.html" class="nav-link "><span
												class="title">Profile</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="contact.html" class="nav-link "> <span class="title">Contact Us</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="lock_screen.html" class="nav-link "> <span class="title">Lock
												Screen</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="page-404.html" class="nav-link "> <span class="title">404 Page</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="page-500.html" class="nav-link "> <span class="title">500 Page</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="blank_page.html" class="nav-link "> <span class="title">Blank
												Page</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i class="material-icons">slideshow</i>
									<span class="title">Multi Level Menu</span>
									<span class="arrow "></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="javascript:;" class="nav-link nav-toggle">
											<i class="fa fa-university"></i> Item 1
											<span class="arrow"></span>
										</a>
										<ul class="sub-menu">
											<li class="nav-item">
												<a href="javascript:;" class="nav-link nav-toggle">
													<i class="fa fa-bell-o"></i> Arrow Toggle
													<span class="arrow "></span>
												</a>
												<ul class="sub-menu">
													<li class="nav-item">
														<a href="javascript:;" class="nav-link">
															<i class="fa fa-calculator"></i> Sample Link 1</a>
													</li>
													<li class="nav-item">
														<a href="#" class="nav-link">
															<i class="fa fa-clone"></i> Sample Link 2</a>
													</li>
													<li class="nav-item">
														<a href="#" class="nav-link">
															<i class="fa fa-cogs"></i> Sample Link 3</a>
													</li>
												</ul>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-file-pdf-o"></i> Sample Link 1</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-rss"></i> Sample Link 2</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-hdd-o"></i> Sample Link 3</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="javascript:;" class="nav-link nav-toggle">
											<i class="fa fa-gavel"></i> Arrow Toggle
											<span class="arrow"></span>
										</a>
										<ul class="sub-menu">
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-paper-plane"></i> Sample Link 1</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-power-off"></i> Sample Link 1</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-recycle"></i> Sample Link 1
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="fa fa-volume-up"></i> Item 3 </a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->
			 <div role="main" class="page-content-wrapper">
			<div class="page-content">
             @yield('main')
            </div> 
			</div>
		
	</div>
	<!-- start js include path -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70.0/jquery.blockUI.min.js"></script>
	<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}" defer></script>
	<script src="{{asset('assets/plugins/popper/popper.js')}}" defer></script>
	<script src="{{asset('assets/plugins/jquery-blockui/jquery.blockui.min.js')}}" defer></script>
	<script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"defer></script>
	<!-- bootstrap -->
	<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"defer></script>
	<script src="{{asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" defer></script>
	<script src="{{asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js')}}" defer></script>
	<script src="{{asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" defer></script>
	<!-- Common js-->
	<script src="{{asset('assets/js/app.js')}}" defer></script>
	<script src="{{asset('assets/js/layout.js')}}" defer></script>
	<script src="{{asset('assets/js/theme-color.js')}}" defer></script>
	<!-- material -->
	<script src="{{asset('assets/plugins/material/material.min.js')}}"defer></script>
	<!-- chart js -->
	<script src="{{asset('assets/plugins/chart-js/Chart.bundle.js')}}" defer></script>
	<script src="{{asset('assets/plugins/chart-js/utils.js')}}"defer></script>
	<script src="{{asset('assets/js/pages/chart/chartjs/home-data3.js')}}"defer></script>
	<script src="{{asset('assets/js/pages/chart/chartjs/home-data2.js')}}" defer></script>
	<script src="{{asset('assets/plugins/sparkline/jquery.sparkline.js')}}"defer></script>
	<script src="{{asset('assets/js/pages/sparkline/sparkline-data.js')}}"defer></script>
	<!-- data tables -->
	<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}" defer></script>
	<script src="{{asset('assets/js/pages/table/table_data.js')}}" defer></script>
	<script src="{{asset('assets/plugins/flatpicker/js/flatpicker.min.js')}}" defer></script>
	<!-- counterup -->
	<script src="{{asset('assets/plugins/counterup/jquery.waypoints.min.js')}}" defer></script>
	<script src="{{asset('assets/plugins/counterup/jquery.counterup.min.js')}}" defer></script>
	<!-- date  js-->
	<script src="{{asset('assets/js/pages/date-time/date-time.init.js')}}" defer></script>
	<!-- Validation  js-->
	<script src="{{asset('assets/js/pages/validation/form-validation.js')}}" defer></script>
	<script src="{{asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}" defer></script>
	<script src="{{asset('assets/plugins/jquery-validation/js/additional-methods.min.js')}}" defer></script>
	<!--apex chart-->
	<script src="{{asset ('assets/plugins/apexcharts/apexcharts.min.js')}}" defer></script>
	<script src="{{asset('assets/js/pages/chart/chartjs/home-data.js')}}" defer ></script>
	<!-- summernote -->
	<script src="{{asset('assets/plugins/summernote/summernote.js')}}" defer></script>
	<script src="{{asset('assets/js/pages/summernote/summernote-data.js')}}" defer></script>
	<script src="{{ asset('js/temp.js') }}" defer></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- vector map -->
	<script src="{{asset('assets/plugins/jqvmap/jquery.vmap.js')}} " defer ></script>
	<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.russia.js')}}" defer ></script>
	<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.world.js')}}" defer ></script>
	<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.europe.js')}}" defer ></script>
	<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.germany.js')}}" defer ></script>
	<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}} " defer></script>
	<script src="{{asset('assets/plugins/jqvmap/data/jquery.vmap.sampledata.js')}}" defer ></script>
	<script src="{{asset('assets/js/pages/map/vector-data.js')}}" defer ></script>
	<!--apex chart-->
	<script src="{{asset('assets/plugins/apexcharts/apexcharts.min.js')}}" defer></script>
	<!-- Page Specific JS File -->
	<script src="{{asset('assets/js/pages/chart/apex/apexcharts.data.js')}}" defer></script>
	
	<!-- end js include path -->
 </body>

<!--- -----scrool  button -------->         
	<div class="scroll-to-top">
	<i class="icon-arrow-up"></i>
      </div>
<!------ end scroll --------->
</html>