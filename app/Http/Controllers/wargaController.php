<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\Wargas;

class wargaController extends Controller
{
    public function index(){
        $warga = Wargas::all();
        return view('warga.index',['warga'=>$warga]);
    }

    public function add(){
        return view('warga.add');
    }

    public function addSave(Request $request):RedirectResponse{
        $warga = new Wargas;
        $warga->nik=$request->nik;
        $warga->nama=$request->nama;
        $warga->alamat=$request->alamat;
        $warga->no_telpon=$request->no_telpon;
        $warga->save();

        return redirect('/warga');
    }

    public function edit($nik){
        $warga = Wargas::where('nik',$nik)->get();
		return view('warga.edit',['warga' => $warga]);
    }

    public function editSave(Request $request){
        $warga = Wargas::find($request);
        $warga->nama=$request->nama;
        $warga->alamat=$request->alamat;
        $warga->no_telpon=$request->no_telpon;
        $warga->save();
    }
    
    // public function edit($NIK){
    //     $warga = DB::table('warga')->where('NIK',$NIK)->get();
	// 	return view('warga.edit',['warga' => $warga]);
    // }

    // public function editSave(Request $request){
	// 	DB::table('warga')->where('NIK',$request->NIK)->update([
	// 		'nama' => $request->nama,
	// 		'alamat' => $request->alamat,
	// 		'nomor_telepon' => $request->nomor_telepon
	// 	]);
	// 	return redirect('/warga');
    // }

    // public function delete($NIK){
    //     DB::table('warga')->where('NIK',$NIK)->delete();
    //     return redirect('/warga');
    // }
}
