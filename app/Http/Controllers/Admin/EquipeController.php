<?php

namespace App\Http\Controllers\Admin;

use App\Equipe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.equipe.index', ['equipes' => Equipe::paginate(100)]);
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

      return redirect()->route('equipes.show', $equipe)->with('storeEquipe', "equipe has been added successfuly");
   

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

        return redirect()->route('equipes.show', $equipe)->with('updateEquipe', "equipe has been updated successfuly");
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
        return redirect()->route('equipes.index')->with('deleteEquipe', 'equipe has been deleted!');
    }
    private function validationRules()
    {
        return [
            'libelle' => 'required|string',
            'projet_id'=>'required|numeric',
          
        ];
    }



}
