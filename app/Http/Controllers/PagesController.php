<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Page index ou accueil
    public function index(){
        return view('accueil');
    }

    //Page d'abonnements
    public function abonnements(){
        return view('abonnements');
    }
}
