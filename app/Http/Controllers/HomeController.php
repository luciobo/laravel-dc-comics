<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\train;

class HomeController extends Controller {
    
    function home() {

        // $train = train::all();

        // dump($train);

        return view('home',[
            // "train" => $train,
        ]);
    }

}
