<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;


class DataController extends Controller
{
    // public function __construct(){
    //     $this->middleware(['web','check.auth']);
    // }


    public function LoadingPage(){
        // if(!Auth::check()){
        //     return redirect()->route('Login');
        // }

        $dataMahasiswa = Mahasiswa::paginate(10);
        //dd($dataMahasiswa->toArray());
        return view('admin.page.beranda_admin')
           ->withData($dataMahasiswa);
    }
}