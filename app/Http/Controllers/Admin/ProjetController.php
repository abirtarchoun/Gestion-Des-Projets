<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index()
    {
        
        return view('admin.projet.index', ['projets' =>Projet::paginate(100)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('admin.projet.create');
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
       
      $projet = projet::create($validatedData);

      return redirect()->route('projets.show', $projet)->with('storeprojet', "projet has been added successfuly");
   

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show(projet $projet)
    {
        return view('admin.projet.show', ['projet' => $projet]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function edit(projet $projet)
    {
        
        return view('admin.projet.edit', ['projet' => $projet]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, projet $projet)
 
    {   $validatedData = $request->validate($this->validationRules());
        $projet->update($validatedData);

        return redirect()->route('projets.show', $projet)->with('updateprojet', "projet has been updated successfuly");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy(projet $projet)
    {
      
        $projet->delete();
        return redirect()->route('projets.index')->with('deleteprojet', 'projet has been deleted!');
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
