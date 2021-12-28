<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Obatalkes_m;
use App\Models\Signa_m;

class DashboardController extends Controller
{
    public function index(){
        $obatalkes_m = Obatalkes_m::all();
        $signa_m = Signa_m::all();
        return view('dashboard',[
            'title'=>'Dasboard','obatalkes_m'=>$obatalkes_m, 'signa_m'=>$signa_m
        ]);

    }
  
}
