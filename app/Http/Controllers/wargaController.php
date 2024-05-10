<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class wargaController extends Controller
{
    public function index(){
        $warga = DB::table('warga')->get();
        return view('warga.index',['warga'=>$warga]);
    }

    public function add(){
        return view('warga.add');
    }

    public function addSave(Request $request){
        DB::table('warga')->insert([
            'NIK'=>$request->NIK,
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'nomor_telepon'=>$request->nomor_telepon,
        ]);
        return redirect('/warga');
    }

    public function edit(){
        
    }
}
