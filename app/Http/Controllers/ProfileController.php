<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile; // n'oublie pas d'importer ton modèle

class ProfileController extends Controller
{
    public function store(Request $request)
    {
        $profile = new Profile();
        $profile->user_id = $request->user_id;
        $profile->bio = $request->bio;
        $profile->Avatar = $request->Avatar;

        $profile->save();

        return $profile;
    }
}
