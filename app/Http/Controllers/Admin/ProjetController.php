<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index()
    {
        
        return view('admin.equipe.index', ['equipes' =>Projet::paginate(100)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('admin.equipe.create');
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
       
      $equipe = equipe::create($validatedData);

      return redirect()->route('equipes.show', $equipe)->with('storeequipe', "equipe has been added successfuly");
   

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show(Equipe $equipe)
    {
        return view('admin.equipe.show', ['equipe' => $equipe]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipe $equipe)
    {
        
        return view('admin.equipe.edit', ['equipe' => $equipe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipe $equipe)
 
    {   $validatedData = $request->validate($this->validationRules());
        $equipe->update($validatedData);

        return redirect()->route('equipes.show', $equipe)->with('updateequipe', "equipe has been updated successfuly");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipe $equipe)
    {
      
        $equipe->delete();
        return redirect()->route('equipes.index')->with('deleteequipe', 'equipe has been deleted!');
    }
    private function validationRules()
    {
        return [
            'libelle' => 'required|string',
            'enseignant_id'=>'required|numeric',
            'sujet'=>'required|string'
          
        ];
    }



}
