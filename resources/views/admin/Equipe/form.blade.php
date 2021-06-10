          @csrf
		  <div class="form-body">
          <div class="form-group row"> 
          <label for="nom" class="control-label col-md-3">Libelle</label>
											<div class="col-md-5">
													 <input type="text"class="form-control input-height" name="libelle" value="{{ $equipe->libelle ?? old('libelle') }}" id="nom" class="form-control @error('libelle') is-invalid @enderror @error('libelle') is-invalid @enderror" placeholder="libellegoes here">
                                                      @error('libelle')<div class="text-danger">{{ $message }}</div>@enderror
                                                 </div>
											</div>
											<div class="form-group row">
												<label  for="libelle" class="control-label col-md-3">ID Projet</label>
													<div class="col-md-5">
													 <input type="number"class="form-control input-height" name="projet_id" value="{{ $equipe->projet_id ?? old('projet_id') }}" id="projet_id" class="form-control @error('projet_id') is-invalid @enderror @error('projet_id') is-invalid @enderror" placeholder="lastname goes here">
                                                      @error('projet_id')<div class="text-danger">{{ $message }}</div>@enderror
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