<?php

namespace App\Http\Controllers\Etudiant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dépot;

class EtudiantController extends Controller
{
    public function index(){
        $this->middleware('auth');
    	return view('etudiant.show');
    }

    public function getDépots(){
    	$dépots = Dépot::all();

    	return view('etudiant.show')->with('dépots', $dépots);
    }

    public function save(Request $request){
    	$dépot = new dépot;
    	$dépot->datedepot = $request->input('datedepot');
    	$dépot->datefinal = $request->input('datefinal');
    	$dépot->sujet = $request->input('sujet');
    	$dépot->contenu = $request->input('contenu');
    	$dépot->enseignant_id = $request->input('enseignant_id');
    	$dépot->etudiant_id = $request->input('etudiant_id');
    	$dépot->projet_id = $request->input('projet_id');
    	$dépot->equipe_id = $request->input('equipe_id');
  		$dépot->save();

  		return redirect('/Etudiant/show');
    }

    public function update(Request $request, $id){
    	$dépot = Dépot::find($id);
    	$input = $request->all();
		$dépot->fill($input)->save();

    	return redirect('/Etudiant/show');
    }

    public function delete($id)
    {
        $dépots = Dépot::find($id);
        $dépots->delete();
 
        return redirect('/Etudiant/show');
    }
}
