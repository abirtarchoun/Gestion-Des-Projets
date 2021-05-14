@extends('layouts.app')
    <div class='container'>
	  <h3><i class="fas fa-users"></i> Professors list</h3>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
			<th scope="col"><i class="fas fa-image"></i>Picture</th>
            <th scope="col"><i class="fas fa-user"></i> Name</th>
            <th scope="col"><i class="fas fa-phone"></i> Phone</th>
            <th scope="col"><i class="fas fa-at"></i> Email</th>
            <th scope="col"><i class="fas fa-cogs"></i> Action</th>
          </tr>
        </thead>
        <tbody>
		 @foreach ($enseignants as $key => $enseignant)
            <tr>
              <th scope="row">{{ $key }}</th>
			    <td>{{ $enseignant->picture}}</td>
              <td>{{ $enseignant->nom.' '.$enseignant->prenom  }}</td>
			  <td>{{ $enseignant->num }}</td>
              <td>{{ $enseignant->email }}</td>
              <td>
                  <a href="#" class="btn btn-info" title="Show details about {{ $enseignant->nom.' '.$enseignant->prenom  }}"><i class="fas fa-user-tag"></i></a>
                
              </td>
            </tr>
               @endforeach
        </tbody>
    </table>
    <div class="mx-auto"  style="width: 200px;">
       {{ $enseignants->links() }}
    </div>

                  

 