@extends('layouts.admin')
@section('main')
    <div class="page-bar">
            <div class="page-title-breadcrumb">
                     <div class=" pull-left">
								<div class="page-title">Equipes List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="{{ route('admin.dashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href={{ route('equipes.index') }}>Equipes</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Equipes List</li>
							</ol>
						</div>
					</div>
					 <div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								<ul class="nav customtab nav-tabs" role="tablist">
									<li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">List
											View</a></li>
								           </ul>
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<header>All Equipes</header>
														<div class="tools">
															<a class="fa fa-repeat btn-color box-refresh"
																href="javascript:;"></a>
															<a class="t-collapse btn-color fa fa-chevron-down"
																href="javascript:;"></a>
															<a class="t-close btn-color fa fa-times"
																href="javascript:;"></a>
														</div>
													</div>
													<div class="card-body ">
														<div class="row">
															<div class="col-md-6 col-sm-6 col-6">
																<div class="btn-group">
																	<a href={{ route('equipes.create') }} id="addRow"
																		class="btn btn-info">
																		Add New <i class="fa fa-plus"></i>
																	</a>
																</div>
															</div>
															<div class="col-md-6 col-sm-6 col-6">
																<div class="btn-group pull-right">
																	<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
																		data-toggle="dropdown">Tools
																		<i class="fa fa-angle-down"></i>
																	</a>
																	<ul class="dropdown-menu pull-right">
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-print"></i> Print </a>
																		</li>
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-file-pdf-o"></i> Save as
																				PDF </a>
																		</li>
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-file-excel-o"></i>
																				Export to Excel </a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="table-scrollable">
															<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
																<thead>
																	<tr>
																		<th style="width: 78px;">#</th>
																		<th > Libelle</th>
																		<th > Projet_id</th>
                                                                        <th > Action </th>
																	</tr>
																</thead>
																<tbody> 
		                                                       @foreach ($equipes as $key => $equipe)
                                                                <tr class="odd gradeX">
                                                                       <td>{{ $key }}</td>
																		<td>{{ $equipe->libelle }}</td>
																		<td class="left">{{ $equipe->projet_id}}</td>  
                                                                        <td><a href="{{ route('equipes.edit', ['equipe' => $equipe->id]) }}" class="btn btn-warning btn-xs"title="Edit user {{ $equipe->libelle }}">
																		<i class="fa fa-pencil"></i></a>
																		<a href="{{ route('equipes.show', ['equipe' => $equipe->id]) }}" class="btn btn-info btn-xs" title="Show details about {{ $equipe->libelle }}">
                                                                        <i class="fa fa-user-circle-o"></i> 
																		</a>
																		<a href="#" class=" Success btn btn-danger btn-xs" title="Delete user {{ $equipe->libelle }}" onclick="event.preventDefault(); document.querySelector('#delete-equipe-form').submit()">
																		<i class="fa fa-trash-o "></i>
																		</a>
                                                                         <form action="{{ route('equipes.destroy', ['equipe' => $equipe->id]) }}" method="post" id="delete-equipe-form">@csrf @method('DELETE')</form>
                                                                        </td>
																	   </tr>
                                                                     @endforeach 
																</tbody>
															</table>
														</div>
											<div class="scroll-to-top">
	                       <i class="icon-arrow-up"></i>
                         </div>       
                   @endsection	