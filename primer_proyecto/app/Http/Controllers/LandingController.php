<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('landing.index');
    }
    public function acercade(){
        return view('landing.acercade');
    }
    public function Domicilios(){
        return view('landing.Domicilios');
    }
    public function contacto(){
        return view('landing.contacto');
    }
}
