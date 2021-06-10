@extends('layouts.admin')
@section('main')
    <div class="page-bar">
            <div class="page-title-breadcrumb">
                     <div class=" pull-left">
								<div class="page-title">Add projets</div>
							</div>
							@include('layouts.basicinfo')
                             <form action="{{ route('projets.store') }}" id="form_sample_1" class="form-horizontal"method="post" enctype="multipart/form-data">
                                <div class="card-body" id="bar-parent">
                                      @include('admin.projet.form')
                               </form>
			  	</div>
                   	</div>
                        	</div>
                             	</div>
			<!-- end page content -->
@endsection 