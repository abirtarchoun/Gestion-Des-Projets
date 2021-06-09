@extends('layouts.admin')
@section('main')
    <div class="page-bar">
            <div class="page-title-breadcrumb">
                     <div class=" pull-left">
								<div class="page-title">Add Etudiant</div>
							</div>
							@include('layouts.basicinfo')
                             <form action="{{ route('etudiants.store') }}" id="form_sample_1" class="form-horizontal"method="post" enctype="multipart/form-data">
                                <div class="card-body" id="bar-parent">
                                      @include('admin.etudiant.form')
                               </form>
			                   	    </div>
                   	                </div>
                        	      </div>
                             	</div>
			<!-- end page content -->
@endsection 