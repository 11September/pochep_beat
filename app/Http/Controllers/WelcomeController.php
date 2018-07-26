<?php

namespace App\Http\Controllers;

use App\Person;
use App\Photo;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $persons = Person::all();

        $photos = Photo::all();

        return view('index', compact('persons', 'photos'));
    }
}
