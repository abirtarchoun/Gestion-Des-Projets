@extends('layouts.admin')
@section('main')
    <div class="page-bar">
            <div class="page-title-breadcrumb">
                     <div class=" pull-left">
					<div class="page-title"> Professor Details </div>
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN SIDEBAR -->
							<div class="profile-sidebar" style="width: 28rem;">
								<div class="card card-topline-aqua">
									<div class="card-body no-padding height-9">
										<div class="row">
											<div class="profile-userpic">
												<img src="{{ asset('assets/img/user.jpg')}}" class="img-responsive" alt=""> </div>
                                                <!--<img src="{/{ asset('storage/'.$enseignant->picture) }}" alt="{/{ $enseignant->name }}" class="img-responsive"> </div>-->
										         </div>
										<div class="profile-usertitle">
											<div class="profile-usertitle-name"> {{ $enseignant->nom.' '.$enseignant->prenom  }}</div>
										<!--	<div class="profile-usertitle-job"> Jr. Professor </div>-->
										</div>
									<div class="card-body no-padding height-9">
										<!--<div class="profile-desc">
											Hello I am //{/{// $enseignant->nom.' '.$enseignant->prenom  }} a Professor in xyz College Surat. I love to work with
											all my college staff and seniour
											professors.
										</div>-->
										<ul class="list-group list-group-unbordered">
											<li class="list-group-item">
												<b>Gender </b>
												<div class="profile-desc-item pull-right">{{ $enseignant->gender }}</div>
											</li>
											<li class="list-group-item">
												<b> phone </b>
												<div class="profile-desc-item pull-right">{{ $enseignant->phone }}</div>
											</li>
											<li class="list-group-item">
												<b> Email</b>
												<div class="profile-desc-item pull-right">{{$enseignant->email }}</div>
											</li>
								
                                            <li class="list-group-item">
												<b>Department</b>
												<div class="profile-desc-item pull-right">{{$enseignant->department }}</div>
											</li>
										</ul>
										<div class="row list-separated profile-stat">
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> {{$enseignant->projects }}</div>
												<div class="uppercase profile-stat-text"> Projects </div>
											</div>
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> {{$enseignant->tasks }}</div>
												<div class="uppercase profile-stat-text"> Tasks </div>
											</div>
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> {{$enseignant->uploads }} </div>
												<div class="uppercase profile-stat-text"> Uploads </div>
											</div>
										</div>
									</div>
								</div>
                                <!-- SIDEBAR BUTTONS -->
										<div class="profile-userbuttons">
                                       
										<a href="" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-warning" title="Edit user {{ $enseignant->nom.' '.$enseignant->prenom  }}">Edit</a>
                                       <a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger " title="Delete user {{ $enseignant->nom.' '.$enseignant->prenom  }}"> Delete
										</a>
										</div>
                                         <hr>
                                        <br>
										<!-- END SIDEBAR BUTTONS -->
									</div>
								</div>
								<div class="card" style="width: 38rem;">
									<div class="card-head card-topline-aqua">
										<header>Work Expertise</header>
									</div>
									<div class="card-body no-padding height-9">
										<div class="work-monitor work-progress">
											<div class="states">
												<div class="info">
													<div class="desc pull-left">Java</div>
													<div class="percent pull-right">50%</div>
												</div>
												<div class="progress progress-xs">
													<div class="progress-bar progress-bar-danger progress-bar-striped active"
														role="progressbar" aria-valuenow="40" aria-valuemin="0"
														aria-valuemax="100" style="width: 70%">
														<span class="sr-only">50% </span>
													</div>
												</div>
											</div>
											<div class="states">
												<div class="info">
													<div class="desc pull-left">Php</div>
													<div class="percent pull-right">85%</div>
												</div>
												<div class="progress progress-xs">
													<div class="progress-bar progress-bar-success progress-bar-striped active"
														role="progressbar" aria-valuenow="40" aria-valuemin="0"
														aria-valuemax="100" style="width: 45%">
														<span class="sr-only">85% </span>
													</div>
												</div>
											</div>
											<div class="states">
												<div class="info">
													<div class="desc pull-left">Android</div>
													<div class="percent pull-right">20%</div>
												</div>
												<div class="progress progress-xs">
													<div class="progress-bar progress-bar-info progress-bar-striped active"
														role="progressbar" aria-valuenow="40" aria-valuemin="0"
														aria-valuemax="100" style="width: 35%">
														<span class="sr-only">20% </span>
													</div>
												</div>
											</div>
										</div>
									</div> 
									</div>
                                     <div class="card" style="width: 38rem;">
									<div class="card-head card-topline-aqua">
										<header>Address</header>
									</div>
									<div class="card-body no-padding height-9">
										<div class="row text-center m-t-10">
											<div class="col-md-12">{{$enseignant->adresse}}
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
                            @endsection