<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Obatalkes_m;
use App\Models\Signa_m;
use App\Models\Resep;

class DashboardController extends Controller
{
    public function index(){
        $obatalkes_m = Obatalkes_m::all();
        $signa_m = Signa_m::all();
        $obat = Obatalkes_m::all();
        $signa = Signa_m::all();
        return view('dashboard',[
            'title'=>'Dasboard','obatalkes_m'=>$obatalkes_m, 'signa_m'=>$signa_m,'obat'=>$obat,'obat'=>$obat,'signa'=>$signa
        ]);

    }
  public function store(Request $request)
    {
        // dd($request);
        Resep::create($request->all());
        return redirect('/dashboard')-> with('status','Indikator Berhasil Ditambah');
    }
}
