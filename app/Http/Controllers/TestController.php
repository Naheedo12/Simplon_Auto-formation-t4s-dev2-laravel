<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return "Je suis le contrôleur TestController";
    }
    public function show()
    {
        return view("accueil");
    }
    public function greet(string $prenom)
    {
        return 'Bonjour '.$prenom;
    }
    public function profil(int $id, int $age)
    {
        return 'L utilisateur '. $id . ' a ' . $age . ' ans';
    }
    public function showArticle(int $id)
    {
        return "Vous consultez l article $id";
    }


}
