          @csrf
						<div class="form-body">
									<div class="form-group row">
										<label for="nom" class="control-label col-md-3">First Name
													<span class="required"> * </span>
												</label>
											<div class="col-md-5">
													 <input type="text"class="form-control input-height" name="nom" value="{{ $enseignant->nom ?? old('nom') }}" id="nom" class="form-control @error('nom') is-invalid @enderror @error('nom') is-invalid @enderror" placeholder="Firstname goes here">
                                                      @error('nom')<div class="text-danger">{{ $message }}</div>@enderror
                                                 </div>
											</div>
											<div class="form-group row">
												<label  for="prenom" class="control-label col-md-3">Last Name
													<span class="required"> * </span>
												</label>
													<div class="col-md-5">
													 <input type="text"class="form-control input-height" name="prenom" value="{{ $enseignant->prenom ?? old('prenom') }}" id="prenom" class="form-control @error('prenom') is-invalid @enderror @error('prenom') is-invalid @enderror" placeholder="lastname goes here">
                                                      @error('prenom')<div class="text-danger">{{ $message }}</div>@enderror
												</div>
											</div>
											<div class="form-group row">
												<label for="email" class="control-label col-md-3">Email
												</label>
												<div class="col-md-5">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
														</span>
                                                   <input type="email" class="form-control input-height"  name="email" value="{{ $enseignant->email ?? old('email') }}" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="person@example.com">
                                                   @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                                                </div>
												</div>
											</div>
											<div class="form-group row">
												<label for =" joining_date" class="control-label col-md-3">Joining Date
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<div class="input-append date">
														<div id="dateIcon" class="input-group datePicker">
                                                    <input type="date" name="joining_date" value="{{ old('joining_date') }}" id="joining_date" class="form-control" placeholder="" >
                                                     @error('joining_date')<div class="text-danger">{{ $message }}</div> @enderror
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
												<label class="control-label col-md-3">Departments
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-control input-height" name="department" id="department">
														<option value="">Select...</option> 
                                                <option type=" text" value="Informatique" @if (old('department') == "Informatique") {{ 'selected' }} @endif>Informatique</option>
                                                <option value="Génie Mecanique" @if (old('department') == "Génie Mecanique") {{ 'selected' }} @endif>Génie Mecanique</option>
                                                <option value="Génie Electriques" @if (old('department') == "Génie Electrique") {{ 'selected' }} @endif>Génie electrique</option>
                                                <option value="Génie Mecanique" @if (old('department') == "Génie Mecanique") {{ 'selected' }} @endif>Génie de Procédés</option>
                                                <option value="Scienceseco" @if (old('department') == "Scienceseco") {{ 'selected' }} @endif>Sciences économiques et Gestion</option>
                                                @error('gender')<div class="text-danger">{{ $message }}</div>@enderror
                                                 </select> 
												
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Gender
													<span class="required"> * </span>
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
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
												<input  class="form-control input-height" type="number" class="form-control input-height" name="phone" value="{{ $enseignant->phone ?? old('phone') }}" id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="+21612345678">
                                        @error('phone')<div class="text-danger">{{ $message }}</div>@enderror
                                                        </div>
											</div>
											
											<div class="form-group row">
												<label class="control-label col-md-3">Address
													<span class="required"> * </span>
												</label>
												</label>
												<div class="col-md-5"> <input  type="text" name="adresse" value="{{ $enseignant->adresse ?? old('adresse') }}" id="adresse" class="form-control @error('adresse') is-invalid @enderror" placeholder="Address goes here">
                                                 @error('adresse')<div class="text-danger">{{ $message }}</div>@enderror
												</div>
                                                </div>
												</div>
											</div>
                                            <div for = "picture" class="form-group row">
												<label class="control-label col-md-3"> Profile Picture</label>
												<div class="compose-editor">
                                            <input type="file" name="picture" id="picture" class="form-control" placeholder="Enseignant's photo goes here">
                                            @error('picture')<div class="text-danger">{{ $message }}</div> @enderror
												</div>
											</div>
                                            <div class="form-actions">
												<div class="row">
													<div class="offset-md-3 col-md-9">
														<button type="submit" class="btn btn-info m-r-20">Save</button>
													    <button  type="reset" class="btn btn-default">Cancel</button>
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