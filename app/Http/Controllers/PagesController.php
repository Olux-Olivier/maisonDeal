<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Page index ou accueil
    public function index(){
        return view('index');
    }

    //Page d'abonnements
    public function abonnements(){
        return view('abonnements');
    }

    //page contact
    public function contact(){
        return view('contact');
    }

    //page connexion
    public function connexion(){
        return view('connexion');
    }
}
