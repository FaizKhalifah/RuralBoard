<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class mainController extends Controller
{
    public function index(){
        // $warga = DB::table('warga')->get();
        // return view('dashboard.index',['warga'=>$warga]);
    }
}
