@extends('layouts.admin')
	<!-- start page content -->
    @section('main')
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Sweet Alert</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">UI Elements</a>&nbsp;<i
										class="fa fa-angle-right"></i>
								</li>
								<li class="active">Sweet Alerts</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-head">
									<header>Sweet Alert</header>
									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
										data-mdl-for="panel-button">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
								<div class="card-body row">
									<table class="table btn-sweetalert">
										<thead>
											<tr>
												<th style="width:50%;">Alert Type</th>
												<th>Example</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="middle-align">Basic Example</td>
												<td>
													<button type="button"
														class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary"
														data-type="dialog1">CLICK ME</button>
												</td>
											</tr>
											<tr>
												<td class="middle-align">Title with a text under</td>
												<td>
													<button type="button"
														class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary"
														data-type="dialog2">CLICK ME</button>
												</td>
											</tr>
											<tr>
												<td class="middle-align">A modal with a title, an error icon, a text,
													and a footer</td>
												<td>
													<button type="button"
														class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary"
														data-type="dialog3">CLICK ME</button>
												</td>
											</tr>
											<tr>
												<td class="middle-align">A modal window with a long content inside:</td>
												<td>
													<button type="button"
														class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary"
														data-type="dialog4">CLICK ME</button>
												</td>
											</tr>
											<tr>
												<td class="middle-align">Custom HTML description and buttons with ARIA
													labels</td>
												<td>
													<button type="button"
														class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary"
														data-type="dialog5">CLICK ME</button>
												</td>
											</tr>
											<tr>
												<td class="middle-align">A custom positioned dialog</td>
												<td>
													<button type="button"
														class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary"
														data-type="dialog6">CLICK ME</button>
												</td>
											</tr>
											<tr>
												<td class="middle-align">A confirm dialog, with a function attached to
													the "Confirm"-button...</td>
												<td>
													<button type="button"
														class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary"
														data-type="dialog7">CLICK ME</button>
												</td>
											</tr>
											<tr>
												<td class="middle-align">A message with a custom image</td>
												<td>
													<button type="button"
														class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary"
														data-type="dialog8">CLICK ME</button>
												</td>
											</tr>
											<tr>
												<td class="middle-align">A message with auto close timer
												</td>
												<td>
													<button type="button"
														class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary"
														data-type="dialog9">CLICK ME</button>
												</td>
											</tr>
											<tr>
												<td class="middle-align">Right-to-left support for Arabic, Persian,
													Hebrew, and other RTL languages
												</td>
												<td>
													<button type="button"
														class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary"
														data-type="dialog10">CLICK ME</button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
            @endsection