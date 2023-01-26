<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class HomeController extends Controller {
    
    function home() {

        $comic = Comic::all();

        // dump($comic);

        return view('home',[
            // "train" => $train,
        ]);
    }

}
