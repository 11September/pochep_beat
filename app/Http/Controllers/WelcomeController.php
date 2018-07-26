<?php

namespace App\Http\Controllers;

use App\Person;
use App\Photo;
use App\Track;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $persons = Person::all();

        $photos = Photo::all();

        $tracks = Track::all();

        $this->render($tracks);

        return view('index', compact('persons', 'photos', 'tracks'));
    }

    public function render($items)
    {
        $photos_array = array();
        foreach ($items as $item) {
            if (json_decode($item->track)) {
                foreach (json_decode($item->track) as $file){
                    filter_var($file, FILTER_VALIDATE_INT);
                    array_push($photos_array, $file);
                    $item->track = $file->download_link;
                }
            }else{
                array_push($photos_array, $item->track);
            }
        }
        return $photos_array;
    }
}
