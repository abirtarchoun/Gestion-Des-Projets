@extends('layouts.admin')
@section('main')
@if (session('storeEtudiant'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('storeEtudiant') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('updateEtudiant'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('updateEtudiant') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <div class="page-bar">
            <div class="page-title-breadcrumb">
                     <div class=" pull-left">
					    <div class="page-bar">
            <div class="page-title-breadcrumb">
                     <div class=" pull-left">
								<div class="page-title">Edit student</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="/admin-dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="/enseignants">student</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">student Details </li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN SIDEBAR -->
							<div class="profile-sidebar" style="width: 28rem;">
								<div class="card card-topline-aqua">
									<div class="card-body no-padding height-9">
										<div class="row">
											<div class="profile-userpic">
												<img src="{{ asset('assets/img/user.jpg')}}" class="img-responsive" alt=""> </div>
                                                  </div>
										<div class="profile-usertitle">
											<div class="profile-usertitle-name"> {{ $etudiant->nom.' '.$etudiant->prenom  }}</div>
										</div>
									<div class="card-body no-padding height-9">

										<ul class="list-group list-group-unbordered">
											<li class="list-group-item">
												<b>Gender </b>
												<div class="profile-desc-item pull-right">{{ $etudiant->gender }}</div>
											</li>
											<li class="list-group-item">
												<b> phone </b>
												<div class="profile-desc-item pull-right">{{ $etudiant->phone }}</div>
											</li>
											<li class="list-group-item">
												<b> Email</b>
												<div class="profile-desc-item pull-right">{{$etudiant->email }}</div>
											</li>

                                            <li class="list-group-item">
												<b>Department</b>
												<div class="profile-desc-item pull-right">{{$etudiant->department }}</div>
											</li>

                                            <li class="list-group-item">
												<b>Adresse</b>
												<div class="profile-desc-item pull-right">{{$etudiant->adresse}}</div>
											</li>

										</ul>
										<div class="row list-separated profile-stat">
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> {{$etudiant->projects }}</div>
												<div class="uppercase profile-stat-text"> Projects </div>
											</div>
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> {{$etudiant->tasks }}</div>
												<div class="uppercase profile-stat-text"> Tasks </div>
											</div>
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> {{$etudiant->uploads }} </div>
												<div class="uppercase profile-stat-text"> Uploads </div>
											</div>
										</div>
									</div>
								</div>
                                <!-- SIDEBAR BUTTONS -->
										<div class="profile-userbuttons"><a href="{{ route('etudiants.edit', ['etudiant' => $etudiant->id]) }}"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-warning" title="Edit user {{ $etudiant->nom.' '.$etudiant->prenom  }}">Edit</a>
                                        <a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger " title="Delete user {{ $etudiant->nom.' '.$etudiant->prenom  }}"onclick="event.preventDefault(); document.querySelector('#delete-etudiant-form').submit()"> Delete
                                        <i class="fas fa-user-slash"></i></a>
                                         <form action="{{ route('etudiants.destroy', ['etudiant' => $etudiant->id]) }}" method="post" id="delete-etudiant-form">@csrf @method('DELETE')</form>
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

                            @endsection
