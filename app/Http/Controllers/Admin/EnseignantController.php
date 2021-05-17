<?php

namespace App\Http\Controllers\Admin;

use App\Enseignant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.enseignant.index', ['enseignants' => Enseignant::paginate(12)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.enseignant.create');
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
        
        $enseignant = Enseignant::create($validatedData);

        return redirect()->route('enseignants.show', $enseignant)->with('storeEnseignant', "Enseignant has been added successfuly");
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function show(Enseignant $enseignant)
    {
        return view('admin.enseignant.show', ['enseignant' => $enseignant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function edit(Enseignant $enseignant)
    {
        
        return view('admin.enseignant.edit', ['enseignant' => $enseignant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enseignant $enseignant)
    {   $validatedData = $request->validate($this->validationRules());
        $enseignant->update($validatedData);

        return redirect()->route('enseignants.show', $enseignant)->with('updateEnseignant', "Enseignant has been updated successfuly");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enseignant $enseignant)
 
      {
        $enseignant->delete();
        return redirect()->route('enseignants.index')->with('deleteEnseignant', 'Enseignant has been deleted!');
    }
    private function validationRules()
    {
        return [
            'nom' => 'required|min:2',
            'prenom' => 'required|min:2',
            'phone' => 'required',
            'email' => 'required|email',
            'adresse' => 'required|max:255',
            'department' => 'required',
            'gender' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'joining_date'=> 'required|date',
        ];
    }
}