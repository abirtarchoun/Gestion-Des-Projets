@extends('layouts.admin')
@section('main')
    <div class="page-bar">
            <div class="page-title-breadcrumb">
                     <div class=" pull-left">
								<div class="page-title">Edit Students</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="{{ route('admin.dashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="{{ route('etudiants.index') }}">Students</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Students</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Basic Information</header>
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
           <form action="{{ route('etudiants.update', ['etudiant' => $etudiant->id]) }}" method="post" enctype="multipart/form-data">
           <div class="card-body" id="bar-parent">
            @method('PUT')
            @include('admin.etudiant.form')
        </form>
    </div>
    </div>
</div>
</div>
</div>
@endsection
