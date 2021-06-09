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
								<div class="page-title"> Details Students</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('admin.dashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="{{ route('etudiants.index')}}">Students</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Details Students</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN SIDEBAR -->
							<div class="profile-sidebar" style="width: 38rem; ">
								<div class="card card-topline-aqua">
									<div class="card-body no-padding height-2">
										<div class="row">
											<div class="profile-userpic">
                                                <img src="{{ asset('storage/'.$etudiant->picture) }}" alt="{{ $etudiant->name }}" class="img-responsive" name="picture" id="picture" > </div>
										         </div>
												 </div>
										<div class="profile-usertitle">
										<div class="profile-usertitle-name"> {{ $etudiant->nom.' '.$etudiant->prenom  }}</div>
										<div class="profile-usertitle-job"> Et. Etudiant </div>
										</div>
									    <div class="card-body no-padding height-9">
										<div class="profile-desc">
											<p> Hello I am{{ $etudiant->nom.' '.$etudiant->prenom}} a student in Iset Bizerte.</p>
										</div>
										<ul class="list-group list-group-unbordered">
											<li class="list-group-item">
												<b>  Admission Date</b>
												<div class="profile-desc-item pull-right">{{ $etudiant->admission_date }}</div>
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
            	                           </ul>
								<div class="profile-userbuttons"><a href="{{ route('etudiants.edit', ['etudiant' => $etudiant->id]) }}"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-warning" title="Edit user {{ $etudiant->nom.' '.$etudiant->prenom  }}">Edit</a>
                                        <a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger " title="Delete user {{ $etudiant->nom.' '.$etudiant->prenom  }}"onclick="event.preventDefault(); document.querySelector('#delete-etudiant-form').submit()"> Delete
                                        <i class="fas fa-user-slash"></i></a>
                                          <i class="fas fa-user-slash"></i></a>
                 <form action="{{ route('etudiants.destroy', ['etudiant' => $etudiant->id]) }}" method="post" id="delete-etudiant-form">@csrf @method('DELETE')</form>
										</div>
                                         <hr>
                                        <br>
										<!-- END SIDEBAR BUTTONS -->
									</div>
								</div>
							
                            @endsection