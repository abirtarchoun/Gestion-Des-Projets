@extends('layouts.app')
    <div class='container'>
	  <h3><i class="fas fa-users"></i> Students list</h3>
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
		 @foreach ($etudiants as $key => $etudiant)
            <tr>
              <th scope="row">{{ $key }}</th>
			    <td>{{ $etudiant->picture}}</td>
              <td>{{ $etudiant->nom.' '.$etudiant->prenom  }}</td>
			  <td>{{ $etudiant->phone }}</td>
              <td>{{ $etudiant->email }}</td>
              <td>
                  <a href="#" class="btn btn-info" title="Show details about {{ $etudiant->nom.' '.$etudiant->prenom  }}"><i class="fas fa-user-tag"></i></a>

              </td>
            </tr>
               @endforeach
        </tbody>
    </table>
    <div class="mx-auto"  style="width: 200px;">
       {{ $etudiant->links() }}
    </div>
