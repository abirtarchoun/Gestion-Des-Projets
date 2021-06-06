@extends('layouts.admin')
@section('main')

    <div class="page-bar">
            <div class="page-title-breadcrumb">
                     <div class=" pull-left">
								<div class="page-title">students List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="/admin-dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">students</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">students List</li>
							</ol>
						</div>
					</div>
		@if (session('deleteEtudiant'))
    <div class="container">
	        {{ session('deleteEtudiant') }}
      <div class="alert alert-success alert-dismissible" id="myAlert">
      <a href="#" class="close">&times;</a>
                            Suppression effectuer avec <strong>Success!</strong>.
      </div>
       </div>
       @endif
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								<!-- <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab1" data-toggle="tab"> List View </a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-toggle="tab"> Grid View </a>
                                    </li>
                                </ul> -->
								<ul class="nav customtab nav-tabs" role="tablist">
									<li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">List
											View</a></li>
									<li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Grid
											View</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<header>All students</header>
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
																	<a href={{ route('etudiants.create') }} id="addRow"
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
															<table
																class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
																id="example4">
																<thead>
																	<tr>
																		<th style="width: 78px;">#</th>
																		<!--<th style="width: 78px;">★ ☆</th>-->
																		<th > Name </th>
																		<th > Department </th>
																		<th > Gender </th>
																		<th > Mobile </th>
																		<th> Email </th>
																		<th>Joining Date</th>
																		<th > Action </th>
																	</tr>
																</thead>
																<tbody>
		                                                       @foreach ($etudiants as $key => $etudiant)
                                                                <tr class="odd gradeX">
                                                                       <td>{{ $key }}</td>
																		<!--<td class="patient-img">
																			<img src="../assets/img/prof/prof1.jpg"
																				alt="">
																	 	</td>-->
																		<td>{{ $etudiant->nom.' '.$etudiant->prenom  }}</td>
																		<td class="left">{{ $etudiant->department}}</td>
																		<td class="left">{{ $etudiant->gender }}</td>
																		<td><a href="tel:21628097322">{{ $etudiant->phone }}</a></td>
																		<td><a href="mailto:shuxer@gmail.com">
																		 {{$etudiant->email }}</a></td>
																		<td>{{ $etudiant->joining_date }}</td>
																		<td>
                                                                        <a href="{{ route('etudiants.edit', ['etudiant' => $etudiant->id]) }}" class="btn btn-warning btn-xs"title="Edit user {{ $etudiant->nom.' '.$etudiant->prenom  }}">
																		<i class="fa fa-pencil"></i></a><a href="{{ route('etudiants.show', ['etudiant' => $etudiant->id]) }}" class="btn btn-info btn-xs" title="Show details about {{ $etudiant->nom.' '.$etudiant->prenom  }}">
                                                                        <i class="fa fa-user-circle-o"></i> </a>
																		<a href="#" class="btn btn-danger btn-xs" title="Delete user {{ $etudiant->nom.' '.$etudiant->prenom  }}" onclick="event.preventDefault(); document.querySelector('#delete-etudiant-form').submit()">
																		<i class="fa fa-trash-o "></i></a>
                                                                         <form action="{{ route('etudiants.destroy', ['etudiant' => $etudiant->id]) }}" method="post" id="delete-etudiant-form">@csrf @method('DELETE')</form>
                                                                        </td>
																	</tr>
                                                                     @endforeach
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
                                </div>
                                    @endsection
