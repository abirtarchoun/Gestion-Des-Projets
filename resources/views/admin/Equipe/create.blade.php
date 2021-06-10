@extends('layouts.admin')
@section('main')
    <div class="page-bar">
            <div class="page-title-breadcrumb">
                     <div class=" pull-left">
								<div class="page-title">Add Professor</div>
							</div>
							@include('layouts.basicinfo')
                             <form action="{{ route('equipes.store') }}" id="form_sample_1" class="form-horizontal"method="post" enctype="multipart/form-data">
                                <div class="card-body" id="bar-parent">
                                      @include('admin.equipe.form')
                               </form>
			  	</div>
                   	</div>
                        	</div>
                             	</div>
			<!-- end page content -->
@endsection 