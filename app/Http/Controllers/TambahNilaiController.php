<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nilai;
use Validator;

class TambahNilaiController extends Controller {
    
    public function index(){
        
        return view('admin.page.tambah_Nilai')   
        ;
    }

    public function tambah_nilai(Request $request){
        $validator = Validator::make($request->all(),
        
            [
                'nim'           => 'required',
                'matakuliah'    => 'required',
                'nilai'         => 'required',
            ],
            [
                'nim.required'          => 'NIM Mahasiswa Harus Diisikan',
                'matakuliah.required'   => 'Matakuliah Harus Diisikan',
                'nilai.required'        => 'Nilai Harus Diisikan',
            ]        
        );
        //dd($request->all());
        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $new_nilai = new Nilai();
        $new_nilai->nim             =   $request->input('nim');
        $new_nilai->matakuliah      =   $request->input('matakuliah');
        $new_nilai->nilai           =   $request->input('nilai');

        $new_nilai->save();

        return redirect()->route('data_nilai');

    }

    public function nilai_delete(Request $request, $id){
        $dataNilai = Nilai::where('id_nilai','=', $id)->first();

        $dataYhapus = [
            'id_nilai'      => $request->matakuliah,
            'nilai'         => $request->nilai,            
        ];

        $delete = Nilai::where('id_nilai','=', $id)->delete($dataYhapus);
        return redirect()->route('data_nilai');
    }

}