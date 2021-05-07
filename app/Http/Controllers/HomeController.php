<?php

namespace App\Http\Controllers;

use App\Etudiant;
use App\Projet;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->Except('Welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function Welcome(){
        $student= Etudiant::inRandomOrder()->limit(6)->get();



        $project=Projet::inRandomOrder()->limit(6)->get();





        return view('welcome');
    }
}
