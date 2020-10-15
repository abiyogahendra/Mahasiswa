<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Nilai;
use Validator;

class DataNilaiController extends Controller
{
    public function index(){
        $dataNilai = Nilai::all();
        //dd($dataNilai->toArray());
        return view('admin.page.data_Nilai')
            ->withData($dataNilai)    
        ;
    }
}