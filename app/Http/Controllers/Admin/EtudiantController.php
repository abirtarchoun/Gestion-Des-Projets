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
        //
        return view('admin.etudiant.index', ['etudiants' => Etudiant::all()]);

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
        $etudiant = Etudiant::create($validatedData);
        return redirect()->route('etudiants.show', $etudiant)->with('storeEtudiant', "student added successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        return view('admin.etudiant.show', ['etudiant' =>  $etudiant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        return view('admin.etudiant.edit', ['etudiant' =>  $etudiant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $validatedData = $request->validate($this->validationRules());
        $etudiant->update($validatedData);
        return redirect()->route('etudiants.show', $etudiant)->with('updateEtudiant', "student has been updated successfuly");

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
        return redirect()->route('etudiants.index')->with('deleteEtudiant', 'student has been deleted!');

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
            'picture' => 'required | mimes:jpeg,jpg,png | max:1000',
            'joining_date'=> 'required|date',
        ];
    }
}
