<?php

namespace App\Http\Controllers;
use App\TravelPackage;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index(){
        $TravelPackage = TravelPackage::all();
        return view("index",[
            "travelpackages" => $TravelPackage
        ]);
    }
}
