<?php

namespace App\Http\Controllers\Admin;
use App\Mail\NewEenseignant;
use App\Enseignant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.enseignant.index', ['enseignants' => Enseignant::paginate(100)]);
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
       $validatedData['picture'] = $request->picture->store('uploads','public');
        
       $enseignant = Enseignant::create($validatedData);
       
       Mail::to($enseignant->email)->send(new NewEenseignant($enseignant));

       return redirect()->route('enseignants.show', $enseignant)->with('storeEnseignant', "Enseignant has been added successfuly");
    

    }
      /*$enseignant=new Enseignant();
       $enseignant->nom = $request->input('nom');
       $enseignant->prenom= $request->input('prenom');
       $enseignant->email= $request->input('email');
       $enseignant->department= $request->input('department');
       $enseignant->projects= $request->input('projects');
       $enseignant->tasks= $request->input('tasks');
       $enseignant->joining_date= $request->input('joining_date');
       $enseignant->uploads= $request->input('uploads');
       $enseignant->phone= $request->input('phone');
       $enseignant->gender= $request->input('gender');
       $enseignant->adresse= $request->input('adresse');
       if($request->hasFile('picture')){
                             $file=$request->file('picture');
                             $extension=$file->getClientOriginalExtension();
        //filename to store
                                 $filename = time() . '.' . $extension;
                                  $file->move('uploads/images',$filename);
       // $file->move('public/img',$filename);
                                    $enseignant->picture=$filename;
        //upload
       }

       else{

        return $request;
        $enseignant->picture='';
             
           }
    
              $enseignant->save();* }/

    

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
        $validatedData['picture'] = $request->picture->store('uploads','public');

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
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'phone' => 'required',
            'email' => 'required|email',
            'adresse' => 'required|max:255',
            'department' => 'required|string',
            'gender' => 'required|string',
            'picture' => 'required|file|image',
            'joining_date'=> 'required|date',
            'uploads'=>'required|numeric',
            'tasks'=>'required|numeric',
            'projects'=>'required|numeric',
        ];
    }
}
