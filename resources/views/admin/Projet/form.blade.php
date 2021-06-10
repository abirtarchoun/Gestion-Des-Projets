          @csrf
		  <div class="form-body">
          <div class="form-group row"> 
          <label for="nom" class="control-label col-md-3">Libelle</label>
											<div class="col-md-5">
													 <input type="text"class="form-control input-height" name="libelle" value="{{ $projet->libelle ?? old('libelle') }}" id="nom" class="form-control @error('libelle') is-invalid @enderror @error('libelle') is-invalid @enderror" placeholder="libelle  goes here">
                                                      @error('libelle')<div class="text-danger">{{ $message }}</div>@enderror
                                                 </div>
											</div>
                                            <div class="form-group row"> 
                                     <label for="nom" class="control-label col-md-3">Sujet</label>
											<div class="col-md-5">
													 <input type="text"class="form-control input-height" name="sujet" value="{{ $projet->sujet?? old('sujet') }}" id="nom" class="form-control @error('sujet') is-invalid @enderror @error('sujet') is-invalid @enderror" placeholder="sujet goes here">
                                                      @error('sujet')<div class="text-danger">{{ $message }}</div>@enderror
                                                 </div>
											</div>
											<div class="form-group row">
												<label  for="libelle" class="control-label col-md-3">ID Enseignant</label>
													<div class="col-md-5">
													 <input type="number"class="form-control input-height" name="enseignant_id" value="{{ $projet->enseignant_id ?? old('enseignant_id') }}" id="enseignant_id" class="form-control @error('enseignant_id') is-invalid @enderror @error('enseignant_id') is-invalid @enderror" placeholder=" ID goes here">
                                                      @error('enseignant_id')<div class="text-danger">{{ $message }}</div>@enderror
												</div>
											</div>
                                             <div class="form-actions">
												<div class="row">
													<div class="offset-md-4 col-md-10">
														<button type="submit" class="btn btn-info m-r-20">Save</button>
													    <button  type="reset" class="btn btn-default m-r-20 ">Cancel</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>