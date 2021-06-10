<!-- Add Modal -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Add New dépot</h4>
			</div>
			<div class="modal-body">
				{!! Form::open(['url' => 'save']) !!}
				<div class="form-group">
					<div class="row">
						<div class="col-md-2" style="margin-top:7px;">
							{!! Form::label('datedepot', 'Datedepot') !!}
						</div>
						<div class="col-md-10">
							{!! Form::text('datedepot', '', ['class' => 'form-control', 'placeholder' => 'Input Datedepot', 'required']) !!}
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2" style="margin-top:7px;">
							{!! Form::label('datefnial', 'Datefinal') !!}
						</div>
						<div class="col-md-10">
							{!! Form::text('datefinal', '', ['class' => 'form-control', 'placeholder' => 'Input Datefinal', 'required']) !!}
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2" style="margin-top:7px;">
							{!! Form::label('note', 'Note') !!}
						</div>
						<div class="col-md-10">
							{!! Form::text('note', '', ['class' => 'form-control', 'placeholder' => 'Input Note', 'required']) !!}
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2" style="margin-top:7px;">
							{!! Form::label('sujet', 'Sujet') !!}
						</div>
						<div class="col-md-10">
							{!! Form::text('sujet', '', ['class' => 'form-control', 'placeholder' => 'Input Sujet', 'required']) !!}
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2" style="margin-top:7px;">
							{!! Form::label('contenu', 'Contenu') !!}
						</div>
						<div class="col-md-10">
							{!! Form::text('contenu', '', ['class' => 'form-control', 'placeholder' => 'Input Contenu', 'required']) !!}
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2" style="margin-top:7px;">
							{!! Form::label('enseignant_id', 'enseignant_id') !!}
						</div>
						<div class="col-md-10">
							{!! Form::text('enseignant_id', '', ['class' => 'form-control', 'placeholder' => 'Input enseignant_id', 'required']) !!}
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2" style="margin-top:7px;">
							{!! Form::label('projet_id', 'etudiant_id') !!}
						</div>
						<div class="col-md-10">
							{!! Form::text('etudiant_id', '', ['class' => 'form-control', 'placeholder' => 'Input etudiant_id', 'required']) !!}
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2" style="margin-top:7px;">
							{!! Form::label('projet_id', 'projet_id') !!}
						</div>
						<div class="col-md-10">
							{!! Form::text('projet_id', '', ['class' => 'form-control', 'placeholder' => 'Input projet_id', 'required']) !!}
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2" style="margin-top:7px;">
							{!! Form::label('equipe_id', 'equipe_id') !!}
						</div>
						<div class="col-md-10">
							{!! Form::text('equipe_id', '', ['class' => 'form-control', 'placeholder' => 'Input equipe_id', 'required']) !!}
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>