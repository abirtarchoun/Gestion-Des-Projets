@extends('layouts.admin')

<!-- start page content -->
@section('main')
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Buttons</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">UI Elements</a>&nbsp;<i
										class="fa fa-angle-right"></i>
								</li>
								<li class="active">Buttons</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Default Buttons</header>
								</div>
								<div class="card-body ">
									<div class="row">
										<div class="col-md-12">
											<button type="button" class="btn btn-round btn-default">Default</button>
											<button type="button" class="btn btn-round btn-primary">Primary</button>
											<button type="button" class="btn btn-round btn-success">Success</button>
											<button type="button" class="btn btn-round btn-info">Info</button>
											<button type="button" class="btn btn-round btn-warning">Warning</button>
											<button type="button" class="btn btn-round btn-danger">Danger</button>
											<br>
											<h4 class="sub-title">Disable buttons</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<button class="btn btn-default disabled m-b-10">Disabled</button>
											<button class="btn btn-primary disabled m-b-10">Disabled</button>
											<button class="btn btn-success disabled m-b-10">Disabled</button>
											<button class="btn btn-info disabled m-b-10">Disabled</button>
											<button class="btn btn-warning disabled m-b-10">Disabled</button>
											<button class="btn btn-danger disabled m-b-10">Disabled</button>
											<br>
											<h4 class="sub-title">Outline Buttons</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<button type="button"
												class="btn default btn-outline m-b-10">Default</button>
											<button type="button" class="btn red btn-outline m-b-10">Red</button>
											<button type="button"
												class="btn blue-bgcolor btn-outline m-b-10">Blue</button>
											<button type="button" class="btn deepPink btn-outline m-b-10">Deep
												Pink</button>
											<button type="button" class="btn yellow btn-outline m-b-10">Yellow</button>
											<button type="button" class="btn purple btn-outline m-b-10">Purple</button>
											<button type="button" class="btn dark btn-outline m-b-10">Dark</button>
											<br>
											<h4 class="sub-title">Buttons Size</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<button type="button" class="btn btn-default btn-lg m-b-10">Large
												Button</button>
											<button type="button" class="btn btn-primary m-b-10">Default
												Button</button>
											<button type="button" class="btn btn-success btn-sm m-b-10">Small
												Button</button>
											<button type="button" class="btn btn-info btn-xs m-b-10">Extra
												Small Button</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Rounded Buttons</header>
								</div>
								<div class="card-body ">
									<div class="row">
										<div class="col-md-12">
											<button type="button" class="btn btn-circle btn-default">Default</button>
											<button type="button" class="btn btn-circle btn-primary">Primary</button>
											<button type="button" class="btn btn-circle btn-success">Success</button>
											<button type="button" class="btn btn-circle btn-info">Info</button>
											<button type="button" class="btn btn-circle btn-warning">Warning</button>
											<button type="button" class="btn btn-circle btn-danger">Danger</button>
											<br>
											<h4 class="sub-title">Disable Rounded Buttons</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<button class="btn btn-circle btn-default disabled m-b-10">Disabled</button>
											<button class="btn btn-circle btn-primary disabled m-b-10">Disabled</button>
											<button class="btn btn-circle btn-success disabled m-b-10">Disabled</button>
											<button class="btn btn-circle btn-info disabled m-b-10">Disabled</button>
											<button class="btn btn-circle btn-warning disabled m-b-10">Disabled</button>
											<button class="btn btn-circle btn-danger disabled m-b-10">Disabled</button>
											<br>
											<h4 class="sub-title">Outline Rounded Buttons</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<button type="button"
												class="btn default btn-outline btn-circle m-b-10">Default</button>
											<button type="button"
												class="btn red btn-outline btn-circle m-b-10">Red</button>
											<button type="button"
												class="btn blue-bgcolor btn-outline btn-circle m-b-10">Blue</button>
											<button type="button"
												class="btn deepPink btn-outline btn-circle m-b-10">Deep Pink</button>
											<button type="button"
												class="btn yellow btn-outline btn-circle m-b-10">Yellow</button>
											<button type="button"
												class="btn purple btn-outline btn-circle m-b-10">Purple</button>
											<button type="button"
												class="btn dark btn-outline btn-circle m-b-10">Dark</button>
											<br>
											<h4 class="sub-title">Rounded Buttons Size</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<button type="button" class="btn btn-circle btn-default btn-lg m-b-10">Large
												button</button>
											<button type="button" class="btn btn-circle btn-primary m-b-10">Default
												button</button>
											<button type="button" class="btn btn-circle btn-success btn-sm m-b-10">Small
												button</button>
											<button type="button" class="btn btn-circle btn-info btn-xs m-b-10">Extra
												small button</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Group Buttons</header>
								</div>
								<div class="card-body ">
									<div class="row">
										<div class="col-md-12">
											<div class="btn-group">
												<button type="button" class="btn btn-default">Left</button>
												<button type="button" class="btn btn-default">Middle</button>
												<button type="button" class="btn btn-default">Right</button>
											</div>
											<div class="btn-group btn-group-solid">
												<button type="button" class="btn btn-info">Left</button>
												<button type="button" class="btn btn-warning">Middle</button>
												<button type="button" class="btn deepPink-bgcolor">Right</button>
											</div>
											<br>
											<h4 class="sub-title">Vertical buttons groups</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="btn-group-vertical">
												<button class="btn btn-info" type="button">Top</button>
												<button class="btn deepPink-bgcolor" type="button">Middle</button>
												<button class="btn yellow" type="button">Bottom</button>
											</div>
											<br>
											<h4 class="sub-title">Group Checkbox</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="btn-group" data-toggle="buttons">
												<label class="btn btn-primary deepPink-bgcolor">
													<input type="checkbox"> Option 1
												</label>
												<label class="btn btn-primary deepPink-bgcolor">
													<input type="checkbox"> Option 2
												</label>
												<label class="btn btn-primary deepPink-bgcolor">
													<input type="checkbox"> Option 3
												</label>
											</div>
											<br>
											<h4 class="sub-title">Multiple buttons group</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="btn-toolbar mg-bottom-10">
												<div class="btn-group">
													<button type="button" class="btn btn-default">1</button>
													<button type="button" class="btn btn-default">2</button>
													<button type="button" class="btn btn-default">3</button>
													<button type="button" class="btn btn-default">4</button>
												</div>
												<div class="btn-group">
													<button type="button" class="btn btn-default">5</button>
													<button type="button" class="btn btn-default">6</button>
													<button type="button" class="btn btn-default">7</button>
												</div>
												<div class="btn-group">
													<button type="button" class="btn btn-default">8</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Rounded Group Buttons</header>
								</div>
								<div class="card-body ">
									<div class="row">
										<div class="col-md-12">
											<div class="btn-group btn-group-circle">
												<button type="button" class="btn btn-default">Left</button>
												<button type="button" class="btn btn-default">Middle</button>
												<button type="button" class="btn btn-default">Right</button>
											</div>
											<div class="btn-group btn-group-circle btn-group-solid">
												<button type="button" class="btn btn-info">Left</button>
												<button type="button" class="btn btn-warning">Middle</button>
												<button type="button" class="btn deepPink-bgcolor">Right</button>
											</div>
											<br>
											<h4 class="sub-title">Vertical buttons groups</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="btn-group-vertical btn-group-vertical-circle margin-right-10">
												<button class="btn btn-info" type="button">Top</button>
												<button class="btn deepPink-bgcolor" type="button">Middle</button>
												<button class="btn yellow" type="button">Bottom</button>
											</div>
											<br>
											<h4 class="sub-title">Group Checkbox</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="btn-group btn-group-circle" data-toggle="buttons">
												<label class="btn btn-primary deepPink-bgcolor">
													<input type="checkbox"> Option 1
												</label>
												<label class="btn btn-primary deepPink-bgcolor">
													<input type="checkbox"> Option 2
												</label>
												<label class="btn btn-primary deepPink-bgcolor">
													<input type="checkbox"> Option 3
												</label>
											</div>
											<br>
											<h4 class="sub-title">Multiple buttons group</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="btn-toolbar mg-bottom-10">
												<div class="btn-group btn-group-circle">
													<button type="button" class="btn btn-default">1</button>
													<button type="button" class="btn btn-default">2</button>
													<button type="button" class="btn btn-default">3</button>
													<button type="button" class="btn btn-default">4</button>
												</div>
												<div class="btn-group btn-group-circle">
													<button type="button" class="btn btn-default">5</button>
													<button type="button" class="btn btn-default">6</button>
													<button type="button" class="btn btn-default">7</button>
												</div>
												<div class="btn-group">
													<button type="button" class="btn btn-circle btn-default">8</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Buttons With Icons</header>
								</div>
								<div class="card-body ">
									<div class="row">
										<div class="col-md-12">
											<button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add
											</button>
											<button data-toggle="button" class="btn btn-primary"><i
													class="fa fa-thumbs-up "></i> 12</button>
											<button type="button" class="btn btn-info "><i class="fa fa-cogs"></i>
												Setting</button>
											<button type="button" class="btn btn-default "><i
													class="fa fa-cloud-upload"></i> Upload</button>
											<button data-toggle="button" class="btn btn-default"><i
													class="fa fa-font"></i>
											</button>
											<button data-toggle="button" class="btn btn-default"><i
													class="fa fa-search"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Rounded Buttons With Icons</header>
								</div>
								<div class="card-body ">
									<div class="row">
										<div class="col-md-12">
											<button type="button" class="btn btn-circle btn-success"><i
													class="fa fa-plus"></i> Add </button>
											<button data-toggle="button" class="btn btn-circle btn-primary"><i
													class="fa fa-thumbs-up "></i> 12</button>
											<button type="button" class="btn btn-circle btn-info "><i
													class="fa fa-cogs"></i> Setting</button>
											<button type="button" class="btn btn-circle btn-default "><i
													class="fa fa-cloud-upload"></i> Upload</button>
											<button data-toggle="button" class="btn btn-circle btn-default"><i
													class="fa fa-font"></i>
											</button>
											<button data-toggle="button" class="btn btn-circle btn-default"><i
													class="fa fa-search"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Dropdowns Buttons</header>
								</div>
								<div class="card-body ">
									<div class="btn-group">
										<button data-toggle="dropdown" class="btn btn-default dropdown-toggle m-r-20"
											type="button">
											Default <span class="caret"></span>
										</button>
										<ul role="menu" class="dropdown-menu">
											<li><a href="#">New File</a>
											</li>
											<li><a href="#">Save as</a>
											</li>
											<li><a href="#">Open With</a>
											</li>
											<li class="divider"></li>
											<li><a href="#">Exit</a>
											</li>
										</ul>
									</div>
									<!-- button-group -->
									<div class="btn-group">
										<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle m-r-20"
											type="button">
											Primary <span class="caret"></span>
										</button>
										<ul role="menu" class="dropdown-menu">
											<li><a href="#">New File</a>
											</li>
											<li><a href="#">Save as</a>
											</li>
											<li><a href="#">Open With</a>
											</li>
											<li class="divider"></li>
											<li><a href="#">Exit</a>
											</li>
										</ul>
									</div>
									<!-- button-group -->
									<div class="btn-group">
										<button data-toggle="dropdown" class="btn btn-success dropdown-toggle m-r-20"
											type="button">
											Success <span class="caret"></span>
										</button>
										<ul role="menu" class="dropdown-menu">
											<li><a href="#">New File</a>
											</li>
											<li><a href="#">Save as</a>
											</li>
											<li><a href="#">Open With</a>
											</li>
											<li class="divider"></li>
											<li><a href="#">Exit</a>
											</li>
										</ul>
									</div>
									<!-- button-group -->
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Rounded Buttons With Icons</header>
								</div>
								<div class="card-body ">
									<div class="btn-group">
										<button data-toggle="dropdown"
											class="btn btn-default btn-circle dropdown-toggle m-r-20" type="button">
											Default <span class="caret"></span>
										</button>
										<ul role="menu" class="dropdown-menu">
											<li><a href="#">New File</a>
											</li>
											<li><a href="#">Save as</a>
											</li>
											<li><a href="#">Open With</a>
											</li>
											<li class="divider"></li>
											<li><a href="#">Exit</a>
											</li>
										</ul>
									</div>
									<!-- button-group -->
									<div class="btn-group">
										<button data-toggle="dropdown"
											class="btn btn-primary btn-circle dropdown-toggle m-r-20" type="button">
											Primary <span class="caret"></span>
										</button>
										<ul role="menu" class="dropdown-menu">
											<li><a href="#">New File</a>
											</li>
											<li><a href="#">Save as</a>
											</li>
											<li><a href="#">Open With</a>
											</li>
											<li class="divider"></li>
											<li><a href="#">Exit</a>
											</li>
										</ul>
									</div>
									<!-- button-group -->
									<div class="btn-group">
										<button data-toggle="dropdown"
											class="btn btn-success btn-circle dropdown-toggle m-r-20" type="button">
											Success <span class="caret"></span>
										</button>
										<ul role="menu" class="dropdown-menu">
											<li><a href="#">New File</a>
											</li>
											<li><a href="#">Save as</a>
											</li>
											<li><a href="#">Open With</a>
											</li>
											<li class="divider"></li>
											<li><a href="#">Exit</a>
											</li>
										</ul>
									</div>
									<!-- button-group -->
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Split Dropdowns Button </header>
								</div>
								<div class="card-body ">
									<div class="btn-group">
										<button type="button" class="btn btn-default">Default</button>
										<button type="button" class="btn btn-default dropdown-toggle m-r-20"
											data-toggle="dropdown">
											<i class="fa fa-angle-down"></i>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">New File</a>
											</li>
											<li><a href="#">Save as</a>
											</li>
											<li><a href="#">Open With</a>
											</li>
											<li class="divider"></li>
											<li><a href="#">Exit</a>
											</li>
										</ul>
									</div>
									<!-- button-group -->
									<div class="btn-group">
										<button type="button" class="btn btn-primary">Primary</button>
										<button type="button" class="btn btn-primary dropdown-toggle m-r-20"
											data-toggle="dropdown">
											<i class="fa fa-angle-down"></i>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">New File</a>
											</li>
											<li><a href="#">Save as</a>
											</li>
											<li><a href="#">Open With</a>
											</li>
											<li class="divider"></li>
											<li><a href="#">Exit</a>
											</li>
										</ul>
									</div>
									<!-- button-group -->
									<div class="btn-group">
										<button type="button" class="btn btn-success">Success</button>
										<button type="button" class="btn btn-success dropdown-toggle m-r-20"
											data-toggle="dropdown">
											<i class="fa fa-angle-down"></i>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">New File</a>
											</li>
											<li><a href="#">Save as</a>
											</li>
											<li><a href="#">Open With</a>
											</li>
											<li class="divider"></li>
											<li><a href="#">Exit</a>
											</li>
										</ul>
									</div>
									<!-- button-group -->
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Split Dropdowns Rounded Button</header>
								</div>
								<div class="card-body ">
									<div class="btn-group btn-group-circle">
										<button type="button" class="btn btn-default">Default</button>
										<button type="button"
											class="btn btn-circle-right btn-default dropdown-toggle m-r-20"
											data-toggle="dropdown">
											<i class="fa fa-angle-down"></i>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">New File</a>
											</li>
											<li><a href="#">Save as</a>
											</li>
											<li><a href="#">Open With</a>
											</li>
											<li class="divider"></li>
											<li><a href="#">Exit</a>
											</li>
										</ul>
									</div>
									<div class="btn-group btn-group-circle">
										<button type="button" class="btn btn-primary">Primary</button>
										<button type="button"
											class="btn btn-circle-right btn-primary dropdown-toggle m-r-20"
											data-toggle="dropdown">
											<i class="fa fa-angle-down"></i>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">New File</a>
											</li>
											<li><a href="#">Save as</a>
											</li>
											<li><a href="#">Open With</a>
											</li>
											<li class="divider"></li>
											<li><a href="#">Exit</a>
											</li>
										</ul>
									</div>
									<div class="btn-group btn-group-circle">
										<button type="button" class="btn btn-success">Success</button>
										<button type="button"
											class="btn btn-circle-right btn-success dropdown-toggle m-r-20"
											data-toggle="dropdown">
											<i class="fa fa-angle-down"></i>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">New File</a>
											</li>
											<li><a href="#">Save as</a>
											</li>
											<li><a href="#">Open With</a>
											</li>
											<li class="divider"></li>
											<li><a href="#">Exit</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Block level button</header>
								</div>
								<div class="card-body ">
									<button type="button" class="btn btn-default btn-block">Block level button</button>
									<button type="button" class="btn btn-warning btn-block">Block level button</button>
									<button type="button" class="btn btn-danger  btn-block">Block level button</button>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card  card-box">
								<div class="card-head">
									<header>Star Rating Example</header>
								</div>
								<div class="card-body ">
									<span class="rating"> <span class="star"></span> <span class="star"></span> <span
											class="star"></span> <span class="star"></span> <span class="star"></span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>SOCIAL BUTTONS</header>
								</div>
								<div class="card-body ">
									<div class="button-list">
										<button type="button" class="btn btn-facebook waves-effect waves-light">
											<i class="fa fa-facebook"></i>
										</button>
										<button type="button" class="btn btn-twitter waves-effect waves-light">
											<i class="fa fa-twitter"></i>
										</button>
										<button type="button" class="btn btn-linkedin waves-effect waves-light">
											<i class="fa fa-linkedin"></i>
										</button>
										<button type="button" class="btn btn-dribbble waves-effect waves-light">
											<i class="fa fa-dribbble"></i>
										</button>
										<button type="button" class="btn btn-googleplus waves-effect waves-light">
											<i class="fa fa-google-plus"></i>
										</button>
										<button type="button" class="btn btn-instagram waves-effect waves-light">
											<i class="fa fa-instagram"></i>
										</button>
										<button type="button" class="btn btn-pinterest waves-effect waves-light">
											<i class="fa fa-pinterest"></i>
										</button>
										<button type="button" class="btn btn-dropbox waves-effect waves-light">
											<i class="fa fa-dropbox"></i>
										</button>
										<button type="button" class="btn btn-flickr waves-effect waves-light">
											<i class="fa fa-flickr"></i>
										</button>
										<button type="button" class="btn btn-tumblr waves-effect waves-light">
											<i class="fa fa-tumblr"></i>
										</button>
										<button type="button" class="btn btn-skype waves-effect waves-light">
											<i class="fa fa-skype"></i>
										</button>
										<button type="button" class="btn btn-youtube waves-effect waves-light">
											<i class="fa fa-youtube"></i>
										</button>
										<button type="button" class="btn btn-github waves-effect waves-light">
											<i class="fa fa-github"></i>
										</button>
										<br>
										<button type="button" class="btn btn-facebook waves-effect waves-light">
											<i class="fa fa-facebook m-r-5"></i> Facebook
										</button>
										<button type="button" class="btn btn-twitter waves-effect waves-light">
											<i class="fa fa-twitter m-r-5"></i> Twitter
										</button>
										<button type="button" class="btn btn-linkedin waves-effect waves-light">
											<i class="fa fa-linkedin m-r-5"></i> Linkedin
										</button>
										<button type="button" class="btn btn-dribbble waves-effect waves-light">
											<i class="fa fa-dribbble m-r-5"></i> Dribbble
										</button>
										<button type="button" class="btn btn-googleplus waves-effect waves-light">
											<i class="fa fa-google-plus m-r-5"></i> Google+
										</button>
										<button type="button" class="btn btn-instagram waves-effect waves-light">
											<i class="fa fa-instagram m-r-5"></i> Instagram
										</button>
										<button type="button" class="btn btn-pinterest waves-effect waves-light">
											<i class="fa fa-pinterest m-r-5"></i> Pinterest
										</button>
										<button type="button" class="btn btn-dropbox waves-effect waves-light">
											<i class="fa fa-dropbox m-r-5"></i> Dropbox
										</button>
										<button type="button" class="btn btn-flickr waves-effect waves-light">
											<i class="fa fa-flickr m-r-5"></i> Flickr
										</button>
										<button type="button" class="btn btn-tumblr waves-effect waves-light">
											<i class="fa fa-tumblr m-r-5"></i> Tumblr
										</button>
										<button type="button" class="btn btn-skype waves-effect waves-light">
											<i class="fa fa-skype m-r-5"></i> Skype
										</button>
										<button type="button" class="btn btn-youtube waves-effect waves-light">
											<i class="fa fa-youtube m-r-5"></i> Youtube
										</button>
										<button type="button" class="btn btn-github waves-effect waves-light">
											<i class="fa fa-github m-r-5"></i> Github
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
    
@endsection