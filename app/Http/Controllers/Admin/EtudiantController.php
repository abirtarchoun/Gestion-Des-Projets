<?php

namespace App\Http\Controllers\Admin;

use App\Etudiant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.etudiant.index', ['etudiants' => Etudiant::paginate(100)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.etudiant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate($this->validationRules());
        // mass assignment
      $validatedData['picture'] = $request->picture->store('uploads','public');
       
      $etudiant = Etudiant::create($validatedData);

      return redirect()->route('etudiants.show', $etudiant)->with('storeEtudiant', "Etudiant has been added successfuly");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        
        return view('admin.etudiant.show', ['etudiant' => $etudiant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        
        return view('admin.etudiant.edit', ['etudiant' => $etudiant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)

    {   $validatedData = $request->validate($this->validationRules());
        $etudiant->update($validatedData);

        return redirect()->route('etudiants.show', $etudiant)->with('updateEtudiant', "Etudiant has been updated successfuly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        
        
        $etudiant->delete();
        return redirect()->route('etudiants.index')->with('deleteEtudiant', 'Etudiant has been deleted!');

    
}



private function validationRules()
    {
        return [
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'phone' => 'required',
            'email' => 'required|email',
            'department' => 'required|string',
            'gender' => 'required|string',
            'picture' => 'required|file|image',
            'admission_date'=> 'required|date',
        ];
    }
}