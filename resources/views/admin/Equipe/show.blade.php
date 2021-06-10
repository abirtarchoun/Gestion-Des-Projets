@extends('layouts.admin')
@section('main')
@if (session('storeEquipe'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('storeEquipe') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('updatEequipe'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('updateEquipe') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
		<div class="page-bar">
            <div class="page-title-breadcrumb">
                     <div class=" pull-left">
								<div class="page-title"> Details Equipe</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('admin.dashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="{{ route('equipes.index')}}">Equipe</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Details Equipe</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN SIDEBAR -->
							<div class="profile-sidebar" style="width: 31rem; ">
								<div class="card card-topline-aqua">
									<div class="card-body no-padding height-2">
										<div class="row">
                                        <div class="card-body no-padding height-9">
                                        <ul class="list-group list-group-unbordered">
											<li class="list-group-item">
												<b>Libelle </b>
												<div class="profile-desc-item pull-right">{{ $equipe->libelle}}</div>
											</li>
											<li class="list-group-item">
												<b> Projet_id </b>
												<div class="profile-desc-item pull-right">{{ $equipe->projet_id }}</div>
											</li>
                                            </ul>
								<div class="profile-userbuttons"><a href="{{ route('equipes.edit', ['equipe' => $equipe->id]) }}"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-warning" title="Edit user {{ $equipe->libelle }}">Edit</a>
                                        <a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger " title="Delete user {{ $equipe->libelle }}"onclick="event.preventDefault(); document.querySelector('#delete-equipe-form').submit()"> Delete
                                        <i class="fas fa-user-slash"></i></a>
                                          <i class="fas fa-user-slash"></i></a>
                 <form action="{{ route('equipes.destroy', ['equipe' => $equipe->id]) }}" method="post" id="delete-equipe-form">@csrf @method('DELETE')</form>
										</div>
                                         <hr>
                                        <br>
										<!-- END SIDEBAR BUTTONS -->
									</div>
								</div>
								
                            @endsection