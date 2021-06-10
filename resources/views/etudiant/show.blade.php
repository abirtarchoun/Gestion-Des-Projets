@extends('app')

@section('content')


@auth
<h1 class="page-header text-center" id="laravelProjet">Laravel projet</h1>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<h2>dépots Table
			<button type="button" data-target="#addnew" data-toggle="modal" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> dépot</button>
		</h2>
	</div>
</div>

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<table class="table table-bordered table-responsive table-striped">
			<thead>
				<th>Fisrtname</th>
				<th>Lastname</th>
				<th>Lastname</th>
				<th>Lastname</th>
				<th>Lastname</th>
				<th>Lastname</th>
				<th>Lastname</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($dépots as $dépot)
				<tr>
					<td>{{$dépot->datedepot}}</td>
					<td>{{$dépot->datefinal}}</td>
					<td>{{$dépot->note}}</td>
					<td>{{$dépot->sujet}}</td>
					<td>{{$dépot->contenu}}</td>
					<td>{{$dépot->enseignant_id}}</td>
					<td>{{$dépot->etudiant_id}}</td>
					<td>{{$dépot->projet_id}}</td>
					<td>{{$dépot->equipe_id}}</td>

					<td><a href="#edit{{$dépot->id}}" data-toggle="modal" class="btn btn-success"><i class='fa fa-edit'></i> Edit</a> <a href="#delete{{$dépot->id}}" data-toggle="modal" class="btn btn-danger"><i class='fa fa-trash'></i> Delete</a>
						@include('action')
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endauth
@endsection