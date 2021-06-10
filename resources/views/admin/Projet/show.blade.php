@extends('layouts.admin')
@section('main')
@if (session('storeProjet'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('storeProjet') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('updatProjet'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('updateProjet') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
		<div class="page-bar">
            <div class="page-title-breadcrumb">
                     <div class=" pull-left">
								<div class="page-title"> Details ¨Projet</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('admin.dashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="{{ route('projets.index')}}">Projet</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Details Projet</li>
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
												<div class="profile-desc-item pull-right">{{ $projet->libelle}}</div>
											</li>
                                            <li class="list-group-item">
												<b>Sujet </b>
												<div class="profile-desc-item pull-right">{{ $projet->sujet}}</div>
											</li>
											<li class="list-group-item">
												<b> enseignant id </b>
												<div class="profile-desc-item pull-right">{{ $projet->enseignant_id }}</div>
											</li>
                                            </ul>
								<div class="profile-userbuttons"><a href="{{ route('projets.edit', ['projet' => $projet->id]) }}"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-warning" title="Edit user {{ $projet->libelle }}">Edit</a>
                                        <a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger " title="Delete user {{ $projet->libelle }}"onclick="event.preventDefault(); document.querySelector('#delete-projet-form').submit()"> Delete
                                        <i class="fas fa-user-slash"></i></a>
                                          <i class="fas fa-user-slash"></i></a>
                 <form action="{{ route('projets.destroy', ['projet' => $projet->id]) }}" method="post" id="delete-projet-form">@csrf @method('DELETE')</form>
										</div>
                                         <hr>
                                        <br>
										<!-- END SIDEBAR BUTTONS -->
									</div>
								</div>
								
                            @endsection