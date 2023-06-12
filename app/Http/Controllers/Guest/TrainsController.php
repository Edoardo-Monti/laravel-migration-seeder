<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainsController extends Controller
{
    public function index(){
        
        $trains = Train::All();

        return view('welcome', compact('trains'));

    }
}
