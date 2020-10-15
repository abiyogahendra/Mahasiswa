<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Nilai;
Use App\Models\Mahasiswa;
use Validator;
use Auth;
use Hash;

class OperasionalController extends Controller {

    // public function __construct(){
    //     $this->middleware(['web']);
    // }

    public function LoginAdmin(Request $request) {
        $datauser = User::all();

        //dd($datauser->toArray());

        $validator = Validator::make($request->all(),
            [
                'email'=>'required|email',
                'password'=>'required'
            ],

            ['email.required'=>'Email Harus Di isikan','password.required'=>'password Diharuskan']
        );

        if ($validator->fails()) {
            return response()->json([
                'status' => 500,
                'message' => 'Email dan password harus diisi'
            ]);
        }      
        
        $credentials = $request->only('email', 'password');

            $email = $request->email;
            $password = $request->password;

            
        if (Auth::attempt($credentials)) {
           return redirect()->route('show_data');  
            
        }else{
           return response()->json([
            'status' => 500,
            'message' => 'Email dan password tidak sesuai'
        ]); 
        }     
    }

    public function index_delete(Request $request, $id){
        $dataMahasiswa = Mahasiswa::where('id','=', $id)->first();
        $dataYhapus = [
            'nama'          => $request->nama,
            'email'         => $request->email,
            'nim'           => $request->nim,
            'kelas'         => $request->kelas,
            'foto'          => $request->foto,
        ];
        //dd($request->nim);
        $dataNhapus = [
            'id_nilai'      => $request->matakuliah,
            'nilai'         => $request->nilai,            
        ];

        $delete1 = Nilai::where('nim','=', $request->nim)->delete($dataNhapus);
        $delete2 = Mahasiswa::where('id','=', $id)->delete($dataYhapus);
        return redirect()->route('mahasiswa');
    }

    public function index_edit(Request $request, $id){
        $dataMahasiswa = Mahasiswa::where('id','=', $id)->first();
        //dd($dataMahasiswa->toArray());

        return view('admin.page.edit', ['data' => $dataMahasiswa]);

    }

    public function post_edit(Request $request, $id){
        $validator = Validator::make($request->all(),
                [
                    'nama'       =>'required',
                    'email'      =>'required',
                    'nim'        =>'required',
                    'kelas'      =>'required',
                                                      
                ],
                [
                    'nama.required'         =>'Nama Harus Disikan',
                    'email.required'        =>'email Harus Diisikan',
                    'nim.required'          =>'nim Harus Diisikan',
                    'kelas.required'        =>'kelas Harus diisikan',
                ]       
            );

        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'nama'       => $request->nama,
            'email'      => $request->email,
            'nim'       => $request->nim,
            'kelas'      => $request->kelas,
        ];

        $update = Mahasiswa::where('id',$id)->update($data);
        return redirect()->route('mahasiswa');
    }

    public function index_tambah(Request $request){
        
        //dd($request->toArray());
          
         $validator = Validator::make($request->all(),
                 [
                     'nama'         =>'required',
                     'email'        =>'required',
                     'nim'          =>'required',
                     'kelas'        =>'required',
                     'foto'        => 'required',                                       
                 ],
                 [
                     'nama.required'        =>'Nama Harus Disikan',
                     'email.required'       =>'Email Harus Diisikan',
                     'nim.required'         =>'Nim Harus diisikan',
                     'kelas.required'       =>'Kelas Harus Diisikan',
                     'foto.required'        =>'Image Harus diisikan', 
                 ]       
             );
 
                 if($validator->fails()){
                     return redirect()->back()
                         ->withErrors($validator)
                         ->withInput();
                 }
                     
                         $file = $request->file('foto');
 
                         $nama_image = $file->getClientOriginalName();
                         
                            // dd($file);
 
                         $tujuan_upload = '../storage/gambar/mahasiswa';
                         $file->move($tujuan_upload,$file->getClientOriginalName());
 
 
                 $new_mahasiswa = new Mahasiswa();
                 $new_mahasiswa->nama       =       $request->input('nama');
                 $new_mahasiswa->email      =       $request->input('email');
                 $new_mahasiswa->nim        =       $request->input('nim');
                 $new_mahasiswa->kelas      =       $request->input('kelas');
                 $new_mahasiswa->foto       =       $file->getClientOriginalName();
 
 
                 $new_mahasiswa->save();
         
             return redirect()->route('mahasiswa');
         
     }
}