          @csrf
		  <div class="form-body">
          <div class="form-group row">
          	<label for="nom" class="control-label col-md-3">First Name
										</label>
											<div class="col-md-5">
													 <input type="text"class="form-control input-height" name="nom" value="{{ $etudiant->nom ?? old('nom') }}" id="nom" class="form-control @error('nom') is-invalid @enderror @error('nom') is-invalid @enderror" placeholder="Firstname goes here">
                                                      @error('nom')<div class="text-danger">{{ $message }}</div>@enderror
                                                 </div>
											</div>
											<div class="form-group row">
												<label  for="prenom" class="control-label col-md-3">Last Name</label>
													<div class="col-md-5">
													 <input type="text"class="form-control input-height" name="prenom" value="{{ $etudiant->prenom ?? old('prenom') }}" id="prenom" class="form-control @error('prenom') is-invalid @enderror @error('prenom') is-invalid @enderror" placeholder="lastname goes here">
                                                      @error('prenom')<div class="text-danger">{{ $message }}</div>@enderror
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Email</label>
												<div class="col-md-5">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-envelope"> </i>
														</span>
                                                   <input type="text" class="form-control input-height"  name="email" value="{{ $etudiant->email ?? old('email') }}" id="email" class="form-control @error('email') is-invalid @enderror" placeholder=" person@example.com">
                                                   @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                                                </div>
												</div>
											</div>
											<div class="form-group row">
												<label for =" admission_date" class="control-label col-md-3"> Admission Date</label>
												<div class="col-md-5">
													<div class="input-append date">
														<div id="dateIcon" class="input-group datePicker">
                                                    <input type="date" name="admission_date" value="{{ $etudiant->admission_date ?? old('admission_date') }}" id="admission_date" class="form-control" placeholder="admission date goes here !" >
                                                     @error('admission_date')<div class="text-danger">{{ $message }}</div> @enderror
															<span class="dateBtn">
																<a class="input-button" title="toggle" data-toggle>
																	<i class="icon-calendar"></i>
																</a>
																<a class="input-button" title="clear" data-clear>
																	<i class="icon-close"></i>
																</a>
															</span>
														</div>
													</div>
												</div>
											</div>
											
											<div class="form-group row">
												<label class="control-label col-md-3">Departments</label>
												<div class="col-md-5">
													<select class="form-control input-height" name="department" id="department">
														<option value="">Select...</option> 
                                                <option type=" text" value="Informatique" @if (old('department') == "Informatique") {{ 'selected' }} @endif>Informatique</option>
                                                <option value="G??nieMecanique" @if (old('department') == "G??nieMecanique") {{ 'selected' }} @endif>G??nie Mecanique</option>
                                                <option value="G??nieElectriques" @if (old('department') == "G??nieElectrique") {{ 'selected' }} @endif>G??nie electrique</option>
                                                <option value="G??niedeproc??des" @if (old('department') == "G??niedeproc??des") {{ 'selected' }} @endif>G??nie de Proc??d??s</option>
                                                 @error('department')<div class="text-danger">{{ $message }}</div>@enderror
                                                 </select> 
												
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Gender
												
												</label>
												<div class="col-md-5">
											     <select type=" text" name="gender" class="form-control input-height" id="gender">
                                                <option value="">Select Gender..</option>
                                                <option type=" text" value="male" @if (old('gender') == "male") {{ 'selected' }} @endif>Male</option>
                                                <option type=" text" value="female" @if (old('gender') == "female") {{ 'selected' }} @endif>Female</option>
                                                @error('gender')<div class="text-danger">{{ $message }}</div>@enderror
                                                 </select> 
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Mobile No.
													
												</label>
												<div class="col-md-5">
												<input type="number" class="form-control input-height" name="phone" value="{{ $etudiant->phone ?? old('phone') }}" id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="+21612345678">
                                                   @error('phone')<div class="text-danger">{{ $message }}</div>@enderror
                                             </div>
											</div>
                                            <div class="form-group row">
												<label class="control-label col-md-3">Picture</label>
												<div class="compose-editor">
                                             <input class="form-control input-height" type="file" name="picture" id="picture" class="form-control" placeholder="etudiant's photo goes here">
                                            @error('picture')<div class="text-danger">{{ $message }}</div> @enderror
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