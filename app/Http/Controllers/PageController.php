<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index(){
       $armenia = Http::get('https://coronavirus-19-api.herokuapp.com/countries/Armenia');

       if ($armenia->failed()){
           $countries = [];
       }
       return view('welcome', compact('armenia'));
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
