<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index(){
//       $armenia = Http::get('https://coronavirus-19-api.herokuapp.com/countries/Armenia');
//       $world = Http::get('https://coronavirus-19-api.herokuapp.com/countries/world');
//       if ($armenia->serverError()){
//           $armenia = "No info";
//           $world = "No info";
//       }
//       return view('welcome', compact('armenia', 'world'));
       return view('welcome');
    }

    public function allCountries(){
        $request = Http::get('https://coronavirus-19-api.herokuapp.com/countries');
        $countries = $request->json();

        if ($request->failed()){
            $countries = [];
        }
        return view('countries', compact('countries'));
    }

}
